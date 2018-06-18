<?php
require_once 'global/php_libraries/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';

$theFile = $_SERVER['DOCUMENT_ROOT']."/analysis/steo_price_summary.xlsx";
//$theSheetName = '06-TBL-Rigs';

$filetype = PHPExcel_IOFactory::identify($theFile);
$objReader = PHPExcel_IOFactory::createReader($filetype);
$sheetnames = $objReader->listWorksheetNames($theFile);
$sheetIndex = 0;  //array_search($theSheetName, $sheetnames);
$objPHPExcel = $objReader->load($theFile);
$sheet = $objPHPExcel->getSheet($sheetIndex);
?>
<?php
//WTI Crude Oil (WTIPUUS)
$row = 4;
$col = 4;
$WTIPUUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$WTIPUUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$WTIPUUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$WTIPUUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();


//Brent Crude Oil (BREPUUS)
$row = 7;
$col = 4;
$BREPUUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$BREPUUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$BREPUUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$BREPUUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();

//Gasoline (MGRARUS)
$row = 18;
$col = 4;
$MGRARUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$MGRARUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$MGRARUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$MGRARUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();

//Diesel (DSRTUUS)
$row = 20;
$col = 4;
$DSRTUUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$DSRTUUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$DSRTUUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$DSRTUUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();

//Heating Oil (D2RCAUS)
$row = 21;
$col = 4;
$D2RCAUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$D2RCAUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$D2RCAUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$D2RCAUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();

//Natural Gas (NGRCUUS)
$row = 29;
$col = 4;
$NGRCUUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$NGRCUUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$NGRCUUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$NGRCUUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();


//Electricity (ESRCUUS)
$row = 40;
$col = 4;
$ESRCUUS_data['col_1'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 5;
$ESRCUUS_data['col_2'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 6;
$ESRCUUS_data['col_3'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
$col = 7;
$ESRCUUS_data['col_4'] = $sheet->getCellByColumnAndRow($col, $row)->getValue();
?>


<?php $GasArray = array(); ?>
<?php $GasArray[1] = $MGRARUS_data['col_1']/100; ?>
<?php $GasArray[2] = $MGRARUS_data['col_2']/100; ?>
<?php $GasArray[3] = $MGRARUS_data['col_3']/100; ?>
<?php $GasArray[4] = $MGRARUS_data['col_4']/100; ?>
<?php $DieselArray = array(); ?>
<?php $DieselArray[1] = $DSRTUUS_data['col_1']/100; ?>
<?php $DieselArray[2] = $DSRTUUS_data['col_2']/100; ?>
<?php $DieselArray[3] = $DSRTUUS_data['col_3']/100; ?>
<?php $DieselArray[4] = $DSRTUUS_data['col_4']/100; ?>
<?php $HeatArray = array(); ?>
<?php $HeatArray[1] = $D2RCAUS_data['col_1']/100; ?>
<?php $HeatArray[2] = $D2RCAUS_data['col_2']/100; ?>
<?php $HeatArray[3] = $D2RCAUS_data['col_3']/100; ?>
<?php $HeatArray[4] = $D2RCAUS_data['col_4']/100; ?>

<?php /* Display data values */ ?>

	
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="basic_table" >
<caption>Price summary (historical and forecast)
</caption>
<thead>
<tr>
<th>
<th>2016</th>
<th>2017</th>
<th><em>2018</em></th>
<th><em>2019</em></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>WTI Crude Oil<sup>a</sup></strong><br /><span style="font-size:11px; font-style:italic">dollars per barrel</span></td>
<td><?php echo number_format((float)$WTIPUUS_data['col_1'], 2,".", '');?></td>
<td><?php echo number_format((float)$WTIPUUS_data['col_2'], 2,".", '');?></td>
<td><em><?php echo number_format((float)$WTIPUUS_data['col_3'], 2,".", '');?></em></td>
<td><em><?php echo number_format((float)$WTIPUUS_data['col_4'], 2,".", '');?></em></td>
</tr>
<tr>
<td><strong>Brent Crude Oil</strong><br />
<span style="font-size:11px; font-style:italic">dollars per barrel</span></td>
	<td><?php echo number_format((float)$BREPUUS_data['col_1'], 2,".", '');?></td>
	<td><?php echo number_format((float)$BREPUUS_data['col_2'], 2,".", '');?></td>
	<td><em><?php echo number_format((float)$BREPUUS_data['col_3'], 2,".", '');?></em></td>
	<td><em><?php echo number_format((float)$BREPUUS_data['col_4'], 2,".", '');?></em></td>
</tr>
<tr>
<td><strong>Gasoline<sup>b</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
	<td><?php echo number_format((float)$GasArray[1], 2,".", '');?></td>
	<td><?php echo number_format((float)$GasArray[2], 2,".", '');?></td>
	<td><em><?php echo number_format((float)$GasArray[3], 2,".", '');?></em></td>
	<td><em><?php echo number_format((float)$GasArray[4], 2,".", '');?></em></td>
</tr>
<tr>
<td><strong>Diesel<sup>c</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
	<td><?php echo number_format((float)$DieselArray[1], 2,".", '');?></td>
	<td><?php echo number_format((float)$DieselArray[2], 2,".", '');?></td>
	<td><em><?php echo number_format((float)$DieselArray[3], 2,".", '');?></em></td>
	<td><em><?php echo number_format((float)$DieselArray[4], 2,".", '');?></em></td>
</tr>
<tr>
<td><strong>Heating Oil<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
	<td><?php echo number_format((float)$HeatArray[1], 2,".", '');?></td>
	<td><?php echo number_format((float)$HeatArray[2], 2,".", '');?></td>
	<td><em><?php echo number_format((float)$HeatArray[3], 2,".", '');?></em></td>
	<td><em><?php echo number_format((float)$HeatArray[4], 2,".", '');?></em></td>
</tr>
<tr>
<td><strong>Natural Gas<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per thousand cubic feet</span></td>
	<td><?php echo number_format((float)$NGRCUUS_data['col_1'], 2,".", '');?></td>
	<td><?php echo number_format((float)$NGRCUUS_data['col_2'], 2,".", '');?></td>
	<td><em><?php echo number_format((float)$NGRCUUS_data['col_3'], 2,".", '');?></em></td>
	<td><em><?php echo number_format((float)$NGRCUUS_data['col_4'], 2,".", '');?></em></td>
</tr>
<tr>
<td><strong>Electricity<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">cents per kilowatthour</span></td>
	<td><?php echo number_format((float)$ESRCUUS_data['col_1'], 2,".", '');?></td>
	<td><?php echo number_format((float)$ESRCUUS_data['col_2'], 2,".", '');?></td>
	<td><em><?php echo number_format((float)$ESRCUUS_data['col_3'], 2,".", '');?></em></td>
	<td><em><?php echo number_format((float)$ESRCUUS_data['col_4'], 2,".", '');?></em></td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="1"><sup>a</sup>West Texas Intermediate.<br />
<sup>b</sup>Average regular pump price.
<br />Note: Italics indicate forecast.
<br />Source: <a href="/outlooks/steo/">Short-Term Energy Outlook</a>
</td>
<td style="text-align:left" colspan="4">
<sup>c</sup>On-highway retail.<br />
<sup>d</sup>U.S. Residential average.</td>
</tr>
</tfoot>
</table>
