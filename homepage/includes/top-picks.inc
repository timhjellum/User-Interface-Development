<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$topPicksOneURL = "/petroleum/gasdiesel/";
$topPicksOneLabel = "Gasoline and Diesel Fuel Update";

$topPicksTwoURL = "http://ir.eia.gov/ngs/ngs.html";
$topPicksTwoLabel = "Natural Gas Storage Report";

$topPicksThreeURL = "/petroleum/weekly/";
$topPicksThreeLabel = "This Week in Petroleum";

$topPicksFourRL = "/petroleum/supply/weekly/";
$topPicksFourLabel = "Weekly Petroleum Status Report";

$topPicksFiveURL = "/countries";
$topPicksFiveLabel = "Profiles for countries";

$topPicksSixURL = "/state";
$topPicksSixLabel = "Profiles for U.S. states";

$topPicksSevenURL = "/todayinenergy/";
$topPicksSevenLabel = "Today in Energy";

/* DO NOT EDIT BELOW */
?>

<div class="content-container dark-top-border-container">
	<ul>
		<li class="head"><h2>Top Picks</h2></li>
		<li><a href='<?=$topPicksOneURL?>' title='<?=$topPicksOneLabel?>'><?=$topPicksOneLabel?></a></li>
		<li><a href='<?=$topPicksTwoURL?>' title='<?=$topPicksTwoLabel?>'><?=$topPicksTwoLabel?></a></li>
		<li><a href='<?=$topPicksThreeURL?>' title='<?=$topPicksThreeLabel?>'><?=$topPicksThreeLabel?></a></li>
		<li><a href='<?=$topPicksFourURL?>' title='<?=$topPicksFourLabel?>'><?=$topPicksFourLabel?></a></li>
		<li><a href='<?=$topPicksFiveURL?>' title='<?=$topPicksFiveLabel?>'><?=$topPicksFiveLabel?></a></li>
		<li><a href='<?=$topPicksSixURL?>' title='<?=$topPicksSixLabel?>'><?=$topPicksSixLabel?></a></li>
		<li><a href='<?=$topPicksSevenURL?>' title='<?=$topPicksSevenLabel?>'><?=$topPicksSevenLabel?></a></li>
	</ul>
</div>