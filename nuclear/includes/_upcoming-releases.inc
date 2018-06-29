<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "";

$OneURL = "";
$OneLabel = "";
$OneDate = "";

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
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'>
                        <span class="link-label">
                    <?=$OneLabel?>
                </span>: <em><span class="date"><?=$OneDate?></span></em></a></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'>
                        <span class="link-label">
                    <?=$TwoLabel?>
                </span>: <em><span class="date"><?=$TwoDate?></span></em></a></li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'>
                        <span class="link-label">
                    <?=$ThrLabel?>
                </span>: <em><span class="date"><?=$ThrDate?></span></em></a></li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'>
                        <span class="link-label">
                    <?=$FouLabel?>
                </span>: <em><span class="date"><?=$FouDate?></span></em></a></li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'>
                        <span class="link-label">
                    <?=$FivLabel?>
                </span>: <em><span class="date"><?=$FivDate?></span></em></a></li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'>
                        <span class="link-label">
                    <?=$SixLabel?>
                </span>: <em><span class="date"><?=$SixDate?></span></em></a></li>
                <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
            </ul>
        </div>