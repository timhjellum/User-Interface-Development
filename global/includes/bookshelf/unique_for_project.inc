<?php
/**
 * Created by PhpStorm.
 * User: hsh
 * Date: 10/27/15
 * Time: 10:22 AM
 */


//this should be unique to each project
$project_title = "Reports";

//mailer recepient array
$mailer_arr = array(
    /*"Heena.Shah@eia.gov" => "Heena Shah"
    , */"Scott.Gearhart@eia.gov" => "Scott Gearhart"
);

//variable for global file storage
$cachedata_on_pageload = false;  //this will allow to cache the data, if not already cached using separate method call
$dataCacheing_tech = "";

//in case of DB storage, create and set database - table name to store the cache data
$dataCacheing_table = ($dataCacheing_tech == 'DB') ? "NEIC.AFV_CACHED_DATA" : "";

//in case of APC storage, set the unique_str with specific string
$unique_str = ($dataCacheing_tech == 'APC') ? '_Reports' : '';

//in case of FILE storage, set the filename
//$filename = ($dataCacheing_tech == 'FILE') ? 'cachedData.inc' : '';

$consumtion_subjectids = "140,142";
$residential_tags = 86;
$commercial_tags = 88;
$manufacturing_tags = 90;