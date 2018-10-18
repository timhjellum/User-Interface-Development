<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "http://www.eia.gov/beta/outages/";
$OneLabel = "Status of Nuclear Outages";
$OnePrefix = "BETA:";

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
                    <h2>Released Daily</h2></li>
                <li><span><?=$OnePrefix?></span>&#160;&#160;
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'>
                        <?=$OneLabel?>
                    </a></li>
                <li><span><?=$TwoDate?></span>&#160;&#160;
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'>
                        <?=$TwoLabel?>
                    </a></li>
                <li><span><?=$ThrDate?></span>&#160;&#160;
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'>
                        <?=$ThrLabel?>
                    </a></li>
                <li><span><?=$FouDate?></span>&#160;&#160;
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'>
                        <?=$FouLabel?>
                    </a></li>
                <li><span><?=$FivDate?></span>&#160;&#160;
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'>
                        <?=$FivLabel?>
                    </a></li>
                <li><span><?=$SixDate?></span>&#160;&#160;
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'>
                        <?=$SixLabel?>
                    </a></li>
            </ul>
        </div>