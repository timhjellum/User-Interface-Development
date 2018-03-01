<?php if (isset($_GET['n']) && $_GET['n'] && (
		strpos($_SERVER['HTTP_HOST'],'wwwdev') !== false || 
		strpos($_SERVER['HTTP_HOST'],'wwwtest') !== false
	)
) {
//include('eia_head_info_for_new_css.inc');
 } else { 
// start info_header
//<cfsetting showDebugOutput="yes"> TODO: no idea what this does
isset($L2Title) || $L2Title = '';
isset($L2T) || $L2T = '';
isset($localesub) || $localesub = '';
isset($sect) || $sect = '';
isset($newlocale) || $newlocale = '';
isset($locale) || $locale = '';
isset($vmap) || $vmap = '';
isset($widgets) || $widgets = '';
isset($jvm2) || $jvm2 = '';
isset($hct) || $hct = '';
isset($hcVersion) || $hcVersion = 3;
isset($highstock) || $highstock = '';
?>


<?php /* Meta Data */ ?>
<?php /* IE Edge */ ?>
<?php /*
Depending upon what Microsoft browsers you support you may not need to continue using the X-UA-Compatible tag. If you need to support IE 9 or IE 8, then I would recommend using the tag. If you only support the latest browsers (IE 11 and/or Edge) then I would consider dropping this tag altogether. If you use Twitter Bootstrap and need to eliminate validation warnings, this tag must appear in its specified order.
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
*/ ?>


<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="robots" content="all" />
<meta name="agency" content="EIA - Energy Information Administration" />
<meta name="subject" content="official energy statistics, data, analysis and forecasting" />
<meta name="Description" content="Energy Information Administration - EIA - Official Energy Statistics from the U.S. Government" />

<link href="/global/styles/EIA_global.css" type="text/css" media="screen, projection" rel="stylesheet" />

<!--[if lt IE 8]><link href="/global/styles/ie.css" type="text/css" media="screen, projection" rel="stylesheet" /><![endif]-->
<!--[if IE 7]><link href="/global/styles/ie.css" type="text/css" media="screen, projection" rel="stylesheet" /><![endif]-->
<!--[if lte IE 8]><link href="/global/styles/ie_fixes.css" type="text/css" media="screen, projection" rel="stylesheet" /><![endif]-->
<link href="/global/styles/print.css" type="text/css" media="print" rel="stylesheet" />

<!--[if lte IE 8]><link href="/global/styles/ie_print.css" type="text/css" media="print" rel="stylesheet" /><![endif]-->
<!--[if IE 7]><link href="/global/styles/ie_print.css" type="text/css" media="print" rel="stylesheet" /><![endif]-->


<link href="/css_rehab/archive/global/styles/eia-styles.min.css" type="text/css" media="screen, projection" rel="stylesheet" />
<link href="/global/styles/eia-print.min.css" type="text/css" media="print" rel="stylesheet" />

<?php /* jQuery itself
<script src="/global/scripts/jquery/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
*/ ?>


<?php
//Search Landing Fix
if($locale == "data") {
	echo '<script type="text/javascript" src="/global/scripts/custom/search_landing_highlight.js"></script>';
	print PHP_EOL;
}

// Omit Google Analytics for dev server -->
if(strpos($_SERVER['HTTP_HOST'],'wwwdev')===false){
?>
	<script type="text/javascript" src="/global/scripts/jquery/ga/ga-file-downloads.js" ></script>

<?php
	include $_SERVER['DOCUMENT_ROOT']."/global/includes/ga.inc";
}
?>

<?php /* EIA logo favicon */ ?>

<link rel="shortcut icon" href="//www.eia.gov/favicon.ico" />
<link rel="icon" href="//www.eia.gov/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="//www.eia.gov/favicon.ico" />

<?php
$glossary_path = '/tools/glossary/';
$faqs_path = '/tools/faqs/';
?>

<?php
	// Since the failover DB doesn't allow writes, we shouldn't include the survey_engine js
	if(isset($_SERVER["COMPUTERNAME"]) && $_SERVER["COMPUTERNAME"] === 'WWW3'){
		// don't show survey engine
	} else {
?>	
	<script src="/global/survey/engine/js/survey_engine.js" type="text/javascript"></script>
	<link href="/global/survey/engine/css/layout.css" type="text/css" media="screen" />
<?php
	} // End checking for failover host
?>
<?php
	if(isset($pageTitle) && $pageTitle) {
		print "<title>" . $pageTitle . "</title>"; print PHP_EOL;
	}
?>
<?php } ?>