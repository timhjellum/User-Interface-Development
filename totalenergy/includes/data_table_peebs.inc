<?php /* File: data_table_peebs.inc */ ?>
<?php /* Date: 11/17/2014 */ ?>
<?php /* Revised Date: 2/23/2016 */ ?>
<?php /* Author: Tony Allen */ ?>
<?php /* Data Source - Monthly Energy Review: Primary Energy Exports by Source: Table 1.4b */ ?>
<?php /* Data queries for the following data series:
	Series Name                  MER MSN
	************************************
		Coal Imports        CLEXBUS
		Coal Coke Imports   CCEXBUS
		Natural Gas Imports NGEXBUS
		Crude Oil Imports   COEXBUS
		Petroleum Products  RQEXBUS
		Biofuels Imports    BFEXBUS
		Electricity Imports ELEXBUS
	************************************
*/ ?>
<?php /* ************** REQUIRED UPDATE ********************* */ ?>
<?php /* Need to manually update DATA time period values      */ ?>
<?php /* DATA month of July would be set to  iDATAMonth = 7   */ ?>
<?php /* **************************************************** */ ?>
<?php /* REQUIRED: Set MER DATA month value */ ?>
<?php $iDATAMonth = 04 ?>
<?php /* REQUIRED: Set MER DATA year value */ ?>
<?php $iDATAYear = 2018; ?>
<?php /* Convert DATA month and year value into text string   */ ?>
<?php $strPubMonthString = date("F", mktime(0,0,0, $iDATAMonth, 10)); ?>
<?php $strPubYearString = strval($iDATAYear); ?>
<?php /* ******************************************************* */ ?>
<?php /* ************** REQUIRED UPDATE ************************ */ ?>
<?php /* Need to manually update ending time period              */ ?>
<?php /* (i.e. DATA month = July 2014; SET m_yyyymm = 201407)    */ ?>
<?php /* ******************************************************* */ ?>
<?php /* Start of data queries */ ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();

?>
<?php
    $neic->sql = "SELECT round(m_value/1000,3) as CL_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='CLEXBUS' 
                  and m_yyyymm=201801";
    $CL_EXPORT_MONTHLY = $neic->get()[0];

    $neic->sql = "SELECT round(m_value/1000,3) as CC_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='CCEXBUS'
                  and m_yyyymm=201801";
    $CC_EXPORT_MONTHLY = $neic->get()[0];

    $neic->sql = "SELECT round(m_value/1000,3) as NG_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='NGEXBUS'
                  and m_yyyymm=201801";
    $NG_EXPORT_MONTHLY = $neic->get()[0];

    $neic->sql = "SELECT round(m_value/1000,3) as CO_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='COEXBUS'
                  and m_yyyymm=201801";
    $CO_EXPORT_MONTHLY = $neic->get()[0];

    $neic->sql = "SELECT round(m_value/1000,3) as PA_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='RQEXBUS'
                  and m_yyyymm=201801";
    $PA_EXPORT_MONTHLY = $neic->get()[0];

    $neic->sql = "SELECT round(m_value/1000,3) as BF_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='BFEXBUS'
                  and m_yyyymm=201801";
    $BF_EXPORT_MONTHLY = $neic->get()[0];

    $neic->sql = "SELECT round(m_value/1000,3) as EL_EXPORT
                  FROM IDP.IDP_MER_METS WHERE m_msn='ELEXBUS'
                  and m_yyyymm=201801";
    $EL_EXPORT_MONTHLY = $neic->get()[0];
?>

<?php /* End of data queries */ ?>
<?php /* ************************************************** */ ?>
<?php /* ** Start of data queries execution ** */ ?>
<?php /* Get data: Assign array values from query results */ ?>
<?php
    $dblCoal = $CL_EXPORT_MONTHLY['cl_export'];
    $dblCoalCoke = $CC_EXPORT_MONTHLY['cc_export'];
    $dblNaturalGas = $NG_EXPORT_MONTHLY['ng_export'];
    $dblCrude = $CO_EXPORT_MONTHLY['co_export'];
    $dblPetroleum = $PA_EXPORT_MONTHLY['pa_export'];
    $dblBiofuels = $BF_EXPORT_MONTHLY['bf_export'];
    $dblElectricity = $EL_EXPORT_MONTHLY['el_export'];
?>
<?php /* ** End of data queries execution ** */ ?>
<?php /* Display data values */ ?>
<table class="basic_table">
<caption>Primary energy exports by source<br/><span class="units">quadrillion Btu</span></caption>
	<thead>
        <tr>
          <th>&nbsp;</th>
          <th><?php echo $strPubMonthString; ?> <?php echo $strPubYearString; ?></th>
        </tr>
	</thead>
    <tbody>
      <tr>
          <td>Coal</td>
          <td><?php echo number_format($dblCoal,3); ?></td>
     </tr>
      <tr>
          <td>Coal Coke</td>
          <td><?php echo number_format($dblCoalCoke,3); ?></td>
     </tr>
      <tr>
          <td>Natural Gas</td>
          <td><?php echo number_format($dblNaturalGas,3); ?></td>
     </tr>
      <tr>
          <td>Crude Oil</td>
          <td><?php echo number_format($dblCrude,3); ?></td>
     </tr>
      <tr>
          <td>Petroleum Products</td>
          <td><?php echo number_format($dblPetroleum,3); ?></td>
     </tr>
      <tr>
          <td>Biofuels</td>
          <td><?php echo number_format($dblBiofuels,3); ?></td>
     </tr>
      <tr>
          <td>Electricity</td>
          <td><?php echo number_format($dblElectricity,3); ?></td>
     </tr>
    <tfoot>
        <tr>
	        <td colspan="2">Source: U.S. Energy Information Administration, <a href="/totalenergy/data/monthly/pdf/sec1_11.pdf"><i>Monthly Energy Review</i>&nbsp;&ndash;&nbsp;Table 1.4b</a></td>
        </tr>
    </tfoot>
	</tbody>
</table>
