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