<span class="pipe">|</span> require_once ('global/php_libraries/PHPExcel-1.8/Classes/PHPExcel/Shared/Date.php'); $strFullSpreadSheetPath = $_SERVER['DOCUMENT_ROOT'] . "/petroleum/gasdiesel/xls/gasoline.xlsx"; //print $strFullSpreadSheetPath; $ws_name
= "Gasoline"; $date1 = strtotime($todayDate_sql); $date2 = strtotime($oneYearAgo_sql); ?>
<?php
require_once ('petroleum/gasdiesel/includes/readSpreadsheet.inc');
$ws_metadata = getWorksheetMetaData($strFullSpreadSheetPath, $ws_name);
//print_r($ws_metadata);
$ws_index = $ws_metadata['index'];
$rows = "1-" . $ws_metadata['highestRow'];
$cols = "1-" . $ws_metadata['highestColNum'];
$ws_data = readSpreadsheet($strFullSpreadSheetPath,$ws_index, $rows, $cols);
//print_r($ws_data);
//exit;
$date_col1 = array_search('REG_ALL_FORM_DATE', $ws_data[0]);
$date_col1 = str_replace('col_', '', $date_col1);
$date_col1 = $date_col1 - 1;
if($date_col1 === false)
$date_col1_found = false;
else
$date_col1_found = true;
//set column names
$column_names = implode(",", $ws_data[0]);
$column_names = strtoupper(str_replace(" ", "_", $column_names));
$columnArr = explode(",", $column_names);
//print $column_names;
foreach($columnArr as $k1=>$v1) {
if($v1 == 'REG_ALL_FORM_DATE')
$columnArr[$k1] = 'DATE';
}
$gas_regAllForm = $ws_data;
//exit;
$output_data_range = array();
$i = 0;
foreach($ws_data as $k1=>$v1) {
if(!$i) {
//update $columnArr for where column name is not set
$tmp1 = 0;
foreach($v1 as $k2=>$v2) {
if(!$v2) {
if(!$columnArr[$tmp1]) {
$key = strtoupper(str_replace(" ", "_", $k2));
$columnArr[$tmp1] = $key;
}
}
$tmp1++;
}
} else {
$tmp1 = 0;
$tot = count($v1);
foreach($v1 as $k2=>$v2) {
$val = $v2;
$val_compare = '';
if($date_col1_found && $tmp1 == $date_col1) {
if (!is_null($val)) {
//need to make sure that value is date type
//if it is number(number of days from 1970-01-01 then convert into date and use the value
if (is_numeric($val)) {
//print "---yes numeric found--";
$no_days = $val;
$InvDate = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($no_days));
//echo $InvDate;
$date = new DateTime($InvDate);
$date->modify('+1 day');
$val = $date->format('m/d/Y');
} else {
$date = new DateTime($val);
}
$ws_data[ $k1 ][ $k2 ] = $date->format('Y-m-d');
//set the date for comparison
$compareDate = new DateTime($val);
$compareVal_sql = Date_format($compareDate, $format);
$date3 = strtotime($compareVal_sql);
//print $val . " ==== " . $date3 . " >>> " . $date2 . " <<< " . $date1 . "\n\n";
//set the array if the date is in date-range to compare
if($date3 >= $date2 && $date3 <= $date1) {
//print "HHHHHHHHHH-";
//replace keys of one array with values of the other
$output_data_range[] = array_combine($columnArr, $ws_data[$k1]);
break;
}
}
}
$tmp1++;
}
}
$i++;
//if($i > 2)
//	break;
}
//sorting array on NGPL_DATE field
usort($output_data_range, 'date_compare_date_desc');
//print_r($ws_data);  //updated array for date value
//print_r($output_data_range);
//die();
//print_r($columnArr);
?>
    <?php
$one_year_rolling = array();
$selection_fields_arr = array('US', 'DATE', 'EAST_COAST', 'NEW_ENGLAND', 'CENTRAL_ATLANTIC', 'LOWER_ATLANTIC', 'MIDWEST', 'GULF_COAST', 'ROCKY_MTN', 'WEST_COAST', 'CALIFORNIA');
$i = 0;
foreach($output_data_range as $k1=>$v1) {
$tmp1 = 0;
$tot = count($v1);
$tmpArr = array();
foreach($v1 as $k2=>$v2) {
//no condition involved.
//only get selected fields from the $output_data_range array
if(in_array($columnArr[$tmp1], $selection_fields_arr)) {
$tmpArr[$k2] = $v2;
}
$tmp1++;
}
if(!empty($tmpArr))
$one_year_rolling[] = $tmpArr;
$i++;
//if($i > 2)
//	break;
}
//print_r($one_year_rolling);
//die();
?>
        <?php
$var_name = 'gas_us';
$gas_us = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['US']) || (is_null($v1['US'])) ) {
$price = "0";
} else {
$price = $v1['US'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_us .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
            <?php
$var_name = 'gas_eastcst';
$gas_eastcst = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['EAST_COAST']) || (is_null($v1['EAST_COAST'])) ) {
$price = "null";
} else {
$price = $v1['EAST_COAST'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_eastcst .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                <?php
$var_name = 'gas_neweng';
$gas_neweng = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['NEW_ENGLAND']) || (is_null($v1['NEW_ENGLAND'])) ) {
$price = "null";
} else {
$price = $v1['NEW_ENGLAND'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_neweng .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                    <?php
$var_name = 'gas_c_atl';
$gas_c_atl = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['CENTRAL_ATLANTIC']) || (is_null($v1['CENTRAL_ATLANTIC'])) ) {
$price = "null";
} else {
$price = $v1['CENTRAL_ATLANTIC'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_c_atl .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                        <?php
$var_name = 'gas_l_atl';
$gas_l_atl = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['LOWER_ATLANTIC']) || (is_null($v1['LOWER_ATLANTIC'])) ) {
$price = "null";
} else {
$price = $v1['LOWER_ATLANTIC'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_l_atl .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                            <?php
$var_name = 'gas_midwest';
$gas_midwest = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['MIDWEST']) || (is_null($v1['MIDWEST'])) ) {
$price = "null";
} else {
$price = $v1['MIDWEST'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_midwest .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                                <?php
$var_name = 'gas_gulfcoast';
$gas_gulfcoast = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['GULF_COAST']) || (is_null($v1['GULF_COAST'])) ) {
$price = "null";
} else {
$price = $v1['GULF_COAST'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_gulfcoast .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                                    <?php
$var_name = 'gas_rockymtn';
$gas_rockymtn = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['ROCKY_MTN']) || (is_null($v1['ROCKY_MTN'])) ) {
$price = "null";
} else {
$price = $v1['ROCKY_MTN'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_rockymtn .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                                        <?php
$var_name = 'gas_westcoast';
$gas_westcoast = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['WEST_COAST']) || (is_null($v1['WEST_COAST'])) ) {
$price = "null";
} else {
$price = $v1['WEST_COAST'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_westcoast .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>
                                            <?php
$var_name = 'gas_california';
$gas_california = '';
foreach($one_year_rolling as $k1=>$v1) {
if(!isset($v1['CALIFORNIA']) || (is_null($v1['CALIFORNIA'])) ) {
$price = "null";
} else {
$price = $v1['CALIFORNIA'];
}
$d1 = Date_format(new DateTime($v1['DATE']), '(Y, n, j)');
$gas_california .= "[Date.UTC" . $d1 . ", " . $price . "],";
}
//print "before var_name: " . $var_name . "\n\n";
include ("global/includes/highcharts/javascript_month_converter.inc");
//print "after var_name: " . $var_name . "\n\n";
//print "value for $var_name: " . $$var_name . "\n\n";
?>