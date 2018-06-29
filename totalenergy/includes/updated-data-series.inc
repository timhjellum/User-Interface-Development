<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$OneURL = "/beta/MER/?tbl=T01.01#/?f=M";
$OneLabel = "Primary energy overview";
$OneDate = "04/26/2018";

$TwoURL = "/beta/MER/?tbl=T01.06#/?f=M";
$TwoLabel = "Cost of fuels to end users in real dollars";
$TwoDate = "04/26/2018";

$ThrURL = "/beta/MER/?tbl=T02.01#/?f=M";
$ThrLabel = "Energy consumption by sector";
$ThrDate = "04/26/2018";

$FouURL = "/beta/MER/?tbl=T03.03C#/?f=M";
$FouLabel = "Imports from OPEC Countries";
$FouDate = "04/26/2018";

$FivURL = "/beta/MER/?tbl=T03.03D#/?f=M";
$FivLabel = "Imports from Non-OPEC Countries";
$FivDate = "04/26/2018";

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