<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$itemOneIcon = "residential";
$itemOneHeadURL = "/consumption/residential/";
$itemOneHeadLabel = "RESIDENTIAL ENERGY CONSUMPTION SURVEY (RECS)";
$itemOneSubheadURL = "/consumption/residential/";
$itemOneSubheadLabel = "A nationally representative sample of housing units that specially trained interviewers collect energy characteristics, usage patterns, and household demographics.";
$itemOneFootUrl = "/consumption/residential/";
$itemOneFootLabel = "view the RECS";

$itemTwoIcon = "commercial";
$itemTwoHeadURL = "/consumption/commercial/";
$itemTwoHeadLabel = "COMMERCIAL BUILDING ENERGY CONSUMPTION SURVEY (CBECS)";
$itemTwoSubheadURL = "/consumption/commercial/";
$itemTwoSubheadLabel = "A national sample survey that collects information on the stock of U.S. commercial buildings, including their energy-related building characteristics and energy usage data.";
$itemTwoFootUrl = "/consumption/commercial/";
$itemTwoFootLabel = "view the CBECS";

$itemThrIcon = "industrial";
$itemThrHeadURL = "/consumption/manufacturing/";
$itemThrHeadLabel = "MANUFACTURING ENERGY CONSUMPTION SURVEY (MECS)";
$itemThrSubheadURL = "/consumption/manufacturing/";
$itemThrSubheadLabel = "A national sample survey that collects information on the U.S. manufacturing establishment, their energy-related building characteristics, and their energy usage and expenditures";
$itemThrFootUrl = "/consumption/manufacturing/";
$itemThrFootLabel = "view the MECS";

?>
    <?php
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
/* DO NOT EDIT BELOW */
?>


        <div class="l-row">
            <div class="l-full-width-col">
                <h1>Consumption Surveys</h1>
                <div class="consumption-surveys">
                    <div class="l-one-third-col">
                        <i class="ico consumption-surveys <?=$itemOneIcon?>"></i>
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
                        <i class="ico consumption-surveys <?=$itemTwoIcon?>"></i>
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
                        <i class="ico consumption-surveys <?=$itemThrIcon?>"></i>
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