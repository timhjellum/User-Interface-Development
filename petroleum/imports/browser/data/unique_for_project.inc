<?php
$_SERVER['server_mode'] = isset($_SERVER['server_mode']) ? $_SERVER['server_mode'] : 'development';
//this should be unique to each project
$project_title = "Petroleum Imports Data Browser";
//mailer recepient array
$mailer_arr = array(
"Heena.Shah@eia.gov" => "Heena Shah"
, "Scott.Gearhart@eia.gov" => "Scott Gearhart"
);
$path=str_replace("/","\\",$_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['REQUEST_URI']) . '/../status.json');
$file = @file_get_contents($path);
$app  = @json_decode($file);
define('DEBUG', @$app->debug || false);