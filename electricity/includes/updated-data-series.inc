<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/electricity/data/browser/";
$OneLabel = "Net generation";
$OneDate = "04/24/2018";

$TwoURL = "/electricity/data/browser/#/topic/7?agg=2,0,1&geo=g&freq=M";
$TwoLabel = "Average retail price of electricity";
$TwoDate = "04/24/2018";

$ThrURL = "/electricity/data/browser/#/topic/11?agg=2,0,1&fuel=vtvo&geo=g&sec=g&linechart=ELEC.STOCKS.COL-US-98.M~ELEC.STOCKS.PEL-US-98.M~ELEC.STOCKS.PC-US-98.M&columnchart=ELEC.STOCKS.COL-US-98.M&map=ELEC.STOCKS.COL-US-98.M&freq=M";
$ThrLabel = "Fossil fuel stocks for electricity generation";
$ThrDate = "04/24/2018";

$FouURL = "/electricity/data/browser/#/topic/2?agg=2,0,1&fuel=f&geo=g&sec=g&linechart=ELEC.CONS_TOT.COW-US-99.M~ELEC.CONS_TOT.NG-US-99.M~ELEC.CONS_TOT.PC-US-99.M~&columnchart=ELEC.CONS_TOT.COW-US-99.M&map=ELEC.CONS_TOT.COW-US-99.M&freq=M";
$FouLabel = "Consumption for electricity generation";
$FouDate = "04/24/2018";

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
                    <h2>Updated Data Series</h2></li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'><span class="date"><?=$OneDate?></span><span class="link-label"><?=$OneLabel?></span></a></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><span class="date"><?=$TwoDate?></span><span class="link-label"><?=$TwoLabel?></span></a></li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><span class="date"><?=$ThrDate?></span><span class="link-label"><?=$ThrLabel?></span></a></li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'><span class="date"><?=$FouDate?></span><span class="link-label"><?=$FouLabel?></span></a></li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'><span class="date"><?=$FivDate?></span><span class="link-label"><?=$FivLabel?></span></a></li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'><span class="date"><?=$SixDate?></span><span class="link-label"><?=$SixLabel?></span></a></li>
            </ul>
        </div>