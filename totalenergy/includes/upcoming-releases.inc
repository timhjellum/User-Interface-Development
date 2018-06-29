<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Upcoming Releases";

$OneURL = "/forecasts/steo/";
$OneLabel = "Short-Term Energy Outlook";
$OneDate = "5/8/2018";

$TwoURL = "/totalenergy/data/monthly/";
$TwoLabel = "Monthly Energy Review";
$TwoDate = "5/24/2018";

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
                    <h2>
                        <?=$mainTitle?>
                    </h2></li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>' class="link-label">
                        <?=$OneLabel?><em>: <?=$OneDate?></em></a></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>' class="link-label">
                        <?=$TwoLabel?><em>: <?=$TwoDate?></em></a></li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>' class="link-label">
                        <?=$ThrLabel?><em>: <?=$ThrDate?></em></a></li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>' class="link-label">
                        <?=$FouLabel?><em>: <?=$FouDate?></em></a></li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>' class="link-label">
                        <?=$FivLabel?><em>: <?=$FivDate?></em></a></li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>' class="link-label">
                        <?=$SixLabel?><em>: <?=$SixDate?></em></a></li>
                <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
            </ul>
        </div>