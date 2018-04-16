<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/petroleum/gasdiesel/";
$OneLabel = "Gasoline and Diesel Fuel Update";
$OneDate = "5:00 p.m. ET, Monday";

$TwoURL = "/petroleum/supply/weekly/";
$TwoLabel = "Weekly Petroleum Status Report";
$TwoDate = "10:30 a.m. ET, Wednesday";

$ThrURL = "/petroleum/heatingoilpropane/";
$ThrLabel = "Heating Oil and Propane Update:";
$ThrDate = "After 1:00 p.m. ET, Wednesday (Oct - March only)";

$FouURL = "/petroleum/weekly/";
$FouLabel = "This Week in Petroleum";
$FouDate = "After 1:00 p.m. ET, Wednesday";

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
		<li class="head"><h2>Upcoming Releases</h2></li>
		<li><a href='<?=$OneURL?>' title='<?=$OneLabel?>'><?=$OneLabel?></a>: <span class="date"><?=$OneDate?></span></li>
		<li><a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><?=$TwoLabel?></a>: <span class="date"><?=$TwoDate?></span></li>
		<li><a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><?=$ThrLabel?></a>: <span class="date"><?=$ThrDate?></span></li>
        <li><a href='<?=$FouURL?>' title='<?=$FouLabel?>'><?=$FouLabel?></a>: <span class="date"><?=$FouDate?></span></li>
		<li><a href='<?=$FivURL?>' title='<?=$FivLabel?>'><?=$FivLabel?></a>: <span class="date"><?=$FivDate?></span></li>
		<li><a href='<?=$SixURL?>' title='<?=$SixLabel?>'><?=$SixLabel?></a>: <span class="date"><?=$SixDate?></span></li>
        <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
	</ul>
</div>

