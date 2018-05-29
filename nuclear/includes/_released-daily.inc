<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=08&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.NUC-US-99.M~ELEC.GEN.NUC-PA-99.M~ELEC.GEN.NUC-IL-99.M&columnchart=ELEC.GEN.NUC-US-99.M~ELEC.GEN.NUC-PA-99.M~ELEC.GEN.NUC-IL-99.M&map=ELEC.GEN.NUC-US-99.M&freq=M";
$OneLabel = "Net generation from nuclear, monthly";
$OneDate = "04/24/2018";

$TwoURL = "/nuclear/generation/";
$TwoLabel = "U.S. Nuclear Generation and Generating Capacity";
$TwoDate = "04/25/2018";

$ThrURL = "";
$ThrLabel = "";
$ThrDate = "";

$FouURL = "";
$FouLabel = "";
$FouDate = "";

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

