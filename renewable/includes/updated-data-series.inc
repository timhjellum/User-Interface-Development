<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/totalenergy/data/browser/?tbl=T10.01#/?f=M&start=200001";
$OneLabel = "Renewable energy production and consumption by source ";
$OneDate = "04/24/2018";

$TwoURL = "/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=04&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.HYC-US-99.M~ELEC.GEN.HYC-CA-99.M~ELEC.GEN.HYC-OR-99.M~ELEC.GEN.HYC-WA-99.M&columnchart=ELEC.GEN.HYC-US-99.M~ELEC.GEN.HYC-CA-99.M~ELEC.GEN.HYC-OR-99.M~ELEC.GEN.HYC-WA-99.M&map=ELEC.GEN.HYC-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&maptype=0&rse=0&pin=";
$TwoLabel = "Net generation for conventional hydroelectric";
$TwoDate = "04/24/2018";

$ThrURL = "/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=02&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.AOR-US-99.M~ELEC.GEN.AOR-US-1.M~ELEC.GEN.AOR-US-94.M~ELEC.GEN.AOR-US-96.M~ELEC.GEN.AOR-US-97.M&columnchart=ELEC.GEN.AOR-US-99.M~ELEC.GEN.AOR-US-1.M~ELEC.GEN.AOR-US-94.M~ELEC.GEN.AOR-US-96.M~ELEC.GEN.AOR-US-97.M&map=ELEC.GEN.AOR-US-99.M&freq=M&start=200101&end=201406&ctype=linechart&ltype=pin&rtype=s&pin=&rse=0&maptype=0";
$ThrLabel = "Net generation for other renewables";
$ThrDate = "04/24/2018";

$FouURL = "";
$FouLabel = "";
$FouDate = "";

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
                    <h2>Updated Data Series</h2>
                </li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'><span class="date"><?=$OneDate?></span><span class="link-label"><?=$OneLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><span class="date"><?=$TwoDate?></span><span class="link-label"><?=$TwoLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><span class="date"><?=$ThrDate?></span><span class="link-label"><?=$ThrLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'><span class="date"><?=$FouDate?></span><span class="link-label"><?=$FouLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'><span class="date"><?=$FivDate?></span><span class="link-label"><?=$FivLabel?></span></a>
                </li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'><span class="date"><?=$SixDate?></span><span class="link-label"><?=$SixLabel?></span></a>
                </li>
            </ul>
        </div>