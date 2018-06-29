<?php
/* edit the link URL, Label and Date below                             */
/* leave fields blank if unused - a script will hide unused list items */

$mainTitle = "Beta: Water and Plant-Level Data";

$OneURL = "/beta/electricity/data/browser";
$OneLabel = "Updated Electricity Data Browser";
$OneDate = "Now includes water usage and new plant-level information.";

$TwoURL = "";
$TwoLabel = "";
$TwoDate = "";

$ThrURL = "";
$ThrLabel = "";
$ThrDate = "";

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
                    <h2>
                        <?=$mainTitle?>
                    </h2></li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>' class="link-label">
                        <?=$OneLabel?><span>: <?=$OneDate?></span></a></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>' class="link-label">
                        <?=$TwoLabel?><span>: <?=$TwoDate?></span></a></li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>' class="link-label">
                        <?=$ThrLabel?><span>: <?=$ThrDate?></span></a></li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>' class="link-label">
                        <?=$FouLabel?><span>: <?=$FouDate?></span></a></li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>' class="link-label">
                        <?=$FivLabel?><span>: <?=$FivDate?></span></a></li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>' class="link-label">
                        <?=$SixLabel?><span>: <?=$SixDate?></span></a></li>
            </ul>
        </div>