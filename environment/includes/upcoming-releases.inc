<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Upcoming Releases";

$OneURL = "/totalenergy/data/monthly/#environment";
$OneLabel = "Environment overview";
$OneDate = "1/26/2018 Monthly Energy Review";

$TwoURL = "/outlooks/steo/report/renew_co2.cfm";
$TwoLabel = "Carbon dioxide emissions";
$TwoDate = "1/9/2018 Short-Term Energy Outlook";

$ThrURL = "";
$ThrLabel = "";
$ThrDate = "";

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
                    <h2>
                        <?=$mainTitle?>
                    </h2>
                </li>
                <li>
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'>
                        <?=$OneLabel?>
                    </a>: <span class="date"><?=$OneDate?></span></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'>
                        <?=$TwoLabel?>
                    </a>: <span class="date"><?=$TwoDate?></span></li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>'>
                        <?=$ThrLabel?>
                    </a>: <span class="date"><?=$ThrDate?></span></li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>'>
                        <?=$FouLabel?>
                    </a>: <span class="date"><?=$FouDate?></span></li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>'>
                        <?=$FivLabel?>
                    </a>: <span class="date"><?=$FivDate?></span></li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>'>
                        <?=$SixLabel?>
                    </a>: <span class="date"><?=$SixDate?></span></li>
                <li class="foot"><a href="/reports/upcoming.php">See all upcoming</a></li>
            </ul>
        </div>