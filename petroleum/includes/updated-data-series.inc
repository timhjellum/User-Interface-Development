<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/dnav/pet/pet_sum_sndw_dcus_nus_w.htm/";
$OneLabel = "Weekly supply estimates";
$OneDate = "March 11, 2018";

$TwoURL = "/dnav/pet/pet_pri_spt_s1_d.htm";
$TwoLabel = "Spot prices";
$TwoDate = "March 11, 2018";

$ThrURL = "/dnav/pet/pet_pri_fut_s1_d.htm";
$ThrLabel = "Futures prices (NYMEX)";
$ThrDate = "March 11, 2018";

$FouURL = "/dnav/pet/pet_sum_sndw_dcus_nus_w.htm";
$FouLabel = "Weekly inputs & utilization";
$FouDate = "March 11, 2018";

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