<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/dnav/ng/ng_pri_fut_s1_d.htm";
$OneLabel = "Natural gas spot and futures prices";
$OneDate = "5/16/2018";

$TwoURL = "/dnav/ng/ng_pri_sum_dcu_nus_m.htm";
$TwoLabel = "Natural gas prices";
$TwoDate = "4/30/2018";

$ThrURL = "/dnav/ng/ng_prod_sum_a_EPG0_FGW_mmcf_m.htm";
$ThrLabel = "Natural gas gross withdrawals and production";
$ThrDate = "4/30/2018";

$FouURL = "";
$FouLabel = "";
$FouDate = "";

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