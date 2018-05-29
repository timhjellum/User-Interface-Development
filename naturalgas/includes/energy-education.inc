<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "nat_gas";
$itemOneHeadURL = "/energyexplained/index.cfm?page=natural_gas_home";
$itemOneHeadLabel = "Natural Gas Explained";
$itemOneSubheadURL = "/energyexplained/index.cfm?page=natural_gas_factors_affecting_prices";
$itemOneSubheadLabel = "Factors affecting natural gas prices";
$itemOneFootUrl = "/energyexplained/index.cfm?page=natural_gas_home";
$itemOneFootLabel = "See more natural gas topics";

$itemTwoIcon = "icon_faq";
$itemTwoHeadURL = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadURL = "/tools/faqs/faq.cfm?id=45&t=8";
$itemTwoSubheadLabel = "What are Mcf, Btu, and therms? How do I convert prices in Mcf to Btu's and therms?";
$itemTwoFootUrl = "/tools/faqs/#naturalgas";
$itemTwoFootLabel = "See all natural gas FAQs";

$itemThrIcon = "icon_kids";
$itemThrHeadURL = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadURL = "/kids/energy.cfm?page=natural_gas_home-basics";
$itemThrSubheadLabel = "How Was Natural Gas Formed?";
$itemThrFootUrl = "/kids/energy.cfm?page=natural_gas_home-basics";
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
        <div class="content-container energy-education">
            <div class="l-one-third-col">
                <i class="ico energy-education <?=$itemOneIcon?>"></i>
                <ul>
                    <li class="head"><h2><a href="<?=$itemOneHeadUrl?>"><?=$itemOneHeadLabel?></a></h2></li>
                    <li class="sub-head"><a href="<?=$itemOneSubheadUrl?>"><?=$itemOneSubheadLabel?></a></li>
                    <li class="foot"><a href="<?=$itemOneFootUrl?>"><?=$itemOneFootLabel?></a></li>
                </ul>
            </div>
            <div class="l-one-third-col border">
            <i class="ico energy-education <?=$itemTwoIcon?>"></i>
            <ul>
                <li class="head"><h2><a href="<?=$itemTwoHeadUrl?>"><?=$itemTwoHeadLabel?></a></h2></li>
                <li class="sub-head"><a href="<?=$itemTwoSubheadUrl?>"><?=$itemTwoSubheadLabel?></a></li>
                <li class="foot"><a href="<?=$itemTwoFootUrl?>"><?=$itemTwoFootLabel?></a></li>
            </ul>
            </div>
            <div class="l-one-third-col">
            <i class="ico energy-education <?=$itemThrIcon?>"></i>
            <ul>
                <li class="head"><h2><a href="<?=$itemThrHeadUrl?>"><?=$itemThrHeadLabel?></a></h2></li>
                <li class="sub-head"><a href="<?=$itemThrSubheadUrl?>"><?=$itemThrSubheadLabel?></a></li>
                <li class="foot"><a href="<?=$itemThrFootUrl?>"><?=$itemThrFootLabel?></a></li>
            </ul>
            </div>
        </div>    
    </div>
</div>
