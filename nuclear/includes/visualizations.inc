
<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/nuclear/outages/";
$OneLabel = "Status of U.S. Nuclear Outages";
$OneImageName = "nuclear-outages-v2"; // .png is not needed

$TwoURL = "/state/maps.cfm?v=electricity";
$TwoLabel = "U.S. Electricity Infrastructure Map";
$TwoImageName = "natural-gas-map"; // .png is not needed

$ThrURL = "/special/disruptions/";
$ThrLabel = "U.S. Energy Disruptions Map";
$ThrImageName = "disruptions"; // .png is not needed

$FouURL = "/outlooks/steo/query/";
$FouLabel = "STEO<br /> Data Browser";
$FouImageName = "steo"; // .png is not needed

$FivURL = "/beta/aeo/";
$FivLabel = "AEO<br /> Table Browser";
$FivImageName = "aeo"; // .png is not needed

$SixURL = "";
$SixLabel = ""; 
$SixImageName = ""; // .png is not needed

?>
<?php
/* DO NOT EDIT BELOW */
?>

<div class="l-row">
    <div>
        <h1>Interactive Visualizations, Data, &amp; Multimedia</h1>
        <ul class="visualizations hide-mt">
            <li class="l-col"><a href="<?=$OneURL?>"><div class="circle"><img src="/adaptive/global/images/interactive/<?=$OneImageName?>.png" alt="<?=$OneLabel?>"></div></a><h3><a href="<?=$OneURL?>" title="<?=$OneLabel?>"><?=$OneLabel?></a></h3></li>
            <li class="l-col"><a href="<?=$TwoURL?>"><div class="circle"><img src="/adaptive/global/images/interactive/<?=$TwoImageName?>.png" alt="<?=$TwoLabel?>"></div></a><h3><a href="<?=$TwoURL?>" title="<?=$TwoLabel?>"><?=$TwoLabel?></a></h3></li>
            <li class="l-col"><a href="<?=$ThrURL?>"><div class="circle"><img src="/adaptive/global/images/interactive/<?=$ThrImageName?>.png" alt="<?=$ThrLabel?>"></div></a><h3><a href="<?=$ThrURL?>" title="<?=$ThrLabel?>"><?=$ThrLabel?></a></h3></li>
            <li class="l-col"><a href="<?=$FouURL?>"><div class="circle"><img src="/adaptive/global/images/interactive/<?=$FouImageName?>.png" alt="<?=$FouLabel?>"></div></a><h3><a href="<?=$FouURL?>" title="<?=$FouLabel?>"><?=$FouLabel?></a></h3></li>
            <li class="l-col"><a href="<?=$FivURL?>"><div class="circle"><img src="/adaptive/global/images/interactive/<?=$FivImageName?>.png" alt="<?=$FivLabel?>"></div></a><h3><a href="<?=$FivURL?>" title="<?=$FivLabel?>"><?=$FivLabel?></a></h3></li>
            <li class="l-col"><a href="<?=$SixURL?>"><div class="circle"><img src="/adaptive/global/images/interactive/<?=$SixImageName?>.png" alt="<?=$SixLabel?>"></div></a><h3><a href="<?=$SixURL?>" title="<?=$SixLabel?>"><?=$SixLabel?></a></h3></li>
        </ul>
    </div>
</div>