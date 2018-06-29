<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "projection-data.php#forecasts";
$OneLabel = "Monthly short-term forecasts to 2018";
$OneDate = "02/06/2018";

$TwoURL = "projection-data.php#annualproj";
$TwoLabel = "Annual projections to 2050";
$TwoDate = "02/06/2018";

$ThrURL = "projection-data.php#intlproj";
$ThrLabel = "International projections to 2050";
$ThrDate = "09/14/2017";

$FouURL = "";
$FouLabel = "";
$FouDate = "";

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
                    <h2>Updated Data Series</h2>
                </li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'><span class="date"><?=$OneDate?></span><span class="link-label"><?=$OneLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><span class="date"><?=$TwoDate?></span><span class="link-label"><?=$TwoLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><span class="date"><?=$ThrDate?></span><span class="link-label"><?=$ThrLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'><span class="date"><?=$FouDate?></span><span class="link-label"><?=$FouLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'><span class="date"><?=$FivDate?></span><span class="link-label"><?=$FivLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'><span class="date"><?=$SixDate?></span><span class="link-label"><?=$SixLabel?></span></a>
                </li>
            </ul>
        </div>