<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
    <?php
$json_datafile = $_SERVER['DOCUMENT_ROOT'] . '/global/includes/issuestrends/bookshelf_records_input.json';
if($json_datafile && file_exists($json_datafile)) {
$json_data_tmp = trim(file_get_contents($json_datafile));
$json_data = preg_replace('/<<<(.*?)>>>/si', '', $json_data_tmp, -1, $cnt);
}
//print $json_data;
//die();
$returnArr = json_decode($json_data, true);
//print_r($returnArr);
//print "------<br/>";
//print_r($returnArr['l2page']['page_pet']);
//die();
$RAP = array();
if($l2page && !empty($returnArr))
$RAP = $returnArr['l2page'][$l2page];
/* NOTE:
1. PossibleTagsQuery has already executed by it_universal.php (called by carousel.php) and can be reused
2. IssuesTrendsQuery in that same file cannot be reused because it involves the ISSUESTRENDS table. Instead, the query "recent_AP" below gets the Bookshelf reports
*/
$exploded   = explode(',',$RAP[date('j')]);
//print_r($exploded);
//hsh_sql:
//associated with query name recent_AP
$bindVariables = array();
$j = 0;
$tmp_v2 = '';
$qualifierArr = $exploded;
foreach($qualifierArr as $v1) {
$val = trim($v1);
if($val) {
if($tmp_v2 !== '')
$tmp_v2 .= ", :tmpKey_v1" . $j;
else
$tmp_v2 = " :tmpKey_v1" . $j;
$bindVariables[':tmpKey_v1' . $j] = $val;
$j++;
}
}
$neic->sql = " select
TITLE, RELEASE_DATE, PERIODICITY, HAS_ANALYSIS, HAS_DATA, HAS_FORECAST, LINK_HTML,
listagg(TAGID, ',') within group (order by tag asc) as reporttags,
listagg(TAG, ',') within group (order by tag asc) as reporttagnames
from (
select
distinct TITLE,
RELEASE_DATE,
PERIODICITY,
HAS_ANALYSIS,
HAS_DATA,
HAS_FORECAST,
LINK_HTML,
TAGID,
TAG
from NEIC.ARCHIVES_REPORT_LIST ar_list
inner join NEIC.ARCHIVES_REPORT_LU ar_lu
on ar_list.ID = ar_lu.ID
inner join NEIC.TAGS ar_tag
on ar_lu.TAGID = ar_tag.ID
where
ar_list.ID in ( " . $tmp_v2 . " )
and
ar_tag.ID <> :tag
)
group by TITLE, RELEASE_DATE, PERIODICITY, HAS_ANALYSIS, HAS_DATA, HAS_FORECAST, LINK_HTML
order by RELEASE_DATE desc
";
$bindVariables[":tag"] = $CorrespondingTag;
//print $neic->sql;
//print_r($bindVariables);
$recent_AP = $neic->get($bindVariables);
//print_r($recent_AP);
?>
        <h1>Recent Asecondaryjections</h1>
        <div class="primary">
            <?php
foreach($recent_AP as $row) {
$DataTypesArray = [];
$filename = "";
if(strtolower($row['has_data']) == "y"){
$DataTypesArray[] = "Data";
$filename .= "d";
}
if(strtolower($row['has_analysis']) == "y"){
$DataTypesArray[] = "Analysis";
$filename .= "a";
}
if(strtolower($row['has_forecast']) == "y"){
$DataTypesArray[] = "Forecast";
$filename .= "p";
}
$TitleText = "Report Type";
if(count($DataTypesArray)>1)
$TitleText .= "s";
$TitleText .= ": ";
$count=count($DataTypesArray);
for($x=0;$x<$count;$x++){
$TitleText .= $DataTypesArray[$x];
if($x<$count-1)
$TitleText .= ", ";
}
echo '<ul class="analysis-projections">';
echo '        <li><img src="/global/images/icons/dap/';
if(strtolower($row['has_data']) == "y") {
echo 'd';
}
if(strtolower($row['has_analysis']) == "y") {
echo 'a';
}
if(strtolower($row['has_forecast']) == "y") {
echo 'p';
}
echo '.png" title="' . $TitleText . '"/></li>';
echo PHP_EOL;
echo '        <li class="header">
<h2>';
echo PHP_EOL;
if(strlen($row['link_html']))
echo "<a href=\"".$row['link_html']."\">".$row['title']."</a>";
else
echo $row['title'];
echo PHP_EOL;
echo '</h2></li>';
echo PHP_EOL;
echo '<li class="tags">
<span class="date">Released '.date('F d, Y',strtotime($row['release_date']))."</span>";
echo PHP_EOL;
$thetags = $row['reporttags'];
$thetagnames = $row['reporttagnames'];
$thetitle = $row['title'];
$thelink = $row['link_html'];
include "it_displaytags.inc";
echo "</li>";
echo PHP_EOL;
echo "    </ul>";
echo PHP_EOL;
}
?>
                <ul class="analysis-projections">
                    <li class="footer">
                        <a href="reports.php">See more analysis & projections</a></li>
                </ul>
        </div>