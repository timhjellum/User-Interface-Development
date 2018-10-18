<?php
/* edit the link URL, Label and Date below */
/* no need to add the  > or the &nbsp;› */

$ourExpertsSpeakOneURL = "/pressroom/presentations/capuano_07242018.pdf";
$ourExpertsSpeakOneLabel = "EIA Administrator Dr. Linda Capuano presents EIA’s International Energy Outlook 2018";
$ourExpertsSpeakOneDate = "July 24, 2018";

$ourExpertsSpeakTwoURL = "/pressroom/testimonies/maples_03072018.pdf";
$ourExpertsSpeakTwoLabel = "John Maples, Senior Transportation Analyst, testified before House Subcommittee";
$ourExpertsSpeakTwoDate = "March 7, 2018";

?>
<?php
/* DO NOT EDIT BELOW */
?>

<div class="primary">
	<ul>
		<li class="head"><h2>Our Experts Speak</h2></li>
		<li><a href='<?=$ourExpertsSpeakOneURL?>' title='<?=$ourExpertsSpeakOneLabel?>'><?=$ourExpertsSpeakOneLabel?></a></li>
		<li class="date"><?=$ourExpertsSpeakOneDate?></li>
		<li><a href='<?=$ourExpertsSpeakTwoURL?>' title='<?=$ourExpertsSpeakTwoLabel?>'><?=$ourExpertsSpeakTwoLabel?></a></li>
		<li class="date"><?=$ourExpertsSpeakTwoDate?></li>
		<li class="foot"><a href="pressroom/">More</a></li>
	</ul>
</div>