<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/forecasts/steo/xls/Fig1.xlsx";
$OneLabel = "West Texas Intermediate (WTI) Crude Oil Price Confidence Intervals";
$OneDate = "9/7/2016";

$TwoURL = "/forecasts/steo/xls/Probability_WTI.xlsx";
$TwoLabel = "West Texas Intermediate (WTI) Crude Oil Price Probabilities";
$TwoDate = "9/7/2016";

$ThrURL = "/forecasts/steo/xls/Fig4.xlsx";
$ThrLabel = "Henry Hub Natural Gas Prices and Confidence Intervals";
$ThrDate = "9/7/2016";

$FouURL = "/forecasts/steo/xls/Probability_HH.xlsx";
$FouLabel = "Henry Hub Natural Gas Price Probabilities";
$FouDate = "9/7/2016";

$FivURL = "";
$FivLabel = "";
$FivDate = "";

$SixURL = "";
$SixLabel = "";
$SixDate = "";

?>
    <?php
/* DO NOT EDIT BELOW */
?>

        <div class="secondary hide-mt">
            <ul>
                <li class="head">
                    <h2>Updated Data Series</h2></li>
                <li class="icon">
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'><i class="ico xls"><span>XLS</span></i><span class="date"><?=$OneDate?></span><span class="link-label"><?=$OneLabel?>
                    </span></a></li>
                <li class="icon">
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><i class="ico xls"><span>XLS</span></i><span class="date"><?=$TwoDate?></span><span class="link-label"><?=$TwoLabel?>
                        </span></a></li>
                <li class="icon">
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><i class="ico xls"><span>XLS</span></i><span class="date"><?=$ThrDate?></span><span class="link-label"><?=$ThrLabel?>
                        </span></a></li>
                <li class="icon">
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'><i class="ico xls"><span>XLS</span></i><span class="date"><?=$FouDate?></span><span class="link-label"><?=$FouLabel?>
                        </span></a></li>
                <li class="icon">
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'><i class="ico xls"><span>XLS</span></i><span class="date"><?=$FivDate?></span><span class="link-label"><?=$FivLabel?>
                        </span></a></li>
                <li class="icon">
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'><i class="ico xls"><span>XLS</span></i><span class="date"><?=$SixDate?></span><span class="link-label"><?=$SixLabel?>
                        </span></a></li>
            </ul>
        </div>