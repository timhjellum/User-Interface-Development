<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/special/disruptions/";
$OneLabel = "U.S. Energy Disruptions Map<";
$OneImageName = "disruptions"; // .png is not needed

$TwoURL = "/outlooks/steo/query/";
$TwoLabel = "STEO<br /> Data Browser";
$TwoImageName = "steo-data-browser"; // .png is not needed

$ThrURL = "/beta/aeo/";
$ThrLabel = "AEO<br /> Table Browser";
$ThrImageName = "aeo"; // .png is not needed

$FouURL = "";
$FouLabel = "";
$FouImageName = ""; // .png is not needed

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
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$OneImageName?>.png" alt="<?=$OneLabel?>"></div>
                        </a>
                        <h3>
                            <a href="<?=$OneURL?>" title="<?=$OneLabel?>">
                                <?=$OneLabel?>
                            </a>
                        </h3>
                    </li>
                    <li class="l-col">
                        <a href="<?=$TwoURL?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$TwoImageName?>.png" alt="<?=$TwoLabel?>"></div>
                        </a>
                        <h3>
                            <a href="<?=$TwoURL?>" title="<?=$TwoLabel?>">
                                <?=$TwoLabel?>
                            </a>
                        </h3>
                    </li>
                    <li class="l-col">
                        <a href="<?=$ThrURL?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$ThrImageName?>.png" alt="<?=$ThrLabel?>"></div>
                        </a>
                        <h3>
                            <a href="<?=$ThrURL?>" title="<?=$ThrLabel?>">
                                <?=$ThrLabel?>
                            </a>
                        </h3>
                    </li>
                    <li class="l-col">
                        <a href="<?=$FouURL?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$FouImageName?>.png" alt="<?=$FouLabel?>"></div>
                        </a>
                        <h3>
                            <a href="<?=$FouURL?>" title="<?=$FouLabel?>">
                                <?=$FouLabel?>
                            </a>
                        </h3>
                    </li>
                    <li class="l-col">
                        <a href="<?=$FivURL?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$FivImageName?>.png" alt="<?=$FivLabel?>"></div>
                        </a>
                        <h3>
                            <a href="<?=$FivURL?>" title="<?=$FivLabel?>">
                                <?=$FivLabel?>
                            </a>
                        </h3>
                    </li>
                    <li class="l-col">
                        <a href="<?=$SixURL?>">
                            <div class="circle"><img src="/css_rehab/archive/global/images/interactive/<?=$SixImageName?>.png" alt="<?=$SixLabel?>"></div>
                        </a>
                        <h3>
                            <a href="<?=$SixURL?>" title="<?=$SixLabel?>">
                                <?=$SixLabel?>
                            </a>
                        </h3>
                    </li>
                </ul>
            </div>
        </div>