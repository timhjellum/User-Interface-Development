<?php $l2id = 10; ?>
<?php $sectionname = "Markets & Finance"; ?>

<?php



$directory = "finance"; // petroleum
$subNavLink02URL = "data.php"; // data.php
$subNavLink02Label = "Data"; // Data

$subNavLink03URL = "reports.php"; // reports.php
$subNavLink03Label = "Analysis & Projections"; // Analysis & Projections

$menu01link01URL = "data.php#mpurc";
$menu01link01Label = "Market Prices and Uncertainty Charts";
$menu01link02URL = "data.php#archive";
$menu01link02Label = "Archive";

// dropdown one
// dropdown one
$menu02Title01 = "Major Topics"; // Major Topics
$menu02Title02 = "Find by"; // Find by

$menu02link01URL = "browsebytag.php";
$menu02link01Label = "Alphabetical";
$menu02link02URL = "reports.php#/T235,T214,T1568,T1564,T182,T198";
$menu02link02Label = "Recurring";
$menu02link03URL = "browsebytag.php?tagcloud";
$menu02link03Label = "Tag Cloud";

$glossaryURL = "/glossary/"; // /glossary/
$glossaryLabel = "Glossary"; // Glossary
$faqURL = "/tools/faqs/"; ///tools/faqs/
$faqLabel = "FAQS"; // FAQ
?>



    <div class="l-row header">
        <div class="l-full-width-col">
            <div class="title-banner bg-finance">
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