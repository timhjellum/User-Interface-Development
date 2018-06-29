<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Upcoming Releases";

$OneURL = "/petroleum/gasdiesel/";
$OneLabel = "Gasoline and Diesel Fuel Update";
$OneDate = "5:00 p.m. ET, Monday";

$TwoURL = "/petroleum/supply/weekly/";
$TwoLabel = "Weekly Petroleum Status Report";
$TwoDate = "10:30 a.m. ET, Wednesday";

$ThrURL = "/petroleum/heatingoilpropane/";
$ThrLabel = "Heating Oil and Propane Update";
$ThrDate = "After 1:00 p.m. ET, Wednesday (Oct - March only)";

$FouURL = "/petroleum/weekly/";
$FouLabel = "This Week in Petroleum";
$FouDate = "After 1:00 p.m. ET, Wednesday";

$FivURL = "";
$FivLabel = "";
$FivDate = "";

$SixURL = "";
$SixLabel = "";
$SixDate = "";

?>
    <?php
/* DO NOT EDIT BELOW */
?>

        <div class="secondary hide-mt">
            <ul>
                <li class="head">
                    <h2>
                        <?=$mainTitle?>
                    </h2></li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>' class="link-label">
                        <?=$OneLabel?><em>: <?=$OneDate?></em></a></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>' class="link-label">
                        <?=$TwoLabel?><em>: <?=$TwoDate?></em></a></li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>' class="link-label">
                        <?=$ThrLabel?><em>: <?=$ThrDate?></em></a></li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>' class="link-label">
                        <?=$FouLabel?><em>: <?=$FouDate?></em></a></li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>' class="link-label">
                        <?=$FivLabel?><em>: <?=$FivDate?></em></a></li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>' class="link-label">
                        <?=$SixLabel?><em>: <?=$SixDate?></em></a></li>
                <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
            </ul>
        </div>