<?php /* Data Source: STEO price summary table (table 2 annual values) as shown on http://wwwdev.eia.gov/forecasts/steo/tables/?tableNumber=8#startcode=2013 */  ?>
<?php /* Get current directory path */  ?>
<?php $strCurDirPath = __DIR__; ?>
<?php /* Assign spreadsheet name */  ?>
<?php $strSpreadsheetName = "\steo_price_summary.xlsx"; ?>
<?php /* Assign full spreadsheet path */  ?>
<?php $strFullSpreadSheetPath = $strCurDirPath . $strSpreadsheetName; ?>
<?php /* Read data values from spreadsheet */  ?>
<?php /* WTI Crude Oil (WTIPUUS) */  ?>
<?php
	include ('global/includes/utils/readSpreadsheet.inc');
	$WTIPUUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'4','4-7');
?>
<?php /* Brent Crude Oil (BREPUUS)  */  ?>
<?php
	$BREPUUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'7','4-7');
?>
<?php /* Gasoline (MGRARUS)  */  ?>
<?php
	$MGRARUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'18','4-7');
 
 $GasArray1 = $MGRARUS_data[0]['col_1'] / 100;
 $GasArray2 = $MGRARUS_data[0]['col_2'] / 100;
 $GasArray3 = $MGRARUS_data[0]['col_3'] / 100;
 $GasArray4 = $MGRARUS_data[0]['col_4'] / 100;
 $formattedGasArray1 = number_format($GasArray1, 2, '.', '');
 $formattedGasArray2 = number_format($GasArray2, 2, '.', '');
 $formattedGasArray3 = number_format($GasArray3, 2, '.', '');
 $formattedGasArray4 = number_format($GasArray4, 2, '.', '');
?>
<?php /* Diesel (DSRTUUS)  */  ?>
<?php
	$DSRTUUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'20','4-7');
	
 $DieselArray1 = $DSRTUUS_data[0]['col_1'] / 100;
 $DieselArray2 = $DSRTUUS_data[0]['col_2'] / 100;
 $DieselArray3 = $DSRTUUS_data[0]['col_3'] / 100;
 $DieselArray4 = $DSRTUUS_data[0]['col_4'] / 100;
 $formattedDieselArray1 = number_format($DieselArray1, 2, '.', '');
 $formattedDieselArray2 = number_format($DieselArray2, 2, '.', '');
 $formattedDieselArray3 = number_format($DieselArray3, 2, '.', '');
 $formattedDieselArray4 = number_format($DieselArray4, 2, '.', '');
?>
<?php /* Heating Oil (D2RCAUS)  */  ?>
<?php
	$D2RCAUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'21','4-7');
	
 $HeatArray1 = $D2RCAUS_data[0]['col_1'] / 100;
 $HeatArray2 = $D2RCAUS_data[0]['col_2'] / 100;
 $HeatArray3 = $D2RCAUS_data[0]['col_3'] / 100;
 $HeatArray4 = $D2RCAUS_data[0]['col_4'] / 100;
 $formattedHeatArray1 = number_format($HeatArray1, 2, '.', '');
 $formattedHeatArray2 = number_format($HeatArray2, 2, '.', '');
 $formattedHeatArray3 = number_format($HeatArray3, 2, '.', '');
 $formattedHeatArray4 = number_format($HeatArray4, 2, '.', '');
?>
<?php /* Natural Gas (NGRCUUS)  */  ?>
<?php
	$NGRCUUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'29','4-7');
?>
<?php /* Electricity (ESRCUUS)  */  ?>
<?php
	$ESRCUUS_data = readSpreadsheet($strFullSpreadSheetPath,0,'40','4-7');
?>
<?php /* Display data values */  ?>

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
      <td><?php echo $WTIPUUS_data[0]['col_1']; ?></td>
      <td><?php echo $WTIPUUS_data[0]['col_2']; ?></td>
      <td><em><?php echo $WTIPUUS_data[0]['col_3']; ?></em></td>
      <td><em><?php echo $WTIPUUS_data[0]['col_4']; ?></em></td>
    </tr>
    <tr>
      <td><strong>Brent Crude Oil</strong><br />
<span style="font-size:11px; font-style:italic">dollars per barrel</span></td>
      <td><?php echo $BREPUUS_data[0]['col_1']; ?></td>
      <td><?php echo $BREPUUS_data[0]['col_2']; ?></td>
      <td><em><?php echo $BREPUUS_data[0]['col_3']; ?></em></td>
      <td><em><?php echo $BREPUUS_data[0]['col_4']; ?></em></td>
    </tr>
    <tr>
      <td><strong>Gasoline<sup>b</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
	  <td><?php echo $formattedGasArray1; ?></td>
      <td><?php echo $formattedGasArray2; ?></td>
      <td><em><?php echo $formattedGasArray3; ?></em></td>
      <td><em><?php echo $formattedGasArray4; ?></em></td>
    </tr>
    <tr>
      <td><strong>Diesel<sup>c</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
	  <td><?php echo $formattedDieselArray1; ?></td>
      <td><?php echo $formattedDieselArray2; ?></td>
      <td><em><?php echo $formattedDieselArray3; ?></em></td>
      <td><em><?php echo $formattedDieselArray4; ?></em></td>
    </tr>
    <tr>
      <td><strong>Heating Oil<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
	  <td><?php echo $formattedHeatArray1; ?></td>
      <td><?php echo $formattedHeatArray2; ?></td>
      <td><em><?php echo $formattedHeatArray3; ?></em></td>
      <td><em><?php echo $formattedHeatArray4; ?></em></td>
    </tr>
    <tr>
      <td><strong>Natural Gas<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per thousand cubic feet</span></td>
      <td><?php echo $NGRCUUS_data[0]['col_1']; ?></td>
      <td><?php echo $NGRCUUS_data[0]['col_2']; ?></td>
      <td><em><?php echo $NGRCUUS_data[0]['col_3']; ?></em></td>
      <td><em><?php echo $NGRCUUS_data[0]['col_4']; ?></em></td>
    </tr>
    <tr>
      <td><strong>Electricity<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">cents per kilowatthour</span></td>
      <td><?php echo $ESRCUUS_data[0]['col_1']; ?></td>
      <td><?php echo $ESRCUUS_data[0]['col_2']; ?></td>
      <td><em><?php echo $ESRCUUS_data[0]['col_3']; ?></em></td>
      <td><em><?php echo $ESRCUUS_data[0]['col_4']; ?></em></td>
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
