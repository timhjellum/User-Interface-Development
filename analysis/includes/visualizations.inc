<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/outlooks/ieo/";
$OneLabel = "International Energy Outlook";
$OneImageName = "disruptions"; // .png is not needed

$TwoURL = "/forecasts/steo/query";
$TwoLabel = "STEO Data Browser";
$TwoImageName = "steo-data-browser";// .png is not needed

$ThrURL = "/outlooks/aeo/data/browser/";
$ThrLabel = "AEO Data Browser";
$ThrImageName = "aeo"; // .png is not needed

$FouURL = "/radio/";
$FouLabel = "Radio Spots";
$FouImageName = "radio"; // .png is not needed

$FivURL = "";
$FivLabel = "";
$FivImageName = ""; // .png is not needed

$SixURL = "";
$SixLabel = "";
$SixImageName = ""; // .png is not needed

?>
    <?php
/* DO NOT EDIT BELOW */
?>

        <div class="l-row">
            <div>
                <h1>Interactive Visualizations, Data, &amp; Multimedia</h1>
                <ul class="visualizations">
					
					<li class="l-col">
						<a href="<?=$OneURL?>">
						<div class="circle"><img src="/global/images/interactive/<?=$OneImageName?>.png" alt="<?=$OneLabel?>"></div>
						<h3><?=$OneLabel?></h3></a>
					</li>
                    <li class="l-col">
                        <a href="<?=$TwoURL?>">
                            <div class="circle"><img src="/global/images/interactive/<?=$TwoImageName?>.png" alt="<?=$TwoLabel?>"></div>
                        <h3><?=$TwoLabel?></h3></a>
					</li>
                    <li class="l-col">
                        <a href="<?=$ThrURL?>">
                            <div class="circle"><img src="/global/images/interactive/<?=$ThrImageName?>.png" alt="<?=$ThrLabel?>"></div>
                        <h3><?=$ThrLabel?></h3></a>
					</li>
                    <li class="l-col">
                        <a href="<?=$FouURL?>">
                            <div class="circle"><img src="/global/images/interactive/<?=$FouImageName?>.png" alt="<?=$FouLabel?>"></div>
                        <h3><?=$FouLabel?></h3></a>
					</li>
                    <li class="l-col">
                        <a href="<?=$FivURL?>">
                            <div class="circle"><img src="/global/images/interactive/<?=$FivImageName?>.png" alt="<?=$FivLabel?>"></div>
                        <h3><?=$FivLabel?></h3></a>
					</li>
                    <li class="l-col">
                        <a href="<?=$SixURL?>">
                            <div class="circle"><img src="/global/images/interactive/<?=$SixImageName?>.png" alt="<?=$SixLabel?>"></div>
                        <h3><?=$SixLabel?></h3></a>
					</li>
                </ul>
            </div>
        </div>