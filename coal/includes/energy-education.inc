<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "coal";
$itemOneHeadUrl = "/energyexplained/index.php?page=coal_home";
$itemOneHeadLabel = "Coal Explained";
$itemOneSubheadUrl = "/energyexplained/index.php?page=coal_where";
$itemOneSubheadLabel = "Where our coal comes from";
$itemOneFootUrl = "/energyexplained/index.php?page=coal_home";
$itemOneFootLabel = "See more coal topics";

$itemTwoIcon = "faq";
$itemTwoHeadUrl = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadUrl = "/tools/faqs/faq.php?id=527&t=2";
$itemTwoSubheadLabel = "How much coal, natural gas, or petroleum is used to generate a kilowatt-hour of electricity?";
$itemTwoFootUrl = "/tools/faqs/#coal";
$itemTwoFootLabel = "See all coal FAQs";

$itemThrIcon = "energy-kids";
$itemThrHeadUrl = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadUrl = "/kids/energy.php?page=coal_home-basics#coal_environment-basics";
$itemThrSubheadLabel = "Coal & the Environment";
$itemThrFootUrl = "/kids/energy.php?page=coal_home-basics";
$itemThrFootLabel = "See coal on Energy Kids";

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