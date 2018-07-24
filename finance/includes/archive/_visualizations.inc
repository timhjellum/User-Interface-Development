<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneUrl = "/special/disruptions/";
$OneLabel = "U.S. Energy Disruptions Map";
$OneImageName = "disruptions"; // .png is not needed

$TwoUrl = "/forecasts/steo/query/";
$TwoLabel = "STEO<br /> Data Browser";
$TwoImageName = "steo-data-browser"; // .png is not needed

$ThrUrl = "/beta/aeo/";
$ThrLabel = "AEO<br /> Table Browser";
$ThrImageName = "aeo"; // .png is not needed

$FouUrl = "/radio/";
$FouLabel = "Radio Spot";
$FouImageName = "radio"; // .png is not needed

$FivUrl = "";
$FivLabel = "";
$FivImageName = ""; // .png is not needed

$SixUrl = "";
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
                        <a href="<?=$OneUrl?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$OneImageName?>.png" alt="<?=$OneLabel?>"></div>
                        </a>
                        <h3><a href="<?=$OneURL?>" title="<?=$OneLabel?>">
                                <?=$OneLabel?>
                            </a>
                        </h3></li>
                    <li class="l-col">
                        <a href="<?=$TwoUrl?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$TwoImageName?>.png" alt="<?=$TwoLabel?>"></div>
                        </a>
                        <h3><a href="<?=$TwoURL?>" title="<?=$TwoLabel?>">
                                <?=$TwoLabel?>
                            </a>
                        </h3></li>
                    <li class="l-col">
                        <a href="<?=$ThrUrl?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$ThrImageName?>.png" alt="<?=$ThrLabel?>"></div>
                        </a>
                        <h3><a href="<?=$ThrURL?>" title="<?=$ThrLabel?>">
                                <?=$ThrLabel?>
                            </a>
                        </h3></li>
                    <li class="l-col">
                        <a href="<?=$FouUrl?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$FouImageName?>.png" alt="<?=$FouLabel?>"></div>
                        </a>
                        <h3><a href="<?=$FouURL?>" title="<?=$FouLabel?>">
                                <?=$FouLabel?>
                            </a>
                        </h3></li>
                    <li class="l-col">
                        <a href="<?=$FivUrl?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$FivImageName?>.png" alt="<?=$FivLabel?>"></div>
                        </a>
                        <h3><a href="<?=$FivURL?>" title="<?=$FivLabel?>">
                                <?=$FivLabel?>
                            </a>
                        </h3></li>
                    <li class="l-col">
                        <a href="<?=$SixUrl?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$SixImageName?>.png" alt="<?=$SixLabel?>"></div>
                        </a>
                        <h3><a href="<?=$SixURL?>" title="<?=$SixLabel?>">
                                <?=$SixLabel?>
                            </a>
                        </h3></li>
                </ul>
            </div>
        </div>