<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/totalenergy/data/browser/";
$OneLabel = "Total Energy<br />Data Browser";
$OneImageName = "total-energy-mer"; // .png is not needed

$TwoURL = "/special/disruptions/";
$TwoLabel = "U.S. Energy Disruptions Map";
$TwoImageName = "disruptions"; // .png is not needed

$ThrURL = "/forecasts/steo/query/";
$ThrLabel = "STEO<br />
            Data Browser";
$ThrImageName = "steo-data-browser"; // .png is not needed

$FouURL = "/beta/aeo/";
$FouLabel = "AEO<br />
          Table Browser";
$FouImageName = "aeo"; // .png is not needed

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