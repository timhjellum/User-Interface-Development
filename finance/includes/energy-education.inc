<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "petroleum";
$itemOneHeadURL = "/finance/markets/";
$itemOneHeadLabel = "What drives crude oil prices";
$itemOneSubheadURL = "/finance/markets/";
$itemOneSubheadLabel = "An analysis of 7 factors that influence oil markets";
$itemOneFootUrl = "";
$itemOneFootLabel = "";

$itemTwoIcon = "faq";
$itemTwoHeadURL = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadURL = "/tools/faqs/faq.php?id=4&t=5";
$itemTwoSubheadLabel = "Does EIA have ethanol price data?";
$itemTwoFootUrl = "/tools/faqs/#prices";
$itemTwoFootLabel = "See more price FAQs ";

$itemThrIcon = "energy-kids";
$itemThrHeadURL = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadURL = "/kids/energy.php?page=oil_home-basics";
$itemThrSubheadLabel = "Oil (petroleum)";
$itemThrSecSubheadURL = "/kids/energy.php?page=nonrenewable_home-basics";
$itemThrSecSubheadLabel = "Nonrenewable energy";
$itemThrFootUrl = "/kids/";
$itemThrFootLabel = "See more energy kids";

?>
    <?php
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
?>


        <div class="l-row">
            <div class="l-full-width-col">
                <h1>Energy Education</h1>
                <div class="energy-education">
                    <div class="l-one-third-col">
                        <i class="ico energy-education <?=$itemOneIcon?>"></i>
                        <ul>
                            <li class="head">
                                <h2>
                                    <a href="<?=$itemOneHeadUrl?>">
                                        <?=$itemOneHeadLabel?>
                                    </a>
                                </h2></li>
                            <li class="sub-head">
                                <a href="<?=$itemOneSubheadUrl?>">
                                    <?=$itemOneSubheadLabel?>
                                </a></li>
                            <li class="foot">
                                <a href="<?=$itemOneFootUrl?>">
                                    <?=$itemOneFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                    <div class="l-one-third-col border">
                        <i class="ico energy-education <?=$itemTwoIcon?>"></i>
                        <ul>
                            <li class="head">
                                <h2>
                                    <a href="<?=$itemTwoHeadUrl?>">
                                        <?=$itemTwoHeadLabel?>
                                    </a>
                                </h2></li>
                            <li class="sub-head">
                                <a href="<?=$itemTwoSubheadUrl?>">
                                    <?=$itemTwoSubheadLabel?>
                                </a></li>
                            <li class="foot">
                                <a href="<?=$itemTwoFootUrl?>">
                                    <?=$itemTwoFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                    <div class="l-one-third-col">
                        <i class="ico energy-education <?=$itemThrIcon?>"></i>
                        <ul>
                            <li class="head">
                                <h2>
                                    <a href="<?=$itemThrHeadUrl?>">
                                        <?=$itemThrHeadLabel?>
                                    </a>
                                </h2></li>
                            <li class="sub-head">
                                <a href="<?=$itemThrSubheadUrl?>">
                                    <?=$itemThrSubheadLabel?>
                                </a></li>
                            <li class="sub-head">
                                <a href="<?=$itemThrSecSubheadURL?>">
                                    <?=$itemThrSecSubheadLabel?>
                                </a></li>
                            <li class="foot">
                                <a href="<?=$itemThrFootUrl?>">
                                    <?=$itemThrFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>