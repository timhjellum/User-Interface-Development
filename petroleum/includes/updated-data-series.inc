<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/dnav/pet/pet_sum_sndw_dcus_nus_w.htm/";
$OneLabel = "Weekly supply estimates";
$OneDate = "March 11, 2018";

$TwoURL = "/dnav/pet/pet_pri_spt_s1_d.htm";
$TwoLabel = "Spot prices";
$TwoDate = "March 11, 2018";

$ThrURL = "/dnav/pet/pet_pri_fut_s1_d.htm";
$ThrLabel = "Futures prices (NYMEX)";
$ThrDate = "March 11, 2018";

$FouURL = "/dnav/pet/pet_sum_sndw_dcus_nus_w.htm";
$FouLabel = "Weekly inputs & utilization";
$FouDate = "March 11, 2018";

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

<div class="content-container standard-container hide-mt">
    <ul>
        <li class="head"><h2>Updated Data Series</h2></li>
		<li><span><?=$OneDate?></span>&#160;&#160;<a href='<?=$OneURL?>' title='<?=$OneLabel?>'><?=$OneLabel?></a></li>
		<li><span><?=$TwoDate?></span>&#160;&#160;<a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><?=$TwoLabel?></a></li>
		<li><span><?=$ThrDate?></span>&#160;&#160;<a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><?=$ThrLabel?></a></li>
        <li><span><?=$FouDate?></span>&#160;&#160;<a href='<?=$FouURL?>' title='<?=$FouLabel?>'><?=$FouLabel?></a></li>
		<li><span><?=$FivDate?></span>&#160;&#160;<a href='<?=$FivURL?>' title='<?=$FivLabel?>'><?=$FivLabel?></a></li>
		<li><span><?=$SixDate?></span>&#160;&#160;<a href='<?=$SixURL?>' title='<?=$SixLabel?>'><?=$SixLabel?></a></li>
	</ul>
</div>

