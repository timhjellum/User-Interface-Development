<?php
isset($betasite) || $betasite = '';
if($betasite == "y"){
	echo '<script type="text/javascript" src="/beta/js/beta-header.js"></script>';
	include $_SERVER['DOCUMENT_ROOT'] . "/global/includes/subnav_beta.inc";
	isset($betafback) || $betafback = '';
	if($betafback == "y"){
		?>
		<link href="/beta/styles/beta-feedback.min.css" type="text/css" media="screen, projection" rel="stylesheet">
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/global/includes/fback_form.inc"; ?>
		<div class="fblink_give hide_menu">Feedback</div>
		<?php
	}
}
?>
