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
                <table>
                    <caption>U.S. Economic Indicators&nbsp;&ndash;&nbsp;2015 by quarter<br/>
                        <em>percent change from prior year</em></caption>
                    <thead>
                        <tr>
                            <th></th>
                            <th>1st</th>
                            <th>2nd</th>
                            <th>3rd</th>
                            <th>4th</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Real Gross Domestic Product</strong></td>
                            <td>
                                <?php echo $RGDP_data[0]['col_1']; ?>
                            </td>
                            <td>
                                <?php echo $RGDP_data[0]['col_2']; ?>
                            </td>
                            <td>
                                <?php echo $RGDP_data[0]['col_3']; ?>
                            </td>
                            <td>
                                <?php echo $RGDP_data[0]['col_4']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>GDP Implicit Price Deflator</strong></td>
                            <td>
                                <?php echo $GDP_DEFLATOR_data[0]['col_1']; ?>
                            </td>
                            <td>
                                <?php echo $GDP_DEFLATOR_data[0]['col_2']; ?>
                            </td>
                            <td>
                                <?php echo $GDP_DEFLATOR_data[0]['col_3']; ?>
                            </td>
                            <td>
                                <?php echo $GDP_DEFLATOR_data[0]['col_4']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Real Disposable Personal Income</strong></td>
                            <td>
                                <?php echo $RDPI_data[0]['col_1']; ?>
                            </td>
                            <td>
                                <?php echo $RDPI_data[0]['col_2']; ?>
                            </td>
                            <td>
                                <?php echo $RDPI_data[0]['col_3']; ?>
                            </td>
                            <td>
                                <?php echo $RDPI_data[0]['col_4']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Manufacturing Production Index</strong></td>
                            <td>
                                <?php echo $MPI_data[0]['col_1']; ?>
                            </td>
                            <td>
                                <?php echo $MPI_data[0]['col_2']; ?>
                            </td>
                            <td>
                                <?php echo $MPI_data[0]['col_3']; ?>
                            </td>
                            <td>
                                <?php echo $MPI_data[0]['col_4']; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>