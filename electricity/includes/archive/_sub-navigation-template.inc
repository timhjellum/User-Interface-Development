<?php $l2id = 9; ?>
<?php $sectionname = "Analysis & Projections"; ?>

<?php



$directory = ""; // petroleum
$subNavLink02Url = "projection-data.php"; // data.php
$subNavLink02Label = "Projection Data"; // Data

$subNavLink03Url = "reports.php"; // reports.php
$subNavLink03Label = "Analysis & Projections"; // Analysis & Projections

// dropdown one
$menu01link01Url = "";
$menu01link01Label = "";
$menu01link02Url = "";
$menu01link02Label = "";
$menu01link03Url = "";
$menu01link03Label = "";
$menu01link04Url = "";
$menu01link04Label = "";
$menu01link05Url = "";
$menu01link05Label = "";
$menu01link06Url = "";
$menu01link06Label = "";
$menu01link07Url = "";
$menu01link07Label = "";
$menu01link08Url = "";
$menu01link08Label = "";
//$menu01link09Url = "";
//$menu01link09Label = "";

// dropdown one
// dropdown one
$menu02Title01 = "Major Topics"; // Major Topics
$menu02Title01 = "Find by"; // Find by

$menu02link01Url = "";
$menu02link01Label = "";
$menu02link02Url = "";
$menu02link02Label = "";
$menu02link03Url = "";
//$menu02link03Label = "";
//$menu02link04Url = "";

$glossaryUrl = "/glossary/"; // /glossary/
$glossaryLabel = "Glossary"; // Glossary
$faqUrl = "/tools/faqs/"; ///tools/faqs/
$faqLabel = "FAQS"; // FAQ
?>



    <div class="l-row header">
        <div class="l-full-width-col">
            <div class="title-banner bg-petroleum">
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
                                        <a href="/<?=$directory?>/<?=$menu01link01Url?>">
                                            <?=$menu01link01Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link02Url?>">
                                            <?=$menu01link02Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link03Url?>">
                                            <?=$menu01link03Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link04Url?>">
                                            <?=$menu01link04Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link05Url?>">
                                            <?=$menu01link05Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link06Url?>">
                                            <?=$menu01link06Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link07Url?>">
                                            <?=$menu01link07Label?>
                                        </a></li>
                                    <li>
                                        <a href="/<?=$directory?>/<?=$menu01link08Url?>">
                                            <?=$menu01link08Label?>
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
                                    <ul class="l-two-third-col">
                                        <?php include("css_rehab/archive/global/analysis-projections/sub-navigation-menus.inc") ?>
                                    </ul>
                                    <ul class="l-one-third-col">
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link01Url?>">
                                                <?=$menu02link01Label?>
                                            </a></li>
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link02Url?>">
                                                <?=$menu02link02Label?>
                                            </a></li>
                                        <li>
                                            <a href="/<?=$directory?>/<?=$menu02link03Url?>">
                                                <?=$menu02link03Label?>
                                            </a></li>
                                    </ul>
                                </div>
                            </div></li>
                    </ul>
                </div>
                <div class="right">
                    <span><a href="<?=$glossaryUrl?>"><?=$glossaryLabel?></a><a href="<?=$faqUrl?>"><?=$faqLabel?></a></span>
                </div>
            </div>
        </div>
    </div>