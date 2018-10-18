<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */
/* leave fields blank if unused - a script will hide unused list items*/

$mainTitle = "Presentations";

$OneUrl = "/pressroom/presentations/Capuano_02052018.pdf";
$OneLabel = "Annual Energy Outlook 2018";
$OneDescription = "Dr. Linda Capuano, Administrator";
$OneDate = "February 6, 2018";

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
                <li class="description">
                    <?=$OneDescription?></li>
                <li class="date">
                    <?=$OneDate?></li>
            </ul>
        </div>