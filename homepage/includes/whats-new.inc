<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$comingUpOneURL = "/electricity/monthly/";
$comingUpOneLabel = "Electric Power Monthly";

$comingUpTwoURL = "/biofuels/biomass/";
$comingUpTwoLabel = "Monthly Densified Biomass Fuel Report";

$comingUpThreeURL = "/beta/international/analysis.cfm?iso=GBR";
$comingUpThreeLabel = "United Kingdom Country Analysis Brief";

?>
<?php
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
?>

<div class="content-container dark-top-border-container">
	<ul>
		<li class="head"><h2>What's New</h2></li>
		<?php include('global/whatsnew/whats-new.html') ?>
		<li class="foot"><a href="/about/new/">More</a></li>
	</ul>
	<hr>
	<ul>
		<li class="head"><h2>Coming Up</h2></li>
		<li><a href='<?=$comingUpOneURL?>' title='<?=$comingUpOneLabel?>'><?=$comingUpOneLabel?></a></li>
		<li><a href='<?=$comingUpTwoURL?>' title='<?=$comingUpTwoLabel?>'><?=$comingUpTwoLabel?></a></li>
		<li><a href='<?=$comingUpThreeURL?>' title='<?=$comingUpThreeLabel?>'><?=$comingUpThreeLabel?></a></li>
		<li class="foot"><a href="/reports/upcoming.php">More</a></li>
	</ul>
</div>





