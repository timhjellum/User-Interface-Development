<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/electricity/data/browser/#/topic/0?agg=1,0,2&fuel=08&geo=vvvvvvvvvvvvo&sec=o3g&linechart=ELEC.GEN.NUC-US-99.M~ELEC.GEN.NUC-PA-99.M~ELEC.GEN.NUC-IL-99.M&columnchart=ELEC.GEN.NUC-US-99.M~ELEC.GEN.NUC-PA-99.M~ELEC.GEN.NUC-IL-99.M&map=ELEC.GEN.NUC-US-99.M&freq=M";
$OneLabel = "Net generation from nuclear, monthly";
$OneDate = "06/25/2018";

$TwoURL = "/nuclear/generation/";
$TwoLabel = "U.S. Nuclear Generation and Generating Capacity";
$TwoDate = "06/28/2018";

$ThrURL = "";
$ThrLabel = "";
$ThrDate = "";

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