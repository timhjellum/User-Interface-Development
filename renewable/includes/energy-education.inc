<?php
/* edit the link Url, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "renewable";
$itemOneHeadUrl = "/energyexplained/index.php?page=renewable_home";
$itemOneHeadLabel = "What is renewable energy?";
$itemOneSubheadUrl = "/energyexplained/index.php?page=renewable_home#tab3";
$itemOneSubheadLabel = "Renewable energy incentives";
$itemOneFootUrl = "/energyexplained/index.php?page=renewable_home";
$itemOneFootLabel = "See more Renewable energy topics";

$itemTwoIcon = "faq";
$itemTwoHeadUrl = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadUrl = "/tools/faqs/faq.cfm?id=93&t=4";
$itemTwoSubheadLabel = "How many alternative fuel and hybrid vehicles are there in the U.S.?";
$itemTwoFootUrl = "/tools/faqs/index.php#renewables";
$itemTwoFootLabel = "See all petroleum FAQs ";

$itemThrIcon = "energy-kids";
$itemThrHeadUrl = "/kids/";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadUrl = "/kids/energy.php?page=renewable_home-basics";
$itemThrSubheadLabel = "Renewable";
$itemThrFootUrl = "/kids/energy.php?page=renewable_home-basics";
$itemThrFootLabel = "See more Renewable topics";

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
                            <li class="foot">
                                <a href="<?=$itemThrFootUrl?>">
                                    <?=$itemThrFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>