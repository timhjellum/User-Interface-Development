<?php 
/*
 * REHAB-COMMENT-BLOCK
 ****** DON'T NEED THIS AT ALL, ADDED FOR CSS REHAB TO ALLOW URL PARAMETER FOR SWITCHING TO ALTERNATE VIEW *****
if (isset($_GET['n']) && $_GET['n'] && (
		strpos($_SERVER['HTTP_HOST'],'wwwdev') !== false || 
		strpos($_SERVER['HTTP_HOST'],'wwwtest') !== false
	)
) {
include('eia_head_info_for_new_css.inc');
 } else { 
 */
 /* REMOVE COMMENTS FOLLOWING HERE */
// start info_header
//<cfsetting showDebugOutput="yes"> TODO: no idea what this does
/* 
REHAB-COMMENT-BLOCK
TRY REMOVING THESE AND SEE IF YOU GET PHP ERRORS. IF NO ERRORS AND EVERYTHING LOOKS OKAY THEN YOU DON'T NEED THEM 
*/
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
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="robots" content="all" />
<meta name="agency" content="EIA - Energy Information Administration" />
<meta name="subject" content="official energy statistics, data, analysis and forecasting" />
<meta name="Description" content="Energy Information Administration - EIA - Official Energy Statistics from the U.S. Government" />

<link href="/css_rehab/archive/global/styles/global.css" type="text/css" media="screen, projection" rel="stylesheet" />

<link href="/global/styles/print.css?v=1.0.0" type="text/css" media="print" rel="stylesheet" />
<link href="/global/styles/eia-print.min.css?v=1.0.0" type="text/css" media="print" rel="stylesheet" />

<?php
//Include Highcharts (uses variables hcVersion, highstock, and jQueryUpgrade)
//include $_SERVER['DOCUMENT_ROOT'] . '/global/includes/highcharts.inc';
//Search Landing Fix
/* REHAB-COMMENT-BLOCK
 * $locale will be set on pages such as /petroleum/data/index.php
 * this does not apply to homepage
if($locale == "data") {
	echo '<script type="text/javascript" src="/global/scripts/custom/search_landing_highlight.js"></script>';
	print PHP_EOL;
}
*/
//Vector map includes
/*
 * REHAB-COMMENT-BLOCK
 * NO jVectorMap on the homepage so this is unnecessary
if($vmap == "y"){
?>
	<link href="/global/scripts/jquery/vector-map/jquery.vector-map.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="/global/scripts/jquery/vector-map/jquery.vector-map.js" type="text/javascript"></script>
	<script src="/global/scripts/jquery/vector-map/usa-en.js" type="text/javascript"></script>
<?php
}
*/

// API Widgets

/*
 * REHAB-COMMENT-BLOCK
 * NO API widgets on the homepage so this is unnecessary
if($widgets == "y"){
	if($jvm2 == 'y'){
?>
		<script src="/global/scripts/jquery/vector-map2/jquery-jvectormap-2.0.1.min.js"></script>
        <link rel="stylesheet" href="/global/scripts/jquery/vector-map2/jquery-jvectormap-2.0.1.css" type="text/css" media="screen"/>
<?php
	}else{
?>
      <link rel="stylesheet" href="/global/scripts/jquery/vector-map/jquery-jvectormap-1.2.2.css" type="text/css" media="screen"/>
      <script src="/global/scripts/jquery/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<?php
	}
?>
  <link href="/global/scripts/api/eia_api_widgets.css" rel="stylesheet" type="text/css" media="screen"/>
  <script src="/global/scripts/jquery/vector-map/jquery-jvectormap-us-aea-en.js"></script>
  <script src="/global/scripts/jquery/vector-map/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/global/scripts/modules/lib/jvectormap/maps/us-merc-en.js"></script>

  <script src="/global/scripts/api/eia_hc_widget.js" type="text/javascript"></script>
  <script src="/global/scripts/api/eia_api_widgets.js" type="text/javascript"></script>
<?php
}
	*/


// REHAB-COMMENT-BLOCK
?>



<?php

// Keep google analytics
// Omit Google Analytics for dev server 

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
/* REHAB-COMMENT-BLOCK
 * Keep survey engine code
 */
	// Since the failover DB doesn't allow writes, we shouldn't include the survey_engine js
//	if(isset($_SERVER["COMPUTERNAME"]) && $_SERVER["COMPUTERNAME"] === 'WWW3'){
		// don't show survey engine
//	} else {
?>	
<!-- script type="text/javascript" src="/global/survey/engine/js/survey_engine.js"></script -->
<!-- link href="/global/survey/engine/css/layout.css" rel="stylesheet" type="text/css" media="screen" / -->
<?php
//	} // End checking for failover host
?>
<?php
/* 
 * REHAB_COMMENT_BLOCK
 * this will output a title on pages, we should probably remove this and put them on the actual pageTitle
 */
//	if(isset($pageTitle) && $pageTitle) {
//		print "<title>" . $pageTitle . "</title>"; print PHP_EOL;
//	}
?>
<?php
/*
 * REHAB_COMMENT_BLOCK
 * CLOSES OUT IF/ELSE AT BEGINNING OF FILE
 }
*/ 
 ?>
