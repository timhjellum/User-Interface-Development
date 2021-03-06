<?php
include 'global/php_libraries/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
function readSpreadsheet($src, $sheet, $rows, $columns) {
$isRowRange = strpos($rows, '-') ? true : false;
$tmp_v1 = explode('-', $rows);
$startRow = $isRowRange ? ( isset($tmp_v1[0]) ? $tmp_v1[0] : $rows ) : $rows;
$endRow = $isRowRange   ? ( isset($tmp_v1[1]) ? $tmp_v1[1] : $rows ) : $rows;
$isColumnRange = strpos($columns, '-') ? true : false;
$tmp_v1 = explode('-', $columns);
$startColumn = $isColumnRange ? ( isset($tmp_v1[0]) ? $tmp_v1[0] : $columns ) : $columns;
$endColumn =   $isColumnRange ? ( isset($tmp_v1[1]) ? $tmp_v1[1] : $columns ) : $columns;
//print "rows:$isRowRange $startRow $endRow >> columns: $isColumnRange $startColumn $endColumn";
try {
$inputFileType = PHPExcel_IOFactory::identify($src);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($src);
}
catch(Exception $e) {
die('Error loading file "' . $src . '" : '.$e->getMessage());
}
$ret = array();
$sheet = $objPHPExcel->getSheet($sheet);
for($row = $startRow; $row <= $endRow; $row++) {
$rowData = array();
$i = 1;
for($col = $startColumn; $col <= $endColumn; $col++) {
//replacing with following code till we get newer version from https://github.com/PHPOffice/PhpSpreadsheet
//$rowData['col_' . $i] = $sheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col-1). $row)->getValue();
$tmp1 = $sheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col-1). $row)->getValue();
if(is_object($tmp1)) {
//print_r($tmp1);
if($tmp1 instanceof PHPExcel_RichText) {
$rowData[ 'col_' . $i ] =  $sheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col-1). $row)->getValue()->getPlainText();
} else {
$rowData[ 'col_' . $i ] = "";   //fetching object value - need to handle
}
} else {
if (substr($tmp1, 0, 1) == '=') {
$rowData[ 'col_' . $i ] =
$sheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col - 1) . $row)->getCalculatedValue();
} else {
$rowData[ 'col_' . $i ] = $tmp1;
}
}
$i++;
}
//print_r($rowData);
if($isRowRange) {
array_push($ret, $rowData);
}
else {
$ret[0] = $rowData;
}
}
return $ret;
}
function getWorksheetMetaData($src, $WorksheetName) {
$return = array();
if(!$src || !$WorksheetName)
return $return;
try {
$inputFileType = PHPExcel_IOFactory::identify($src);
$objReader     = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($src);
$worksheetList = $objReader->listWorksheetNames($src);
foreach($worksheetList as $k1=>$v1) {
if(strtolower($v1) == strtolower($WorksheetName)) {
$return['sheetname'] = $v1;
$return['index'] = $k1;
$return['highestCol'] = $objPHPExcel->setActiveSheetIndex($k1)->getHighestColumn();
$return['highestRow'] = $objPHPExcel->setActiveSheetIndex($k1)->getHighestRow();
$return['highestColNum'] = PHPExcel_Cell::columnIndexFromString($return['highestCol']);
break;
}
}
} catch (Exception $e) {
die('Error loading file "' . $src . '" : ' . $e->getMessage());
}
return $return;
}
?>