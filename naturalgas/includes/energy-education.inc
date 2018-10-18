<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "natural-gas";
$itemOneHeadURL = "/energyexplained/index.php?page=natural_gas_home";
$itemOneHeadLabel = "Natural Gas Explained";
$itemOneSubheadURL = "/energyexplained/index.php?page=natural_gas_factors_affecting_prices";
$itemOneSubheadLabel = "Factors affecting natural gas prices";
$itemOneFootURL = "/energyexplained/index.php?page=natural_gas_home";
$itemOneFootLabel = "See more natural gas topics";

$itemTwoIcon = "faq";
$itemTwoHeadURL = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadURL = "/tools/faqs/faq.php?id=45&t=8";
$itemTwoSubheadLabel = "What are Mcf, Btu, and therms? How do I convert prices in Mcf to Btu's and therms?";
$itemTwoFootURL = "/tools/faqs/#naturalgas";
$itemTwoFootLabel = "See all natural gas FAQs";

$itemThrIcon = "energy-kids";
$itemThrHeadURL = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadURL = "/kids/energy.php?page=natural_gas_home-basics";
$itemThrSubheadLabel = "How Was Natural Gas Formed?";
$itemThrFootURL = "/kids/energy.php?page=natural_gas_home-basics";
$itemThrFootLabel = "See natural gas on Energy Kids";

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
                                    <a href="<?=$itemOneHeadURL?>">
                                        <?=$itemOneHeadLabel?>
                                    </a>
                                </h2></li>
                            <li class="sub-head">
                                <a href="<?=$itemOneSubheadURL?>">
                                    <?=$itemOneSubheadLabel?>
                                </a></li>
                            <li class="foot">
                                <a href="<?=$itemOneFootURL?>">
                                    <?=$itemOneFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                    <div class="l-one-third-col border">
                        <i class="ico energy-education <?=$itemTwoIcon?>"></i>
                        <ul>
                            <li class="head">
                                <h2>
                                    <a href="<?=$itemTwoHeadURL?>">
                                        <?=$itemTwoHeadLabel?>
                                    </a>
                                </h2></li>
                            <li class="sub-head">
                                <a href="<?=$itemTwoSubheadURL?>">
                                    <?=$itemTwoSubheadLabel?>
                                </a></li>
                            <li class="foot">
                                <a href="<?=$itemTwoFootURL?>">
                                    <?=$itemTwoFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                    <div class="l-one-third-col">
                        <i class="ico energy-education <?=$itemThrIcon?>"></i>
                        <ul>
                            <li class="head">
                                <h2>
                                    <a href="<?=$itemThrHeadURL?>">
                                        <?=$itemThrHeadLabel?>
                                    </a>
                                </h2></li>
                            <li class="sub-head">
                                <a href="<?=$itemThrSubheadURL?>">
                                    <?=$itemThrSubheadLabel?>
                                </a></li>
                            <li class="foot">
                                <a href="<?=$itemThrFootURL?>">
                                    <?=$itemThrFootLabel?>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>