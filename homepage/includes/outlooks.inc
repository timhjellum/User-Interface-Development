<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$outlooksOneURL = "https://www.eia.gov/outlooks/steo/";
$outlooksOneLabel = "Short-Term Energy Outlook";

$outlooksTwoURL = "https://www.eia.gov/outlooks/aeo/";
$outlooksTwoLabel = "Annual Energy Outlook";

$outlooksThreeURL = "https://www.eia.gov/outlooks/ieo";
$outlooksThreeLabel = "International Energy Outlook";

/* DO NOT EDIT BELOW */
?>

<div class="content-container light-top-border-container grey-background two">
	<ul>
		<li class="head"><h2>Outlooks</h2></li>
		<li><a href='<?=$outlooksOneURL?>' title='<?=$outlooksOneLabel?>'><?=$outlooksOneLabel?></a></li>
		<li><a href='<?=$outlooksTwoURL?>' title='<?=$outlooksTwoLabel?>'><?=$outlooksTwoLabel?></a></li>
		<li><a href='<?=$outlooksThreeURL?>' title='<?=$outlooksThreeLabel?>'><?=$outlooksThreeLabel?></a></li>
	</ul>
</div>
