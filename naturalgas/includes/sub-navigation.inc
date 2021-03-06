<?php $l2id = 1; ?>
<?php $sectionname = "Natural Gas"; ?>
<?php

$directory = "naturalgas"; 
$subNavLink02URL = "data.php"; 
$subNavLink02Label = "Data"; 

$subNavLink03URL = "reports.php"; 
$subNavLink03Label = "Analysis & Projections"; 

$menu01link01URL = "data.php#summary";
$menu01link01Label = "Summary";
$menu01link02URL = "data.php#prices";
$menu01link02Label = "Prices";
$menu01link03URL = "data.php#exploration";
$menu01link03Label = "Exploration & reserves";
$menu01link04URL = "data.php#production";
$menu01link04Label = "Production";
$menu01link05URL = "data.php#imports";
$menu01link05Label = "Imports/exports";
$menu01link06URL = "data.php#pipelines";
$menu01link06Label = "Pipelines";
$menu01link07URL = "data.php#storage";
$menu01link07Label = "Storage";
$menu01link08URL = "data.php#consumption";
$menu01link08Label = "Consumption";
$menu01link09URL = "data.php";
$menu01link09Label = "All natural gas data reports";

$menu02Title01 = "Major Topics"; 
$menu02Title02 = "Find by"; 

$menu02link01URL = "browsebytag.php";
$menu02link01Label = "Alphabetical";
$menu02link02URL = "reports.php#/T202,T182,T198,T1564,T1568";
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
            <div class="title-banner bg-natural-gas">
                <h1>
                    <?php echo "$sectionname"?>
                </h1>
            </div>
            <div class="sub-navigation">
                <div class="left">
                    <ul class="left-nav">
                        <li class="<?php if ( $locale == 'overview') {?>active<?php } ?>"><a href="/<?=$directory?>/">Overview</a></li>
                        <li class="dropdown dropdown-data <?php if ( $locale == 'data') {?>active<?php } ?>">
                            <a href="/<?=$directory?>/<?=$subNavLink02URL?>" class="dropbtn">
                                <?=$subNavLink02Label?><i class="ico sort-up"></i></a>
                            <div class="dropdown-data-content dropdown-content">
                                <ul>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link01URL?>">
                                            <?=$menu01link01Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link02URL?>">
                                            <?=$menu01link02Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link03URL?>">
                                            <?=$menu01link03Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link04URL?>">
                                            <?=$menu01link04Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link05URL?>">
                                            <?=$menu01link05Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link06URL?>">
                                            <?=$menu01link06Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link07URL?>">
                                            <?=$menu01link07Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link08URL?>">
                                            <?=$menu01link08Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link09URL?>">
                                            <?=$menu01link09Label?>
                                        </a></li>
                                </ul>
                            </div></li>
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
                                    <?php include("global/analysis-projections/sub-navigation-menus.inc") ?>
                                    <ul class="l-one-third-col">
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link01URL?>">
                                                <?=$menu02link01Label?>
                                            </a></li>
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link02URL?>">
                                                <?=$menu02link02Label?>
                                            </a></li>
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link03URL?>">
                                                <?=$menu02link03Label?>
                                            </a></li>
                                    </ul>
                                </div>
                            </div></li>
                    </ul>
                </div>
                <div class="right">
                    <span><a href="<?=$glossaryURL?>"><?=$glossaryLabel?></a><a href="<?=$faqURL?>"><?=$faqLabel?></a></span>
                </div>
            </div>
        </div>
    </div>