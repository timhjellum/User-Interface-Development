<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› or the  &rsaquo; */

$featureOneURL = "https://www.eia.gov/beta/realtime_grid/";
$featureOneImage = "homepage/images/features/electricity-data-browser.jpg";
$featureOneAlt = "Electricity Data Browser";
$featureOneLabel = "Electric System Operating Data Tool";
$featureOneDescription = "Near real-time electricity operations data for the Lower 48 states.";

$featureTwoURL = "/conference/2018/?src=home-b6";
$featureTwoImage = "homepage/images/features/2018-eia-energy-conference.jpg";
$featureTwoAlt = "Gateway";
$featureTwoLabel = "2018 Energy Conference";
$featureTwoDescription = "Registration is now open";

$featureThreeURL = "/state/maps.php";
$featureThreeImage = "homepage/images/features/us-energy-mapping-system.jpg";
$featureThreeAlt = "U.S. Energy Mapping System";
$featureThreeLabel = "U.S. Energy Mapping System";
$featureThreeDescription = "Rankings, layers of energy information, and state comparisons.";

/* DO NOT EDIT BELOW */
?>

<div class="content-container dark-top-border-container features">
	<h2>Features</h2>
	<div>
		<div>
			<a href='<?=$featureOneURL?>'>
				<img src='<?=$featureOneImage?>' alt='<?=$featureOneAlt?>' />
			</a>
		</div>
		<ul>
			<li class="head"><h3><a href='<?=$featureOneURL?>'><?=$featureOneLabel?></a></h3></li>
			<li><?=$featureOneDescription?></li>
		</ul>
	</div>

	<div>
		<div>
			<a href='<?=$featureTwoURL?>'>
				<img src='<?=$featureTwoImage?>' alt='<?=$featureTwoAlt?>' />
			</a>
		</div>
		<ul>
			<li class="head"><h3><a href='<?=$featureTwoURL?>'><?=$featureTwoLabel?></a></h3></li>
			<li><?=$featureTwoDescription?></li>
		</ul>
	</div>

	<div>
		<div>
			<a href='<?=$featureThreeURL?>'>
				<img src='<?=$featureThreeImage?>' alt='<?=$featureThreeAlt?>' />
			</a>
		</div>
		<ul>
			<li class="head"><h3><a href='<?=$featureThreeURL?>'><?=$featureThreeLabel?></a></h3></li>
			<li><?=$featureThreeDescription?></li>
		</ul>
	</div>
</div>