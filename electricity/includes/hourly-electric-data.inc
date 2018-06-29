<?php
/* edit the link URL, Label and Date below */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "HOURLY ELECTRICITY DATA";

$OneURL = "/realtime_grid/?src=data#/summary/";
$OneLabel = "Realtime electric system operating data";

$TwoURL = "";
$TwoLabel = "";

$ThrURL = "";
$ThrLabel = "";

$FouURL = "";
$FouLabel = "";

$FivURL = "";
$FivLabel = "";

$SixURL = "";
$SixLabel = "";

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
                        <?=$OneLabel?>
                    </a>
                </li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>' class="link-label">
                        <?=$TwoLabel?>
                    </a>
                </li>
                <li>
                    <a href='<?=$ThrURL?>' title='<?=$ThrLabel?>' class="link-label">
                        <?=$ThrLabel?>
                    </a>
                </li>
                <li>
                    <a href='<?=$FouURL?>' title='<?=$FouLabel?>' class="link-label">
                        <?=$FouLabel?>
                    </a>
                </li>
                <li>
                    <a href='<?=$FivURL?>' title='<?=$FivLabel?>' class="link-label">
                        <?=$FivLabel?>
                    </a>
                </li>
                <li>
                    <a href='<?=$SixURL?>' title='<?=$SixLabel?>' class="link-label">
                        <?=$SixLabel?>
                    </a>
                </li>
            </ul>
        </div>