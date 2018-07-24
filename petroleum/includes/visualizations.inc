<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/state/maps.php?v=Petroleum";
$OneLabel = "U.S. Petroleum Infrastructure Map";
$OneImageName = "petroleum-map";// .png is not needed

$TwoURL = "/state/maps.php?v=Fossil%20Fuel%20Resources";
$TwoLabel = "U.S. Fossil Fuel Resource Map";
$TwoImageName = "fossil-fuel-map";// .png is not needed

$ThrURL = "/beta/petroleum/imports/browser";
$ThrLabel = "U.S. Crude Import Tracking Tool";
$ThrImageName = "crude-oil-import-data";// .png is not needed

$FouURL = "/forecasts/steo/query";
$FouLabel = "STEO Data Browser";
$FouImageName = "steo-data-browser";// .png is not needed

$FivURL = "/radio";
$FivLabel = "Radio Spot";
$FivImageName = "radio";// .png is not needed

$SixURL = "http://www.youtube.com/watch?v=eIRB-NnyKyE";
$SixLabel = "Trends in Energy Video"; //Trends in Energy Video
$SixImageName = "video"; // .png is not needed

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