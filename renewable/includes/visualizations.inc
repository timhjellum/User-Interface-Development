<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/renewable/afv/";
$OneLabel = "Alternative Fuel Vehicle Data Browser";
$OneImageName = "afv"; // .png is not needed

$TwoURL = "/state/maps.php?v=Renewable";
$TwoLabel = "U.S. Renewable Infrastructure Map";
$TwoImageName = "natural-gas-map"; // .png is not needed

$ThrURL = "/state/maps.php?v=Renewable";
$ThrLabel = "U.S. Renewable Resource Map";
$ThrImageName = "fossil-fuel-map"; // .png is not needed

$FouURL = "/special/disruptions/";
$FouLabel = "U.S. Energy Disruptions Map";
$FouImageName = "disruptions"; // .png is not needed

$FivURL = "/outlooks/steo/query/";
$FivLabel = "STEO<br /> Data Browser";
$FivImageName = "steo-data-browser"; // .png is not needed

$SixURL = "/beta/aeo/";
$SixLabel = "AEO<br /> Table Browser"; 
$SixImageName = "aeo"; // .png is not needed

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