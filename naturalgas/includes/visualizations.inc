<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/state/maps.cfm?v=Natural%20Gas";
$OneLabel = "U.S. Natural Gas Infrastructure Map";
$OneImageName = "natural-gas-map"; // .png is not needed

$TwoURL = "/state/maps.cfm?v=Fossil%20Fuel%20Resources";
$TwoLabel = "U.S. Fossil Fuel Resource Map";
$TwoImageName = "fossil-fuel-map"; // .png is not needed

$ThrURL = "/special/disruptions/";
$ThrLabel = "U.S. Energy Disruptions Map";
$ThrImageName = "disruptions"; // .png is not needed

$FouURL = "/outlooks/steo/query/";
$FouLabel = "STEO Data Browser";
$FouImageName = "steo-data-browser"; // .png is not needed

$FivURL = "/cfapps/ngqs/ngqs.cfm?f_report=RP2&f_sortby=&f_items=&f_year_start=&f_year_end=&f_show_compid=&f_fullscreen=";
$FivLabel = "Company-level Query System";
$FivImageName = "natural-gas-query"; // .png is not needed

$SixURL = "http://www.youtube.com/watch?v=eIRB-NnyKyE";
$SixLabel = "Trends in Energy Video"; 
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