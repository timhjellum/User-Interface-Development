<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› or the  &rsaquo; */

$featureOneURL = "/beta/realtime_grid/";
$featureOneImageName = "electricity-data-browser.jpg";
$featureOneAlt = "Electricity Data Browser";
$featureOneLabel = "Electric System Operating Data Tool";
$featureOneDescription = "Near real-time electricity operations data for the Lower 48 states.";

$featureTwoURL = "/renewable/";
$featureTwoImageName = "solarandwindhomepagebannerfeature.jpg";
$featureTwoAlt = "Renewable and alternative fuels";
$featureTwoLabel = "Renewable and alternative fuels";
$featureTwoDescription = "Learn about EIA’s hydropower, solar, wind, geothermal, biomass, and ethanol data.";

$featureThreeURL = "/state/maps.php";
$featureThreeImageName = "us-energy-mapping-system.jpg";
$featureThreeAlt = "U.S. Energy Mapping System";
$featureThreeLabel = "U.S. Energy Mapping System";
$featureThreeDescription = "Rankings, layers of energy information, and state comparisons.";

/* DO NOT EDIT BELOW */
?>

    <div class="features secondary">
	<h2>Features</h2>
        <div class="f1">
		<div>
			<a href='<?=$featureOneURL?>'>
				<img src='/homepage/images/features/<?=$featureOneImageName?>' alt='<?=$featureOneAlt?>' />
			</a>
		</div>
		<ul>
                <li class="head">
                    <h3><a href='<?=$featureOneURL?>'>
                            <?=$featureOneLabel?>
                        </a>
                    </h3></li>
                <li>
                    <?=$featureOneDescription?></li>
		</ul>
	</div>

        <div class="f2">
		<div>
			<a href='<?=$featureTwoURL?>'>
				<img src='/homepage/images/features/<?=$featureTwoImageName?>' alt='<?=$featureTwoAlt?>' />
			</a>
		</div>
		<ul>
                <li class="head">
                    <h3><a href='<?=$featureTwoURL?>'>
                            <?=$featureTwoLabel?>
                        </a>
                    </h3></li>
                <li>
                    <?=$featureTwoDescription?></li>
		</ul>
	</div>

        <div class="f3">
		<div>
			<a href='<?=$featureThreeURL?>'>
				<img src='/homepage/images/features/<?=$featureThreeImageName?>' alt='<?=$featureThreeAlt?>' />
			</a>
		</div>
		<ul>
                <li class="head">
                    <h3><a href='<?=$featureThreeURL?>'>
                            <?=$featureThreeLabel?>
                        </a>
                    </h3></li>
                <li>
                <?=$featureThreeDescription?></li>
		</ul>
	</div>
    </div>