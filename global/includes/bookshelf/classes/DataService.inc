<?php
/**
 * Created by PhpStorm.
 * Updated: 10/17/17
 */
require_once ('localDatabase.inc');

class DataService extends localDatabase {

    public function getFrequencyTags() {

        $this->sql = "SELECT ID, TAG as label
                      FROM NEIC.BS_TAGS 
                      where is_frequency = 1";
        $frequencyTagList = $this->get();

        $ret = array();

        foreach($frequencyTagList as $rec) {
            $ret[$rec["id"]] = $rec['label'];
        }

        $ret["-1"] = 'non-recurring';

        return $ret;
    }

    public function getAllAvailableTags() {
        $this->sql = "select DISTINCT ID, TAG FROM NEIC.BS_TAGS join NEIC.BS_TAGS_LU on BS_TAGS.ID = BS_TAGS_LU.TAG_ID WHERE is_frequency is null or is_frequency <> 1";

        $AllTagsQuery = $this->get();

        $allAvailableTags = array();

        for($i = 0; $i < count($AllTagsQuery); $i++) {
            $allAvailableTags[$AllTagsQuery[$i]['id']] = $AllTagsQuery[$i]['tag'];
        }

        return $allAvailableTags;
    }

    public function getFilteredTags() {

        $this->sql = "select distinct BS_TAGS_LU.TAG_ID TAGID, BS_TAGS.TAG,
                             tf.subcat, tf.topcat, tf.active, tf.subsubcat
                      from NEIC.BS_TAGS_LU, NEIC.BS_TAGS, NEIC.BS_TAGS_FILTER tf, NEIC.BS_REPORTS
                      where NEIC.BS_TAGS.ID = tf.TAGID
                         AND NEIC.BS_TAGS.ID = NEIC.BS_TAGS_LU.TAG_ID
                         AND tf.ACTIVE = 'Y'
                         AND NEIC.BS_TAGS_LU.REPORT_ID = NEIC.BS_REPORTS.ID
                         AND NEIC.BS_REPORTS.VERSION in ( 'current', 'pastissue')
                         AND BS_REPORTS.RELEASE_DATE IS NOT NULL
                       group by BS_TAGS_LU.TAG_ID, BS_TAGS.TAG,tf.subcat,
                                tf.topcat, tf.active, tf.subsubcat ";

        $filteredTagsQuery = $this->get();

        $categories = array();
        for($i = 0; $i < count($filteredTagsQuery); $i++) {
            $topcat = $filteredTagsQuery[$i]["topcat"];
            $subcat = $filteredTagsQuery[$i]['subcat'];
            $subsubcat = $filteredTagsQuery[$i]['subsubcat'];
            $tagId = $filteredTagsQuery[$i]['tagid'];
            $tag = $filteredTagsQuery[$i]['tag'];
            //$numrpt = $filteredTagsQuery[$i]['numreport'];

            if(!is_null($topcat) && !array_key_exists($topcat, $categories)) {
                $categories[$topcat] = array();
            }
            if(!is_null($subcat) && !array_key_exists($subcat, $categories[$topcat])) {
                $categories[$topcat][$subcat] = array();
            }
            if(!is_null($subsubcat) && !array_key_exists($subsubcat, $categories[$topcat][$subcat])) {
                $categories[$topcat][$subcat][$subsubcat] = array();
            }


            if(!is_null($topcat) == "") {
                $categories[$tagId] = trim($tag);
            }
            else if(!is_null($subcat) == "") {
                $categories[$topcat][$tagId] = trim($tag);
            }
            else if(!is_null($subsubcat) == "") {
                $categories[$topcat][$subcat][$tagId] = trim($tag);
            }
            else {
                $categories[$topcat][$subcat][$subsubcat][$tagId] = trim($tag); 
            }


        }

        return $categories;
    }
    
    public function getL2TagsArr($l2id) {
        $bindVariables = array(
            ':L2ID' => $l2id
        );

        $this->sql = " select 'T' || ID as TAGID from NEIC.BS_TAGS WHERE L2_ID = :L2ID";

        $L2Query = $this->get($bindVariables);

        return $L2Query[0]['tagid'];
    }

    private function createReportSubQuery($startdate=null, $enddate=null, $tags=null, $frequencyTags=null) {
        $ret = array();
        $ret['bindVariables'] = array();
        $ret['sql'] = "";
        $ret['frequencySQL'] = "";

        $ret['sql'] = $ret['frequencySQL'] = <<<SQL
select 
  reports.id as report_id 
from 
  neic.bs_reports reports 
  join 
  neic.bs_tags_lu lu 
  on reports.id = lu.report_id 
where 
  reports.version in ('current', 'pastissue') 
  and 
  reports.release_date is not null 
SQL;

        if (!is_null($startdate)) {
            $ret['sql'] .= " and reports.RELEASE_DATE >= TO_DATE(:startdate, 'MM/DD/YYYY')";
            $ret['bindVariables'][":startdate"] = $startdate;
        }
        if (!is_null($enddate)) {
            $ret['sql'] .= " and reports.RELEASE_DATE <= TO_DATE(:enddate, 'MM/DD/YYYY')";
            $ret['bindVariables'][":enddate"] = $enddate;
        }

        $i = 0;
        if(count($tags) > 0) {
            $tagClauses = array();
            foreach ($tags as $tag) {
                array_push($tagClauses, "lu.tag_id = :tag{$i}");
                $ret['bindVariables'][":tag{$i}"] = $tag;
                $i++;
            }
            $ret['sql'] .= " and (" . implode(' or ', $tagClauses) . ") ";
            if(count($tags) > 1) {
                $ret['bindVariables'][":tagCounts"] = count($tags);
                $ret['sql'] .= <<<SQL
group by reports.ID having count(*) = :tagCounts 
SQL;
            }
        }

        if(count($frequencyTags) > 0) {
            $containsNonRecurringTag = false;
            $tagClauses = array();

            foreach ($frequencyTags as $tag) {
                if($tag == -1) {
                    $containsNonRecurringTag = true;
                }
                else {
                    array_push($tagClauses, "lu.tag_id = :tag{$i}");
                    $ret['bindVariables'][":tag{$i}"] = $tag;
                    $i++;
                }
            }
            
            if((count($frequencyTags) > 0 && !$containsNonRecurringTag) || count($frequencyTags) > 1) {
                $ret['frequencySQL'] .= " and (" . implode(' or ', $tagClauses) . ") ";
                if($containsNonRecurringTag) {
                    $ret['frequencySQL'] .= " UNION ";
                }
            }
            if($containsNonRecurringTag) {
                $nonRecurringSQL =<<<SQL
select 
  reports.id as report_id 
from 
  neic.bs_reports reports 
  join 
  neic.bs_tags_lu lu 
  on reports.id = lu.report_id 
where 
  reports.version in ('current', 'pastissue') 
  and 
  reports.release_date is not null 
  and reports.id not in (
    select report_id from neic.bs_tags_lu where tag_id in (select id from neic.bs_tags where is_frequency = 1)
  )
SQL;
                if(count($frequencyTags) === 1) {
                    $ret['frequencySQL'] = $nonRecurringSQL;
                }
                else {
                    $ret['frequencySQL'] .= $nonRecurringSQL;
                }
           }
        }

        return $ret;
    }

    /*
     * Returns the array of tags and associated report counts based on the filters provided
     */
    public function getTagCounts($startdate=null, $enddate=null,$tags=null, $frequencyTags=null) {
        $reportSubQuery = $this->createReportSubQuery($startdate, $enddate, $tags, $frequencyTags);

        $bindVariables = $reportSubQuery['bindVariables'];
        $subQuerySql = ' and lu.report_id in (' . $reportSubQuery['sql'] . ') ';
        $subQuerySql .= count($frequencyTags) == 0 ? "" : ' and lu.report_id in (' . $reportSubQuery['frequencySQL'] . ') ';

        $this->sql =<<<SQL
select 
  'T' || tags.id as identifier, tags.tag as label, sum(decode(lu.report_id, null, 0, 1)) as numreports 
from 
neic.bs_tags tags 
left join 
neic.bs_tags_lu lu 
on 
  tags.id = lu.tag_id 
  {$subQuerySql} 
/*where
(tags.is_frequency = 0 or tags.is_frequency is null) */
group by tags.id, tags.tag
order by lower(label) asc
SQL;

        return $this->get($bindVariables);
    }

    /*
     * Get counts for frequency tags
     */
    public function getFrequencyTagCounts($startdate=null, $enddate=null,$tags=null) {
        $ret = array();
        $tagCounts = $this->getTagCounts($startdate, $enddate, $tags);
        $frequencyTags = $this->getFrequencyTags();
        $frequencyTotal = 0;
        $totalReports = 0;
        foreach($tagCounts as $tagCount) {
            $totalReports = max($totalReports, $tagCount['numreports']);

            $id = intval(substr($tagCount['identifier'], 1));
            if(array_key_exists($id, $frequencyTags)) {
                $frequencyTotal += $tagCount['numreports'];
                array_push($ret, $tagCount);
            }
        }

        array_push($ret, array(
            'identifier' => 'T-1',
            'label' => 'non-recurring',
            'numreports' => $totalReports - $frequencyTotal
        ));

        return $ret;
    }

    /*
     * Returns list of reports based on filters
     */
    public function getReports($startdate=null, $enddate=null, $tags=null, $frequencyTags=null) {
        $reportSubQuery = $this->createReportSubQuery($startdate, $enddate, $tags, $frequencyTags);

        $bindVariables = $reportSubQuery['bindVariables'];
        $subQuerySql = 'reports.id in (' . $reportSubQuery['sql'] . ') ';
        $subQuerySql .= count($frequencyTags) == 0 ? "" : ' and reports.id in (' . $reportSubQuery['frequencySQL'] . ') ';


        $this->sql =<<<SQL
SELECT
  reports.id,
  reports.title,
  reports.summary_descript,
  reports.report_number,
  to_char(reports.release_date, 'MONTH DD, YYYY') as release_date,
  reports.link_pdf,
  reports.link_html,
  reports.has_forecast,
  reports.has_data,
  reports.has_analysis,
  listagg(tags.id, ',') within group (order by lower(tags.tag) asc) as alltags
FROM
  neic.bs_reports reports
  left join
  neic.bs_tags_lu lu
  ON
    reports.id = lu.report_id
  left join
  neic.bs_tags tags
  on
    lu.tag_id = tags.id
WHERE
  {$subQuerySql} 
GROUP BY
  
  reports.id,
  reports.title,
  reports.summary_descript,
  reports.report_number,
  reports.release_date,
  reports.link_pdf,
  reports.link_html,
  reports.has_forecast,
  reports.has_data,
  reports.has_analysis
SQL;

        return $this->get($bindVariables);
    }

    /*
     * Takes an array of tag id's and split it into two seperate arrays, one for non-frequency tags, the other for frequency tags
     */
    public function seperateFrequencyTags($tags=null) {

        $selectedFrequencyTags = array();
        $selectedTags = array();
        $frequencyTags = $this->getFrequencyTags();

        foreach($tags as $tag) {
            if (array_key_exists($tag, $frequencyTags)) {
                array_push($selectedFrequencyTags, $tag);
            } else {
                array_push($selectedTags, $tag);
            }
        }

        return array(
            'tags' => $selectedTags,
            'frequencyTags' => $selectedFrequencyTags
        );
    }
}