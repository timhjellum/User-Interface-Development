<?php
/* edit the link Url, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "petroleum";
$itemOneHeadUrl = "/energyexplained/index.php?page=oil_homem";
$itemOneHeadLabel = "Oil: Crude &amp; Petroleum Products Explained";
$itemOneSubheadUrl = "/energyexplained/index.php?page=gasoline_prices";
$itemOneSubheadLabel = "Gasoline Prices and Outlook";
$itemOneFootUrl = "/energyexplained/index.php?page=oil_home";
$itemOneFootLabel = "See more petroleum topics";

$itemTwoIcon = "faq";
$itemTwoHeadUrl = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadUrl = "/tools/faqs/faq.cfm?id=45&t=8";
$itemTwoSubheadLabel = "What are Mcf, Btu, and therms? How do I convert prices in Mcf to Btu's and therms?";
$itemTwoFootUrl = "/tools/faqs/index.php#oil/petroleum";
$itemTwoFootLabel = "See all petroleum FAQs ";

$itemThrIcon = "energy-kids";
$itemThrHeadUrl = "/kids/";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadUrl = "/kids/energy.php?page=oil_home-basics";
$itemThrSubheadLabel = "How was oil formed?";
$itemThrFootUrl = "/kids/energy.php?page=nonrenewable_home-basics";
$itemThrFootLabel = "See nonrenewable sources on Energy Kids";

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