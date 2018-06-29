<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "petroleum";
$itemOneHeadURL = "/energyexplained/index.cfm?page=oil_homem";
$itemOneHeadLabel = "Oil: Crude &amp; Petroleum Products Explained";
$itemOneSubheadURL = "/energyexplained/index.cfm?page=gasoline_prices";
$itemOneSubheadLabel = "Gasoline Prices and Outlook";
$itemOneFootUrl = "/energyexplained/index.cfm?page=oil_home";
$itemOneFootLabel = "See more petroleum topics";

$itemTwoIcon = "faq";
$itemTwoHeadURL = "/tools/faqs/faq.cfm?id=97&t=3";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadURL = "/tools/faqs/faq.cfm?id=97&t=3";
$itemTwoSubheadLabel = "How much electricity does an American home use?";
$itemTwoFootUrl = "/tools/faqs/";
$itemTwoFootLabel = "See all  FAQs ";

$itemThrIcon = "energy-kids";
$itemThrHeadURL = "/kids/energy.cfm?page=us_energy_use-basics";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadURL = "/kids/energy.cfm?page=XXXXXXXXXXXXXXXXXXXX";
$itemThrSubheadLabel = "How we use energy";
$itemThrFootUrl = "/kids/";
$itemThrFootLabel = "Using & Saving Energy";

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