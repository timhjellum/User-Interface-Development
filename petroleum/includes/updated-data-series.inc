<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/dnav/pet/pet_sum_sndw_dcus_nus_w.htm/";
$OneLabel = "Weekly supply estimates";
$OneDate = "7/12/2018";

$TwoURL = "/dnav/pet/pet_pri_spt_s1_d.htm";
$TwoLabel = "Spot prices";
$TwoDate = "7/12/2018";

$ThrURL = "/dnav/pet/pet_pri_fut_s1_d.htm";
$ThrLabel = "Futures prices (NYMEX)";
$ThrDate = "7/12/2018";

$FouURL = "/dnav/pet/pet_sum_sndw_dcus_nus_w.htm";
$FouLabel = "Weekly inputs & utilization";
$FouDate = "7/12/2018";

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

        <div class="primary hide-mt">
            <ul class="updated-data-series">
                <li class="head"><h2>Updated Data Series</h2></li>
                <li><span class="date"><?=$OneDate?></span><a href='<?=$OneURL?>' title='<?=$OneLabel?>'><?=$OneLabel?></a></li>
                <li><span class="date"><?=$TwoDate?></span><a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'><?=$TwoLabel?></a></li>
                <li><span class="date"><?=$ThrDate?></span><a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'><?=$ThrLabel?></a></li>
                <li><span class="date"><?=$FouDate?></span><a href='<?=$FouURL?>' title='<?=$FouLabel?>'><?=$FouLabel?></a></li>
                <li><span class="date"><?=$FivDate?></span><a href='<?=$FivURL?>' title='<?=$FivLabel?>'><?=$FivLabel?></a></li>
                <li><span class="date"><?=$SixDate?></span><a href='<?=$SixURL?>' title='<?=$SixLabel?>'><?=$SixLabel?></a></li>
            </ul>
        </div>