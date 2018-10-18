<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "electricity";
$itemOneHeadUrl = "/energyexplained/index.php?page=electricity_home";
$itemOneHeadLabel = "Electricity Explained";
$itemOneSubheadUrl = "/energyexplained/index.php?page=electricity_in_the_united_states";
$itemOneSubheadLabel = "Electricity in the United States";
$itemOneFootUrl = "/energyexplained/index.php?page=electricity_home";
$itemOneFootLabel = "See more electricity topics";

$itemTwoIcon = "faq";
$itemTwoHeadUrl = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadUrl = "/tools/faqs/faq.php?id=97&t=3";
$itemTwoSubheadLabel = "How much electricity does an American home use?";
$itemTwoFootUrl = "/tools/faqs/index.php#electricity";
$itemTwoFootLabel = "See all electricty FAQs";

$itemThrIcon = "energy-kids";
$itemThrHeadUrl = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadUrl = "/kids/energy.php?page=electricity_science-basics";
$itemThrSubheadLabel = "Science of Electricity Basics";
$itemThrFootUrl = "/kids/energy.php?page=electricity_home-basics";
$itemThrFootLabel = "See electricity on Energy Kids";

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