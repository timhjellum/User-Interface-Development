<?php
$l2id = 9;
$sectionname = "Analysis & Projections";
$directory = "analysis";
$subNavLink02URL = "projection-data.php";
$subNavLink02Label = "Projection Data";
$subNavLink03URL = "reports.php";
$subNavLink03Label = "Analysis & Projections";

$menu01link01URL = "projection-data.php#forecasts"; 
$menu01link01Label = "Monthly short-term forecasts through the next calendar year"; 
$menu01link02URL = "projection-data.php#annualproj"; 
$menu01link02Label = "Annual projections to 2050"; 
$menu01link03URL = "projection-data.php#intlproj";
$menu01link03Label = "International projections";
$menu01link04URL = "projection-data.php";
$menu01link04Label = "All projections reports";

$menu02Title01 = "Major Topics";
$menu02Title02 = "Find by";
$menu02link01URL = "browsebytag.php"; 
$menu02link01Label = "Alphabetical"; 
$menu02link02URL = "reports.php#/T186,T182,T198,T1568"; 
$menu02link02Label = "Recurring"; 

$menu02link03URL = "browsebytag.php?tagcloud";
$menu02link03Label = "Tag Cloud";

$glossaryURL = "/glossary/";
$glossaryLabel = "Glossary";
$faqURL = "/tools/faqs/";
$faqLabel = "FAQS";
 ?>

    <div class="l-row header">
        <div class="l-full-width-col">
            <div class="title-banner bg-analysis">
                <h1>
                    <?php echo "$sectionname"?>
                </h1>
            </div>
            <div class="sub-navigation">
                <div class="left">
                    <ul class="left-nav">
                        <li class="<?php if ( $locale == 'overview') {?>active<?php } ?>"><a href="/<?=$directory?>/">Overview</a></li>
                        <li class="dropdown dropdown-data <?php if ( $locale == 'projectiondata') {?>active<?php } ?>">
                            <a href="/<?=$directory?>/<?=$subNavLink02URL?>" class="dropbtn">
                                <?=$subNavLink02Label?><i class="ico sort-up"></i></a>
                            <div class="dropdown-data-content dropdown-content">
                                <ul>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link01URL?>">
                                            <?=$menu01link01Label?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link02URL?>">
                                            <?=$menu01link02Label?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link03URL?>">
                                            <?=$menu01link03Label?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link04URL?>">
                                            <?=$menu01link04Label?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-analysis-projections <?php if( $locale ==  " ap ") {?>active<?php } ?>">
                            <a href="/<?=$directory?>/<?=$subNavLink03URL?>" class="dropbtn">
                                <?=$subNavLink03Label?><i class="ico sort-up"></i></a>
                            <div class="dropdown-analysis-projections-content dropdown-content">
                                <div class="l-row">
                                    <div class="l-two-third-col">
                                        <h4>
                                            <?=$menu02Title01?>
                                        </h4>
                                    </div>
                                    <div class="l-one-third-col">
                                        <h4>
                                            <?=$menu02Title02?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="l-row">
                                    <ul class="l-two-third-col">
                                        <?php include("css_rehab/archive/global/analysis-projections/sub-navigation-menus.inc") ?>
                                    </ul>
                                    <ul class="l-one-third-col">
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link01URL?>">
                                                <?=$menu02link01Label?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link02URL?>">
                                                <?=$menu02link02Label?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link03URL?>">
                                                <?=$menu02link03Label?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <span><a href="<?=$glossaryURL?>"><?=$glossaryLabel?></a> <a href="<?=$faqURL?>"><?=$faqLabel?></a></span>
                </div>
            </div>
        </div>
    </div>