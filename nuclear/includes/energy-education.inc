<?php
/* edit the link Url, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "nuclear";
$itemOneHeadUrl = "/energyexplained/index.php?page=nuclear_home";
$itemOneHeadLabel = "Nuclear Explained";
$itemOneSubheadUrl = "/energyexplained/index.php?page=nuclear_fuel_cycle";
$itemOneSubheadLabel = "The nuclear fuel cycle";
$itemOneSubheadSecUrl = "/energyexplained/index.php?page=nuclear_where";
$itemOneSubheadSecLabel = "Where our uranium comes from";
$itemOneFootUrl = "/energyexplained/index.php?page=nuclear_home";
$itemOneFootLabel = "See more nuclear topics";

$itemTwoIcon = "faq";
$itemTwoHeadUrl = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadUrl = "/tools/faqs/faq.php?id=207&t=21";
$itemTwoSubheadLabel = "How many nuclear power plants are in the U.S. and where are they located?";
$itemTwoFootUrl = "/tools/faqs/#nuclear";
$itemTwoFootLabel = "See all nuclear FAQs";

$itemThrIcon = "energy-kids";
$itemThrHeadUrl = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadUrl = "/kids/energy.php?page=nuclear_home-basics";
$itemThrSubheadLabel = "Uranium (nuclear) basics";
$itemThrFootUrl = "/kids/energy.php?page=nuclear_home-basics";
$itemThrFootLabel = "See Nuclear on Energy Kids";

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
                            <li class="sub-head list-spacer">
                                <a href="<?=$itemOneSubheadUrl?>">
                                    <?=$itemOneSubheadLabel?>
                                </a></li>
                            <li class="sub-head">
                                <a href="<?=$itemOneSubheadSecUrl?>">
                                    <?=$itemOneSubheadSecLabel?>
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