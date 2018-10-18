<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();

//echo $l2id;

//$subjectids = isset($subjectids) ? $subjectids : "";

//hsh_sql:
//associated with query name featured_pics
$bindVariables = array();
$neic->sql = "SELECT * FROM
                    (
                    SELECT DISTINCT BS_REPORTS.TITLE, BS_FEATURED_AP_LU.IMAGE_URL IMAGE,BS_REPORTS.LINK_HTML LINK,
                           BS_REPORTS.RELEASE_DATE, BS_FEATURED_AP_LU.IS_MAIN_FEATURE IS_FEAT
                    FROM   NEIC.BS_REPORTS, NEIC.BS_FEATURED_AP_LU
                    WHERE BS_REPORTS . ID = BS_FEATURED_AP_LU.REPORT_ID
                     AND  BS_FEATURED_AP_LU . L2_ID = " . $l2id . "
                     AND  BS_REPORTS . VERSION in('current', 'pastissue')
                     AND  BS_REPORTS . RELEASE_DATE IS NOT NULL
                     ORDER BY BS_REPORTS.RELEASE_DATE DESC
                    )
                WHERE ROWNUM <= 5";

$featured_pics = $neic->get();

//
//
////hsh_sql:
////associated with query name featured_nopics
//$bindVariables = array();
//$neic->sql = "
//Select * from (
//Select ARCHIVES_REPORT_FEATURES.title, ARCHIVES_REPORT_FEATURES.image,ARCHIVES_REPORT_FEATURES.linkurl, archives_report_list.release_date,
//archives_report_list.link_html
//From NEIC.archives_report_list INNER JOIN NEIC.ARCHIVES_REPORT_FEATURES
//ON archives_report_list.id = ARCHIVES_REPORT_FEATURES.refid
//where ARCHIVES_REPORT_FEATURES.active = :active
//  and ARCHIVES_REPORT_FEATURES.image is null
//";
//if($subjectids == 180) {
//	$neic->sql .= "  and ARCHIVES_REPORT_FEATURES.page_pet = :page_pet ";
//	$bindVariables['page_pet'] = 1;
//}
//$neic->sql .= "
//  order by RELEASE_DATE
//)
//where rownum <= :num_rows
// ";
//$bindVariables["num_rows"] = "3";
//$bindVariables["active"] = "Y";
//
//$featured_nopics = $neic->get($bindVariables);

?>

<?php
//echo count($featured_pics);

if(!empty($featured_pics))
 { ?>
<div class="l-row">
    <div class="l-full-width-col"><!-- report_feature -->
        <!-- h2 class="fln" -->
        <h1>Featured Analysis & Projections</h1>
        <!-- /h2 -->

    <?php
    //Build up to 2 Main Feature Displays
    if(!empty($featured_pics))
      {
      $main_feat_cnt = 0;
      foreach($featured_pics as $v1) {
          if ($v1['is_feat']==1 && $main_feat_cnt<2)
            {
       ?>
        <div class="l-one-third-col">
           <a href ="<?php echo $v1['link']; ?>" class="image-container">
                <img src="<?php echo $v1['image']; ?>" class="responsive" />
               <h3><?php echo $v1['title']; ?></h3>
            </a>
        </div>
       <?php
            ++$main_feat_cnt;
        }
    }

      $feat_cnt = 0; ?>
        <div class="l-one-third-col title-only">
            <?php foreach($featured_pics as $v1) {
                if ($v1['is_feat']==0 && $feat_cnt<3)
                {
            ?>
            <a href="<?php echo $v1['link']; ?>"><h3><?php echo $v1['title']; ?></h3></a>
        <?php
                 ++$feat_cnt;
            }
        }
    }
  ?>
        </div>
    </div>
</div>
<?php
 }
 ?>