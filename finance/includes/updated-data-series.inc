<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items */
/* Doc = "xls" "pdf" "interactive" "csv" */

$OneURL		= "/forecasts/steo/xls/Fig1.xlsx";
$OneDoc 	= "xls"; 
$OneLabel 	= "West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals";
$OneDate 	= "9/7/2016";

$TwoURL 	= "/forecasts/steo/xls/Probability_WTI.xlsx";
$TwoDoc 	= "xls";
$TwoLabel 	= "West Texas Intermediate (WTI) Crude Oil Price Probabilities";
$TwoDate 	= "9/7/2016";

$ThrURL 	= "/forecasts/steo/xls/Fig4.xlsx";
$ThrDoc 	= "xls";
$ThrLabel 	= "Henry Hub Natural Gas Prices and Confidence Intervals";
$ThrDate 	= "9/7/2016";

$FouURL 	= "/forecasts/steo/xls/Probability_HH.xlsx";
$FouDoc 	= "xls";
$FouLabel 	= "Henry Hub Natural Gas Price Probabilities";
$FouDate 	= "9/7/2016";

$FivURL 	= "";
$FivDoc 	= "";
$FivLabel 	= "";
$FivDate 	= "";

$SixURL 	= "";
$SixDoc 	= "";
$SixLabel 	= "";
$SixDate 	= "";

?>
    <?php
/* DO NOT EDIT BELOW */
?>

<div class="primary hide-mt">
    <ul class="updated-data-series">
        <li class="head"><h2>Updated Data Series</h2></li>
        <li><span class="date"><?=$OneDate?></span><a href='<?=$OneURL?>' title='<?=$OneLabel?>' class='<?=$OneDoc?>'><?=$OneLabel?></a></li>
        <li><span class="date"><?=$TwoDate?></span><a href='<?=$TwoURL?>' title='<?=$TwoLabel?>' class='<?=$TwoDoc?>'><?=$TwoLabel?></a></li>
        <li><span class="date"><?=$ThrDate?></span><a href='<?=$ThrURL?>' title='<?=$ThrLabel?>' class='<?=$ThrDoc?>'><?=$ThrLabel?></a></li>
        <li><span class="date"><?=$FouDate?></span><a href='<?=$FouURL?>' title='<?=$FouLabel?>' class='<?=$FouDoc?>'><?=$FouLabel?></a></li>
        <li><span class="date"><?=$FivDate?></span><a href='<?=$FivURL?>' title='<?=$FivLabel?>' class='<?=$FivDoc?>'><?=$FivLabel?></a></li>
        <li><span class="date"><?=$SixDate?></span><a href='<?=$SixURL?>' title='<?=$SixLabel?>' class='<?=$SixDoc?>'><?=$SixLabel?></a></li>
    </ul>
</div>