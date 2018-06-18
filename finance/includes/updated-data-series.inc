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

$FivURL = "/";
$FivLabel = "";
$FivDate = "";

$SixURL = "/";
$SixLabel = "";
$SixDate = "";

?>
    <?php
/* DO NOT EDIT BELOW */
?>

        <div class="secondary hide-mt">
            <ul>
                <li class="head">
                    <h2>Updated Data Series</h2>
                </li>
                <li><span><?=$OneDate?></span>&#160;&#160;
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'>
                        <?=$OneLabel?>
                    </a>
                </li>
                <li><span><?=$TwoDate?></span>&#160;&#160;
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'>
                        <?=$TwoLabel?>
                    </a>
                </li>
                <li><span><?=$ThrDate?></span>&#160;&#160;
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'>
                        <?=$ThrLabel?>
                    </a>
                </li>
                <li><span><?=$FouDate?></span>&#160;&#160;
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'>
                        <?=$FouLabel?>
                    </a>
                </li>
                <li><span><?=$FivDate?></span>&#160;&#160;
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'>
                        <?=$FivLabel?>
                    </a>
                </li>
                <li><span><?=$SixDate?></span>&#160;&#160;
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'>
                        <?=$SixLabel?>
                    </a>
                </li>
            </ul>
        </div>