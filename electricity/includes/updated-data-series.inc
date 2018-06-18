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

$FivURL = "/";
$FivLabel = "";
$FivDate = "";

$SixURL = "/";
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
                <li><span><?=$OneDate?></span>&#160;&#160;
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'>
                        <?=$OneLabel?>
                    </a>
                </li>
                <li><span><?=$TwoDate?></span>&#160;&#160;
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'>
                        <?=$TwoLabel?>
                    </a>
                </li>
                <li><span><?=$ThrDate?></span>&#160;&#160;
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'>
                        <?=$ThrLabel?>
                    </a>
                </li>
                <li><span><?=$FouDate?></span>&#160;&#160;
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'>
                        <?=$FouLabel?>
                    </a>
                </li>
                <li><span><?=$FivDate?></span>&#160;&#160;
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'>
                        <?=$FivLabel?>
                    </a>
                </li>
                <li><span><?=$SixDate?></span>&#160;&#160;
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'>
                        <?=$SixLabel?>
                    </a>
                </li>
            </ul>
        </div>