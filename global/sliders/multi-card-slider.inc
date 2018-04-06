<?php
$l2dir = str_replace ("index.php", "", $_SERVER['SCRIPT_NAME']); ?>


<div class="l-row slider-multi-header">
    <div class="l-full-width-col">
        <div class="left">
            <h2>Current Issues &amp; Trends</h2>
        </div>
        <div class="right">
            <a href="<?php echo $l2dir . 'issuestrends/'?>" class="see-all">See all</a>
            <div class="slider-multi-pager"></div>
        </div>
    </div>    
</div>
<div class="l-row">
    <div class="l-full-width-col">
        <div class="slider-multi">
            <ul>
<?php /* include"it_universal.inc"; */ ?>
<?php include('global/includes/it_universal.inc');
// limit to 25 on L2 pages, all on issue trends (see more) page
$cardLimit = strpos($_SERVER['SCRIPT_NAME'],"issuestrends") ? count($IssuesTrendsQuery) : min(count($IssuesTrendsQuery), 25);
$displayedCards = 0;
for($j=0; $j < count($IssuesTrendsQuery) && $displayedCards < $cardLimit; $j++) {
    $row = $IssuesTrendsQuery[$j];
    if(strtolower($row['active'])=="y"){
        // If this Issue & Trend is linked to a Bookshelf report
        if($row['bsrec'] == 1){
            // Use the concatenated list of tags associated with this report -->
            $thetags = $row['reporttags'];
            // Use the report fields from the table ARCHIVES_REPORT_LIST -->
            $thetitle = $row['title'];
            $thelink = $row['link_html'];
        }else{ // Otherwise, this is a custom Issue & Trend -->
            // Use the tags saved with this custom Issue/Trend -->
            $thetags = $row['tags'];
            // Use the custom issue/trend fields from the table ISSUESTRENDS -->
            $thetitle = $row['linktitle'];
            $thelink = $row['linkurl'];
        }
        $thetagnames = $row['reporttagnames'];
        $displayedCards++;
?>
                <li>
                    <a href="<?= $thelink ?>" class="thumbnail" style="background-image: url('<?= $row['imgurl'] ?>');"></a>
                    <div class="slide-content">
                        <h3 class="ellipsis"><a href="<?= $thelink ?>"><?= $thetitle ?></a></h3>
                        <p class="tags"><?php include('global/includes/it_displaytags.inc') ?></p>
                    </div>
                </li>
<?php } } ?>
            </ul>
        </div>
    </div>
</div>
<?php /* include "it_displaytags.inc"; */ ?>