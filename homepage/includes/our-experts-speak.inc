<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$ourExpertsSpeakOneURL = "/pressroom/testimonies/maples_03072018.pdf";
$ourExpertsSpeakOneLabel = "John Maples, Senior Transportation Analyst, testified before House Subcommittee";
$ourExpertsSpeakOneDate = "March 7, 2018";

$ourExpertsSpeakTwoURL = "/pressroom/presentations/conti_020132018.pdf";
$ourExpertsSpeakTwoLabel = "John J. Conti, Deputy Administrator, presented EIA’s Annual Energy Outlook 2018";
$ourExpertsSpeakTwoDate = "February 13, 2018";

?>
<?php
/* DO NOT EDIT BELOW */
?>

<div class="content-container dark-top-border-container">
	<ul>
		<li class="head"><h2>Our Experts Speak</h2></li>
		<li><a href='<?=$ourExpertsSpeakOneURL?>' title='<?=$ourExpertsSpeakOneLabel?>'><?=$ourExpertsSpeakOneLabel?></a></li>
		<li class="date"><?=$ourExpertsSpeakOneDate?></li>
		<li><a href='<?=$ourExpertsSpeakTwoURL?>' title='<?=$ourExpertsSpeakTwoLabel?>'><?=$ourExpertsSpeakTwoLabel?></a></li>
		<li class="date"><?=$ourExpertsSpeakTwoDate?></li>
		<li class="foot"><a href="pressroom/">More</a></li>
	</ul>
</div>