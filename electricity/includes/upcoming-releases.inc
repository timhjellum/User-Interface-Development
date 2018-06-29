<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Upcoming Releases";

$OneURL = "/electricity/wholesale/";
$OneLabel = "Wholesale Electricity and Natural Gas Market Data";
$OneDate = "Biweekly on  Thursday";

$TwoURL = "/electricity/monthly/";
$TwoLabel = "Electric Power Monthly";
$TwoDate = "between the 20th and the 25th  of the month";

$ThrURL = "/electricity/monthly/update";
$ThrLabel = "Electricity Monthly Update";
$ThrDate = "between the 20th and the 25th of the month";

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
                    <h2>
                        <?=$mainTitle?>
                    </h2>
                </li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>' class="link-label">
                        <?=$OneLabel?><em>: <?=$OneDate?></em></a>
                </li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>' class="link-label">
                        <?=$TwoLabel?><em>: <?=$TwoDate?></em></a>
                </li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>' class="link-label">
                        <?=$ThrLabel?><em>: <?=$ThrDate?></em></a>
                </li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>' class="link-label">
                        <?=$FouLabel?><em>: <?=$FouDate?></em></a>
                </li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>' class="link-label">
                        <?=$FivLabel?><em>: <?=$FivDate?></em></a>
                </li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>' class="link-label">
                        <?=$SixLabel?><em>: <?=$SixDate?></em></a>
                </li>
                <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
            </ul>
        </div>