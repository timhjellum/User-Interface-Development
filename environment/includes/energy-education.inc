<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "environment";
$itemOneHeadURL = "/energyexplained/index.cfm?page=environment_home";
$itemOneHeadLabel = "Energy and the Environment Explained";
$itemOneSubheadURL = "/energyexplained/index.cfm?page=environment_how_ghg_affect_climate";
$itemOneSubheadLabel = "Greenhouse Gases' Effect on the Climate";
$itemOneFootUrl = "/energyexplained/index.cfm?page=environment_home";
$itemOneFootLabel = "See more energy and the environment topics";

$itemTwoIcon = "icon_faq";
$itemTwoHeadURL = "/tools/faqs/";
$itemTwoHeadLabel = "FAQs";
$itemTwoSubheadURL = "/tools/faqs/faq.cfm?id=74&t=11";
$itemTwoSubheadLabel = "How much carbon dioxide (CO2) is produced per kilowatthour when generating electricity with fossil fuels?";
$itemTwoFootUrl = "/tools/faqs/#environment";
$itemTwoFootLabel = "See more environmental FAQs";

$itemThrIcon = "icon_kids";
$itemThrHeadURL = "/kids";
$itemThrHeadLabel = "Energy Kids";
$itemThrSubheadURL = "/kids/energy.cfm?page=environment_about_ghg-basics";
$itemThrSubheadLabel = "What are the types of greenhouse gases?";
$itemThrFootUrl = "/kids/energy.cfm?page=environment_home-basics";
$itemThrFootLabel = "See more Energy and the Environment";

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
