<?php /* File: data_table_rsec_ytd.php */ ?>
<?php /* Date: 11/19/2014 */ ?>
<?php /* Revised Date: 11/16/2015 */ ?>
<?php /* Author: Tony Allen */ ?>
<?php /* Data Source: Monthly Energy Review - Residential Sector Energy Consumption - Table 2.2 */ ?>
<?php /* Data queries for the following data series:
	Series Name                  MER MSN
	************************************
	Residential Sector Energy Consumption
		Natural Gas              NNRCBUS
		Petroleum                PARCBUS
		Geothermal               GERCBUS
		Solar/PV                 SORCBUS
		Biomass                  BMRCBUS
		Electricity Retail Sales ESRCBUS
	************************************
*/ ?>
<?php /* ************************* REQUIRED UPDATE *********************** */ ?>
<?php /* Manually update the ending value of the sql statements            */ ?>
<?php /* Change the m_yyyymm value to the publication month plus one value */ ?>
<?php /*                (i.e. change from 08 to 09)                        */ ?>
<?php /* ***************************************************************** */ ?>
<?php /* Start of data queries */ ?>
<?php /* Consumption Queries */ ?>
<?php /* Consumption:Natural Gas */ ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as nat_gas_num_2012
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'NNRCBUS';
$bindVariables[":m_yyyymm_start"] = 201200;
$bindVariables[":m_yyyymm_end"] = 201213;
//print $neic->sql;
//print_r($bindVariables);
$NATURAL_GAS_CONS_YTD_2012 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as nat_gas_num_2013
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'NNRCBUS';
$bindVariables[":m_yyyymm_start"] = 201300;
$bindVariables[":m_yyyymm_end"] = 201313;
//print $neic->sql;
//print_r($bindVariables);
$NATURAL_GAS_CONS_YTD_2013 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as nat_gas_num_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'NNRCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201413;
//print $neic->sql;
//print_r($bindVariables);
$NATURAL_GAS_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as nat_gas_num_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'NNRCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201513;
//print $neic->sql;
//print_r($bindVariables);
$NATURAL_GAS_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php /* Consumption:Petroleum */ ?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as petro_num_2012
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'PARCBUS';
$bindVariables[":m_yyyymm_start"] = 201200;
$bindVariables[":m_yyyymm_end"] = 201213;
//print $neic->sql;
//print_r($bindVariables);
$PETRO_CONS_YTD_2012 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as petro_num_2013
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'PARCBUS';
$bindVariables[":m_yyyymm_start"] = 201300;
$bindVariables[":m_yyyymm_end"] = 201313;
//print $neic->sql;
//print_r($bindVariables);
$PETRO_CONS_YTD_2013 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as petro_num_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'PARCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201413;
//print $neic->sql;
//print_r($bindVariables);
$PETRO_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as petro_num_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'PARCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201513;
//print $neic->sql;
//print_r($bindVariables);
$PETRO_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php /* Consumption:Geothermal */ ?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as geothermal_num_2012
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'GERCBUS';
$bindVariables[":m_yyyymm_start"] = 201200;
$bindVariables[":m_yyyymm_end"] = 201213;
//print $neic->sql;
//print_r($bindVariables);
$GEOTHERMAL_CONS_YTD_2012 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as geothermal_num_2013
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'GERCBUS';
$bindVariables[":m_yyyymm_start"] = 201300;
$bindVariables[":m_yyyymm_end"] = 201313;
//print $neic->sql;
//print_r($bindVariables);
$GEOTHERMAL_CONS_YTD_2013 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as geothermal_num_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'GERCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201413;
//print $neic->sql;
//print_r($bindVariables);
$GEOTHERMAL_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as geothermal_num_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'GERCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201513;
//print $neic->sql;
//print_r($bindVariables);
$GEOTHERMAL_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php /* Consumption:Solar/PV */ ?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as solar_num_2012
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'SORCBUS';
$bindVariables[":m_yyyymm_start"] = 201200;
$bindVariables[":m_yyyymm_end"] = 201213;
//print $neic->sql;
//print_r($bindVariables);
$SOLAR_CONS_YTD_2012 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as solar_num_2013
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'SORCBUS';
$bindVariables[":m_yyyymm_start"] = 201300;
$bindVariables[":m_yyyymm_end"] = 201313;
//print $neic->sql;
//print_r($bindVariables);
$SOLAR_CONS_YTD_2013 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as solar_num_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'SORCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201413;
//print $neic->sql;
//print_r($bindVariables);
$SOLAR_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as solar_num_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'SORCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201513;
//print $neic->sql;
//print_r($bindVariables);
$SOLAR_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php /* Consumption:Biomass */ ?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as biomass_num_2012
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'BMRCBUS';
$bindVariables[":m_yyyymm_start"] = 201200;
$bindVariables[":m_yyyymm_end"] = 201213;
//print $neic->sql;
//print_r($bindVariables);
$BIOMASS_CONS_YTD_2012 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as biomass_num_2013
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'BMRCBUS';
$bindVariables[":m_yyyymm_start"] = 201300;
$bindVariables[":m_yyyymm_end"] = 201313;
//print $neic->sql;
//print_r($bindVariables);
$BIOMASS_CONS_YTD_2013 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as biomass_num_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'BMRCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201413;
//print $neic->sql;
//print_r($bindVariables);
$BIOMASS_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as biomass_num_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'BMRCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201513;
//print $neic->sql;
//print_r($bindVariables);
$BIOMASS_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php /* Consumption:Electricity Retail Sales */ ?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as electricity_num_2012
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'ESRCBUS';
$bindVariables[":m_yyyymm_start"] = 201200;
$bindVariables[":m_yyyymm_end"] = 201213;
//print $neic->sql;
//print_r($bindVariables);
$ELECTRICITY_CONS_YTD_2012 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as electricity_num_2013
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'ESRCBUS';
$bindVariables[":m_yyyymm_start"] = 201300;
$bindVariables[":m_yyyymm_end"] = 201313;
//print $neic->sql;
//print_r($bindVariables);
$ELECTRICITY_CONS_YTD_2013 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as electricity_num_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'ESRCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201413;
//print $neic->sql;
//print_r($bindVariables);
$ELECTRICITY_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as electricity_num_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'ESRCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201513;
//print $neic->sql;
//print_r($bindVariables);
$ELECTRICITY_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php /* End of data queries */ ?>
<body>
<?php /* ************** REQUIRED UPDATE ********************* */ ?>
<?php /* Need to manually update ending time period           */ ?>
<?php /* (e.g. publication month value plus one)              */ ?>
<?php /* (i.e. publication month = 6; ending time period = 7) */ ?>
<?php /* **************************************************** */ ?>
<?php /* Set MER publication month value */ ?>
<?php $iPubMonth = 11; $iPubYear = date("Y"); ?>
<?php /* ********************************************** */ ?>
<?php /* Convert publication month value into calendar text string */ ?>
<?php $strPubMonthString = date("F", mktime(0, 0, 0, $iPubMonth, 1, $iPubYear)); ?>
<?php /* ** Start of initialization of data queries arrays ** */ ?>
<?php /* Initialize consumption query arrays */ ?>
<?php $arrNaturalGas_Cons = array(); ?>
<?php $arrPetroleum_Cons = array(); ?>
<?php $arrGeothermal_Cons = array(); ?>
<?php $arrSolar_Cons = array(); ?>
<?php $arrBiomass_Cons = array(); ?>
<?php $arrElectricity_Cons = array(); ?>
<?php /* ** End of initialization of data queries arrays ** */ ?>
<?php /* ** Start of data queries execution ** */ ?>
<?php /* Get data: Assign array values from query results */ ?>
<?php /* Consumption YTD values */ ?>
<?php /* Natural gas YTD */ ?>
<?php $arrNaturalGas_Cons[1]= $NATURAL_GAS_CONS_YTD_2012['nat_gas_num_2012']; ?>
<?php $arrNaturalGas_Cons[2]= $NATURAL_GAS_CONS_YTD_2013['nat_gas_num_2013']; ?>
<?php $arrNaturalGas_Cons[3]= $NATURAL_GAS_CONS_YTD_2014['nat_gas_num_2014']; ?>
<?php $arrNaturalGas_Cons[4]= $NATURAL_GAS_CONS_YTD_2015['nat_gas_num_2015']; ?>
<?php /* Petroleum YTD */ ?>
<?php $arrPetroleum_Cons[1]= $PETRO_CONS_YTD_2012['petro_num_2012']; ?>
<?php $arrPetroleum_Cons[2]= $PETRO_CONS_YTD_2013['petro_num_2013']; ?>
<?php $arrPetroleum_Cons[3]= $PETRO_CONS_YTD_2014['petro_num_2014']; ?>
<?php $arrPetroleum_Cons[4]= $PETRO_CONS_YTD_2015['petro_num_2015']; ?>
<?php /* Geothermal YTD */ ?>
<?php $arrGeothermal_Cons[1]= $GEOTHERMAL_CONS_YTD_2012['geothermal_num_2012']; ?>
<?php $arrGeothermal_Cons[2]= $GEOTHERMAL_CONS_YTD_2013['geothermal_num_2013']; ?>
<?php $arrGeothermal_Cons[3]= $GEOTHERMAL_CONS_YTD_2014['geothermal_num_2014']; ?>
<?php $arrGeothermal_Cons[4]= $GEOTHERMAL_CONS_YTD_2015['geothermal_num_2015']; ?>
<?php /* Solar/PV YTD */ ?>
<?php $arrSolar_Cons[1]= $SOLAR_CONS_YTD_2012['solar_num_2012']; ?>
<?php $arrSolar_Cons[2]= $SOLAR_CONS_YTD_2013['solar_num_2013']; ?>
<?php $arrSolar_Cons[3]= $SOLAR_CONS_YTD_2014['solar_num_2014']; ?>
<?php $arrSolar_Cons[4]= $SOLAR_CONS_YTD_2015['solar_num_2015']; ?>
<?php /* Biomass YTD */ ?>
<?php $arrBiomass_Cons[1]= $BIOMASS_CONS_YTD_2012['biomass_num_2012']; ?>
<?php $arrBiomass_Cons[2]= $BIOMASS_CONS_YTD_2013['biomass_num_2013']; ?>
<?php $arrBiomass_Cons[3]= $BIOMASS_CONS_YTD_2014['biomass_num_2014']; ?>
<?php $arrBiomass_Cons[4]= $BIOMASS_CONS_YTD_2015['biomass_num_2015']; ?>
<?php /* Electricity Retail Sales YTD */ ?>
<?php $arrElectricity_Cons[1]= $ELECTRICITY_CONS_YTD_2012['electricity_num_2012']; ?>
<?php $arrElectricity_Cons[2]= $ELECTRICITY_CONS_YTD_2013['electricity_num_2013']; ?>
<?php $arrElectricity_Cons[3]= $ELECTRICITY_CONS_YTD_2014['electricity_num_2014']; ?>
<?php $arrElectricity_Cons[4]= $ELECTRICITY_CONS_YTD_2015['electricity_num_2015']; ?>
<?php /* ** End of data queries execution ** */ ?>
<?php /* Display YTD data values */ ?>
<table width="100%" class="basic_table">
  <caption>Residential sector energy consumption<br /><span class="units">trillion btu</span></caption>
	<thead>
        <tr>
          <th>January to <?php echo $strPubMonthString; ?></th>
          <th align="right">2015</th>
          <th align="right">2014</th>
          <th align="right">2013</th>
          <th align="right">2012</th>
        </tr>
	</thead>
    <tbody>
      <tr>
          <td>Natural Gas</td>
        <td align="right"><?php echo number_format($arrNaturalGas_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrNaturalGas_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrNaturalGas_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrNaturalGas_Cons[1]); ?></li>
      <tr>
          <td>Petroleum</td>
        <td align="right"><?php echo number_format($arrPetroleum_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrPetroleum_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrPetroleum_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrPetroleum_Cons[1]); ?></li>
      <tr>
          <td>Geothermal</td>
        <td align="right"><?php echo number_format($arrGeothermal_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrGeothermal_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrGeothermal_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrGeothermal_Cons[1]); ?></li>
      <tr>
          <td>Solar/PV</td>
        <td align="right"><?php echo number_format($arrSolar_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrSolar_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrSolar_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrSolar_Cons[1]); ?></li>
      <tr>
          <td>Biomass</td>
        <td align="right"><?php echo number_format($arrBiomass_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrBiomass_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrBiomass_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrBiomass_Cons[1]); ?></li>
      <tr>
          <td>Electricity Retail Sales</td>
        <td align="right"><?php echo number_format($arrElectricity_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrElectricity_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrElectricity_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrElectricity_Cons[1]); ?></li>
    <tfoot>
    <tr>
    <td colspan="5">Source: U.S. Energy Information Administration, <a href="/totalenergy/data/monthly/pdf/sec2_5.pdf"><i>Monthly Energy Review</i>&nbsp;&ndash;&nbsp;Table 2.2</a></li>
    </tfoot>
	</tbody>
</table>
