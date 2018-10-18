<?php
$start = microtime(true);
$timing = array();
$timing['00start'] = (microtime(true) - $start)*1000;
require_once 'global/includes/utils/Database.inc';
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/queryParamHelper.inc';
require_once 'global/includes/utils/Mailer.inc';

$timing['01post-include'] = (microtime(true) - $start)*1000;
$DataServiceConn      = new DataService();
$timing['02post-create-DataService'] = (microtime(true) - $start)*1000;

include 'unique_for_project.inc';
$requested_page_link = "Request URL: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . "\n\n";

$mailer = new Mailer();
$mailer->Subject .= " on $_SERVER[SERVER_NAME] for " . $project_title;
if(!$mailer_arr || empty($mailer_arr)) {
    $mailer_arr = array(
      "Chanda.Fields@eia.gov" => "Chanda Fields"
    );
}
foreach($mailer_arr as $k0=>$v0) {
    $mailer->addAddress($k0, $v0);
}


$inputs = filter_var_array($_REQUEST,
    [
        'startdate'  => FILTER_SANITIZE_STRING,
        'enddate'  => FILTER_SANITIZE_STRING,
        'tags'  => FILTER_SANITIZE_STRING
    ]);

$date1 = new DateTime("now");
$startdate = $inputs['startdate'] ? $inputs['startdate'] : null;
$enddate = $inputs['enddate'] ? $inputs['enddate'] : null;
$tags = $inputs['tags'] ? explode(',', $inputs['tags']) : null;

$json = array();

$sectionname = null;
$additionalTags = '';
$timing['03pre-seperateFrequencyTags'] = (microtime(true) - $start)*1000;
$seperatedTags = $DataServiceConn->seperateFrequencyTags($tags);
$timing['04post-seperateFrequencyTags'] = (microtime(true) - $start)*1000;
$timing['05pre-getTagCounts'] = (microtime(true) - $start)*1000;
$json['tags'] = $DataServiceConn->getTagCounts($startdate, $enddate, $seperatedTags['tags'], $seperatedTags['frequencyTags']);
$timing['06post-getTagCounts'] = (microtime(true) - $start)*1000;
$timing['07pre-getFrequencyTagCounts'] = (microtime(true) - $start)*1000;
$json['frequencyTags'] = $DataServiceConn->getFrequencyTagCounts($startdate, $enddate, $seperatedTags['tags']);
$timing['08post-getFrequencyTagCounts'] = (microtime(true) - $start)*1000;

$showReports = ($tags || $startdate || $enddate);

if($showReports) {
    $timing['09pre-getReports'] = (microtime(true) - $start)*1000;
    $json['reports'] = $DataServiceConn->getReports($startdate, $enddate, $seperatedTags['tags'], array()/*$seperatedTags['frequencyTags']*/);
    $timing['10post-getReports'] = (microtime(true) - $start)*1000;
}

if ($json === false) {
    throw new Exception(getJsonError());
}

//$json['timing'] = $timing;
header('Content-Type: application/json');
print json_encode($json, JSON_NUMERIC_CHECK);
