<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Presentations & Working Papers";

$OneURL = "/finance/workshops.php";
$OneLabel = "Workshop presentations";

$TwoURL = "/workingpapers/#finance";
$TwoLabel = "Financial working papers";


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
                    <a href='<?=$OneURL?>' title='<?=$OneLabel?>'>
                        <?=$OneLabel?>
                    </a></li>
                <li>
                    <a href='<?=$TwoURL?>' title='<?=$TwoLabel?>'>
                        <?=$TwoLabel?>
                    </a></li>
            </ul>
        </div>