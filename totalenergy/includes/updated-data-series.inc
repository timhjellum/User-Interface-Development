<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/beta/MER/?tbl=T01.01#/?f=M";
$OneLabel = "Primary energy overview";
$OneDate = "04/26/2018";

$TwoURL = "/beta/MER/?tbl=T01.06#/?f=M";
$TwoLabel = "Cost of fuels to end users in real dollars";
$TwoDate = "04/26/2018";

$ThrURL = "/beta/MER/?tbl=T02.01#/?f=M";
$ThrLabel = "Energy consumption by sector";
$ThrDate = "04/26/2018";

$FouURL = "/beta/MER/?tbl=T03.03C#/?f=M";
$FouLabel = "Imports from OPEC Countries";
$FouDate = "04/26/2018";

$FivURL = "/beta/MER/?tbl=T03.03D#/?f=M";
$FivLabel = "Imports from Non-OPEC Countries";
$FivDate = "04/26/2018";

$SixURL = "";
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

