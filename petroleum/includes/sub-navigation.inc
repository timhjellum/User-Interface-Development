<?php $l2id = 0; ?>
<?php $sectionname = "Petroleum & Other Liquids"; ?>
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
                    <li class="<?php if ( $locale == 'overview') {?>active<?php } ?>"><a href="/petroleum/">Overview</a></li>
                    <li class="dropdown dropdown-data <?php if ( $locale == 'data') {?>active<?php } ?>"><a href="/petroleum/data.php" class="dropbtn">Data<i class="ico sort-up"></i></a>
                        <div class="dropdown-data-content dropdown-content">
                            <ul>
                                <li><a href="/petroleum/data.php#summary">Summary</a></li>
                                <li><a href="/petroleum/data.php#prices">Prices</a></li>
                                <li><a href="/petroleum/data.php#crude">Crude reserves and production</a></li>
                                <li><a href="/petroleum/data.php#refining">Refining and processing</a></li>
                                <li><a href="/petroleum/data.php#imports">Imports/exports &amp; movements</a></li>
                                <li><a href="/petroleum/data.php#stocks" target="_parent">Stocks</a></li>
                                <li><a href="/petroleum/data.php#consumption">Consumption/sales</a></li>
                                <li><a href="/petroleum/data.php" class="foot">All petroleum &amp; other liquids data reports</a></li>
                            </ul>
                        </div></li>
                    <li class="dropdown dropdown-analysis-projections <?php if( $locale ==  'ap') {?>active<?php } ?>"><a href="/petroleum/reports.php" class="dropbtn">Analysis & Projections<i class="ico sort-up"></i></a>
                        <div class="dropdown-analysis-projections-content dropdown-content">
                            <div class="l-row">
                                <div class="l-two-third-col">
                                    <h4>Major Topics</h4>
                                </div>
                                <div class="l-one-third-col">
                                    <h4>Browse by Tag</h4>
                                </div>
                            </div>
                            <div class="l-row">
                                <?php include("global/analysis-projections/sub-navigation-menus.inc") ?>
                                <ul class="l-one-third-col">
                                    <li><a href="/petroleum/browsebytag.php">Alphabetical</a></li>
                                    <li><a href="/petroleum/browsebytag.php?frequency">Frequency</a></li>
                                    <li><a href="/petroleum/browsebytag.php?tagcloud">Tag Cloud</a></li>
                                </ul>
                            </div>
                        </div></li>
                </ul>
            </div>
            <div class="right">
                <span class="align-right"><a href="<?php echo "$glossary_path"?>?id=petroleum">Glossary</a><a href="<?php echo "$faqs_path"?>#crudeoil">FAQS</a></span>
            </div>
        </div>
    </div>
</div>