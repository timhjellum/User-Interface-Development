<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/beta/MER/index.cfm?tbl=T06.01#/?f=M&start=200001";
$OneLabel = "Overview of consumption, production, and exports";
$OneDate = "04/24/2018";

$TwoURL = "/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=8&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.COW-US-99.M~ELEC.GEN.COW-US-1.M~ELEC.GEN.COW-US-94.M&columnchart=ELEC.GEN.COW-US-99.M~ELEC.GEN.COW-US-1.M~ELEC.GEN.COW-US-94.M&map=ELEC.GEN.COW-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&maptype=0&rse=0&pin=";
$TwoLabel = "Net generation for coal, monthly";
$TwoDate = "04/24/2018";

$ThrURL = "/electricity/data/browser/#/topic/3?agg=1,0,2&fuel=8&geo=g&sec=o3g&linechart=ELEC.CONS_EG.COW-US-99.M~ELEC.CONS_EG.COW-US-1.M~ELEC.CONS_EG.COW-US-94.M~ELEC.CONS_EG.COW-US-96.M~ELEC.CONS_EG.COW-US-97.M&columnchart=ELEC.CONS_EG.COW-US-99.M~ELEC.CONS_EG.COW-US-1.M~ELEC.CONS_EG.COW-US-94.M~ELEC.CONS_EG.COW-US-96.M~ELEC.CONS_EG.COW-US-97.M&map=ELEC.CONS_EG.COW-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&pin=&rse=0&maptype=0";
$ThrLabel = "Consumption of coal for electricity generation by sector";
$ThrDate = "04/24/2018";

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

