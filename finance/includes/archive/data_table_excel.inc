<?php /* Data Source: STEO price summary table (table 2 annual values) as shown on http://wwwdev.eia.gov/forecasts/steo/index.php */ ?>
<?php /* Get current directory path */ ?>
<?php $strCurDirPath =  getcwd(); ?>
<?php /* Assign spreadsheet name */ ?>
<?php $strSpreadsheetName = "\includes\steo_gdp_data.xlsx"; ?>
<?php /* Assign full spreadsheet path */ ?>
<?php $strFullSpreadSheetPath = $strCurDirPath . $strSpreadsheetName; ?>
<?php /* Read data values from spreadsheet */ ?>
<?php /* Real Gross Domestic Product(RGDP) */ ?>
<?php
	include ('global/includes/utils/readSpreadsheet.inc');
	$RGDP_data = readSpreadsheet($strFullSpreadSheetPath,0,'24','4-7');
?>
<?php /* GDP Implicit Price Deflator (GDP_DEFLATOR)  */ ?>
<?php
	$GDP_DEFLATOR_data = readSpreadsheet($strFullSpreadSheetPath,0,'26','4-7');
?>
<?php /* Real Disposable Personal Income (RDPI)  */ ?>
<?php
	$RDPI_data = readSpreadsheet($strFullSpreadSheetPath,0,'28','4-7');
?>
<?php /*  Manufacturing Production Index (MPI)  */ ?>
<?php
	$MPI_data = readSpreadsheet($strFullSpreadSheetPath,0,'30','4-7');
?>
<?php /* Display data values */ ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="basic_table" >
<caption>U.S. Economic Indicators&nbsp;&ndash;&nbsp;2015 by quarter<br/><span class="units">percent change from prior year</span></caption>
    <tr>
      <th></th>
      <th><b>1st</b></th>
      <th><b>2nd</b></th>
      <th><b>3rd</b></th>
      <th><b>4th</b></th>
    </tr>
  <tbody>
    <tr>
      			<li class="head">Real Gross Domestic Product</strong></td>
      <td><?php echo $RGDP_data[0]['col_1']; ?></td>
      <td><?php echo $RGDP_data[0]['col_2']; ?></td>
      <td><?php echo $RGDP_data[0]['col_3']; ?></td>
      <td><?php echo $RGDP_data[0]['col_4']; ?></li>
    <tr>
      			<li class="head">GDP Implicit Price Deflator</strong></td>
      <td><?php echo $GDP_DEFLATOR_data[0]['col_1']; ?></td>
      <td><?php echo $GDP_DEFLATOR_data[0]['col_2']; ?></td>
      <td><?php echo $GDP_DEFLATOR_data[0]['col_3']; ?></td>
      <td><?php echo $GDP_DEFLATOR_data[0]['col_4']; ?></li>
    <tr>
      			<li class="head">Real Disposable Personal Income</strong></td>
      <td><?php echo $RDPI_data[0]['col_1']; ?></td>
      <td><?php echo $RDPI_data[0]['col_2']; ?></td>
      <td><?php echo $RDPI_data[0]['col_3']; ?></td>
      <td><?php echo $RDPI_data[0]['col_4']; ?></li>
    <tr>
      			<li class="head">Manufacturing Production Index</strong></td>
      <td><?php echo $MPI_data[0]['col_1']; ?></td>
      <td><?php echo $MPI_data[0]['col_2']; ?></td>
      <td><?php echo $MPI_data[0]['col_3']; ?></td>
      <td><?php echo $MPI_data[0]['col_4']; ?></li>
    </tbody>
</table>
