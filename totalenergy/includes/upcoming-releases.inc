<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Upcoming Releases";

$OneURL = "/forecasts/steo/";
$OneLabel = "Short-Term Energy Outlook";
$OneDate = "5/8/2018";

$TwoURL = "/totalenergy/data/monthly/";
$TwoLabel = "Monthly Energy Review";
$TwoDate = "5/24/2018";

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
		<li class="head"><h2><?=$mainTitle?></h2></li>
		<li><a href='<?=$OneURL?>' title='<?=$OneLabel?>'><?=$OneLabel?></a>: <span class="date"><?=$OneDate?></span></li>
		<li><a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><?=$TwoLabel?></a>: <span class="date"><?=$TwoDate?></span></li>
		<li><a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><?=$ThrLabel?></a>: <span class="date"><?=$ThrDate?></span></li>
        <li><a href='<?=$FouURL?>' title='<?=$FouLabel?>'><?=$FouLabel?></a>: <span class="date"><?=$FouDate?></span></li>
		<li><a href='<?=$FivURL?>' title='<?=$FivLabel?>'><?=$FivLabel?></a>: <span class="date"><?=$FivDate?></span></li>
		<li><a href='<?=$SixURL?>' title='<?=$SixLabel?>'><?=$SixLabel?></a>: <span class="date"><?=$SixDate?></span></li>
        <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
	</ul>
</div>

