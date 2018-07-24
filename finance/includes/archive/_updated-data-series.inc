<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneUrl = "";
$OneLabel = "";
$OneDate = "";

$TwoUrl = "";
$TwoLabel = "";
$TwoDate = "";

$ThrUrl = "";
$ThrLabel = "";
$ThrDate = "";

$FouUrl = "";
$FouLabel = "";
$FouDate = "";

$FivUrl = "";
$FivLabel = "";
$FivDate = "";

$SixUrl = "";
$SixLabel = "";
$SixDate = "";

?>
    <?php
/* DO NOT EDIT BELOW */
?>

<div class="primary hide-mt">
    <ul class="updated-data-series">
        <li class="head"><h2>Updated Data Series</h2></li>
        <li><span class="date"><?=$OneDate?></span><a href='<?=$OneURL?>' title='<?=$OneLabel?>'><?=$OneLabel?></a></li>
        <li><span class="date"><?=$TwoDate?></span><a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><?=$TwoLabel?></a></li>
        <li><span class="date"><?=$ThrDate?></span><a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><?=$ThrLabel?></a></li>
        <li><span class="date"><?=$FouDate?></span><a href='<?=$FouURL?>' title='<?=$FouLabel?>'><?=$FouLabel?></a></li>
        <li><span class="date"><?=$FivDate?></span><a href='<?=$FivURL?>' title='<?=$FivLabel?>'><?=$FivLabel?></a></li>
        <li><span class="date"><?=$SixDate?></span><a href='<?=$SixURL?>' title='<?=$SixLabel?>'><?=$SixLabel?></a></li>
    </ul>
</div>