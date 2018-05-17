<?php 
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
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="robots" content="all" />
<meta name="agency" content="EIA - Energy Information Administration" />
<meta name="subject" content="official energy statistics, data, analysis and forecasting" />
<meta name="Description" content="Energy Information Administration - EIA - Official Energy Statistics from the U.S. Government" />
<link rel="shortcut icon" href="//www.eia.gov/favicon.ico" />
<link rel="icon" href="//www.eia.gov/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="//www.eia.gov/favicon.ico" />

<link href="/css_rehab/archive/global/styles/global.min.css" type="text/css" media="screen, projection" rel="stylesheet" />
<link href="/global/styles/print.css" type="text/css" media="print" rel="stylesheet" />
<link href="/global/styles/eia-print.min.css" type="text/css" media="print" rel="stylesheet" />

<?php include('global/includes/highcharts.inc') ?>

<?php
if(strpos($_SERVER['HTTP_HOST'],'wwwdev')===false){
?>
<script type="text/javascript" src="/global/scripts/jquery/ga/ga-file-downloads.js" ></script>
<?php
include $_SERVER['DOCUMENT_ROOT']."/global/includes/ga.inc";
}
?>
<?php
$glossary_path = '/tools/glossary/';
$faqs_path = '/tools/faqs/';
?>


