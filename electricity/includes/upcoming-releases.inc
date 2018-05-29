<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Upcoming Releases";

$OneURL = "/electricity/wholesale/";
$OneLabel = "Wholesale Electricity and Natural Gas Market Data";
$OneDate = "Biweekly on  Thursday";

$TwoURL = "/electricity/monthly/";
$TwoLabel = "Electric Power Monthly";
$TwoDate = "between the 20th and the 25th  of the month";

$ThrURL = "/electricity/monthly/update";
$ThrLabel = "Electricity Monthly Update";
$ThrDate = "between the 20th and the 25th of the month";

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

