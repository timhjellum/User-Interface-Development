
<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/state/maps.cfm?v=Petroleum";
$OneLabel = "U.S. Petroleum Infrastructure Map";
$OneCircle = "Petroleum_map";

$TwoURL = "/state/maps.cfm?v=Fossil%20Fuel%20Resources";
$TwoLabel = "U.S. Fossil Fuel Resource Map";
$TwoCircle = "fossil_fuel";

$ThrURL = "/beta/petroleum/imports/browser";
$ThrLabel = "U.S. Crude Import Tracking Tool";
$ThrCircle = "crude_import_data";

$FouURL = "/forecasts/steo/query";
$FouLabel = "STEO<br />Data Browser";
$FouCircle = "steo";

$FivURL = "/radio";
$FivLabel = "Radio Spot";
$FivCircle = "radio";

$SixURL = "http://www.youtube.com/watch?v=eIRB-NnyKyE";
$SixLabel = "Trends in<br />Energy Video";
$SixCircle = "video";

?>
<?php
/* DO NOT EDIT BELOW */
?>

<div class="l-row">
    <div class="l-split-wide-col">
        <h1>Interactive Visualizations, Data, &amp; Multimedia</h1>
        <div class="content-container visualizations">
            <ul>
                <li class="l-col"><span class='<?=$OneCircle?> circle'></span><h3><a href='<?=$OneURL?>' title='<?=$OneLabel?>'><?=$OneLabel?></h3></a></li>
                <li class="l-col"><span class='<?=$TwoCircle?> circle'></span><h3><a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><?=$TwoLabel?></h3></a></li>
                <li class="l-col"><span class='<?=$ThrCircle?> circle'></span><h3><a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><?=$ThrLabel?></h3></a></li>
                <li class="l-col"><span class='<?=$FouCircle?> circle'></span><h3><a href='<?=$FouURL?>' title='<?=$FouLabel?>'><?=$FouLabel?></h3></a></li>
                <li class="l-col"><span class='<?=$FivCircle?> circle'></span><h3><a href='<?=$FivURL?>' title='<?=$FivLabel?>'><?=$FivLabel?></h3></a></li>
                <li class="l-col"><span class='<?=$SixCircle?> circle'></span><h3><a href='<?=$SixURL?>' title='<?=$SixLabel?>'><?=$SixLabel?></h3></a></li>
            </ul>
        </div>
    </div>
</div>