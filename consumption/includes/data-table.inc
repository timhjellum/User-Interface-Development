<?php /* File: data_table_cbs_ytd.cfm */ ?>
<?php /* Date: 10/20/2015             */ ?>
<?php /* Revised Date: 6/10/2016      */ ?>
<?php /* Author: Tony Allen           */ ?>
<?php /* Data Source - Monthly Energy Review:  Energy consumption by sector - Table 2.1 */ ?>
<?php /* Data queries for the following data series:
	Series Name                  MER MSN
	************************************
	End Use Consumption
		Residential              TERCBUS
		Commercial               TECCBUS
		Industrial               TEICBUS
		Transporation            TEACBUS
		Total                    TETCBUS
	************************************
*/ ?>
<?php /* ************** REQUIRED UPDATE ************************** */ ?>
<?php /* Need to manually update ending time period                */ ?>
<?php /* (e.g. data month value plus one)                          */ ?>
<?php /* (i.e. publication data month = 6; ending time period = 7) */ ?>
<?php /* ********************************************************* */ ?>
<?php /* Set MER publication month value */ ?>
<?php $iPubMonth = 01; $iPubYear = date("Y"); ?>
<?php /* ******************************* */ ?>
<?php /* Start of data queries */ ?>
<?php /* Consumption Queries */ ?>
<?php /* Consumption:Residential */ ?>
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>

<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as res_cons_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TERCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201402;
//print $neic->sql;
//print_r($bindVariables);
$RES_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as res_cons_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TERCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201502;
//print $neic->sql;
//print_r($bindVariables);
$RES_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as res_cons_2016
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TERCBUS';
$bindVariables[":m_yyyymm_start"] = 201600;
$bindVariables[":m_yyyymm_end"] = 201602;
//print $neic->sql;
//print_r($bindVariables);
$RES_CONS_YTD_2016 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as res_cons_2017
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TERCBUS';
$bindVariables[":m_yyyymm_start"] = 201700;
$bindVariables[":m_yyyymm_end"] = 201702;
//print $neic->sql;
//print_r($bindVariables);
$RES_CONS_YTD_2017 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as res_cons_2018
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TERCBUS';
$bindVariables[":m_yyyymm_start"] = 201800;
$bindVariables[":m_yyyymm_end"] = 201802;
//print $neic->sql;
//print_r($bindVariables);
$RES_CONS_YTD_2018 = $neic->get($bindVariables);
?>

<?php /* Consumption:Commercial */ ?>

<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as com_cons_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TECCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201402;
//print $neic->sql;
//print_r($bindVariables);
$COM_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as com_cons_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TECCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201502;
//print $neic->sql;
//print_r($bindVariables);
$COM_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as com_cons_2016
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TECCBUS';
$bindVariables[":m_yyyymm_start"] = 201600;
$bindVariables[":m_yyyymm_end"] = 201602;
//print $neic->sql;
//print_r($bindVariables);
$COM_CONS_YTD_2016 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as com_cons_2017
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TECCBUS';
$bindVariables[":m_yyyymm_start"] = 201700;
$bindVariables[":m_yyyymm_end"] = 201702;
//print $neic->sql;
//print_r($bindVariables);
$COM_CONS_YTD_2017 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as com_cons_2018
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TECCBUS';
$bindVariables[":m_yyyymm_start"] = 201800;
$bindVariables[":m_yyyymm_end"] = 201802;
//print $neic->sql;
//print_r($bindVariables);
$COM_CONS_YTD_2018 = $neic->get($bindVariables);
?>

<?php /* Consumption:Industrial */ ?>

<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as in_cons_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEICBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201402;
//print $neic->sql;
//print_r($bindVariables);
$IN_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as in_cons_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEICBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201502;
//print $neic->sql;
//print_r($bindVariables);
$IN_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as in_cons_2016
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEICBUS';
$bindVariables[":m_yyyymm_start"] = 201600;
$bindVariables[":m_yyyymm_end"] = 201602;
//print $neic->sql;
//print_r($bindVariables);
$IN_CONS_YTD_2016 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as in_cons_2017
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEICBUS';
$bindVariables[":m_yyyymm_start"] = 201700;
$bindVariables[":m_yyyymm_end"] = 201702;
//print $neic->sql;
//print_r($bindVariables);
$IN_CONS_YTD_2017 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as in_cons_2018
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEICBUS';
$bindVariables[":m_yyyymm_start"] = 201800;
$bindVariables[":m_yyyymm_end"] = 201802;
//print $neic->sql;
//print_r($bindVariables);
$IN_CONS_YTD_2018 = $neic->get($bindVariables);
?>

<?php /* Consumption:Transportation */ ?>

<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as tr_cons_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEACBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201402;
//print $neic->sql;
//print_r($bindVariables);
$TR_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as tr_cons_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEACBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201502;
//print $neic->sql;
//print_r($bindVariables);
$TR_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as tr_cons_2016
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEACBUS';
$bindVariables[":m_yyyymm_start"] = 201600;
$bindVariables[":m_yyyymm_end"] = 201602;
//print $neic->sql;
//print_r($bindVariables);
$TR_CONS_YTD_2016 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as tr_cons_2017
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEACBUS';
$bindVariables[":m_yyyymm_start"] = 201700;
$bindVariables[":m_yyyymm_end"] = 201702;
//print $neic->sql;
//print_r($bindVariables);
$TR_CONS_YTD_2017 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as tr_cons_2018
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TEACBUS';
$bindVariables[":m_yyyymm_start"] = 201800;
$bindVariables[":m_yyyymm_end"] = 201802;
//print $neic->sql;
//print_r($bindVariables);
$TR_CONS_YTD_2018 = $neic->get($bindVariables);
?>

<?php /* Consumption:Total */ ?>

<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as te_cons_2014
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TETCBUS';
$bindVariables[":m_yyyymm_start"] = 201400;
$bindVariables[":m_yyyymm_end"] = 201402;
//print $neic->sql;
//print_r($bindVariables);
$TE_CONS_YTD_2014 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as te_cons_2015
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TETCBUS';
$bindVariables[":m_yyyymm_start"] = 201500;
$bindVariables[":m_yyyymm_end"] = 201502;
//print $neic->sql;
//print_r($bindVariables);
$TE_CONS_YTD_2015 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as te_cons_2016
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TETCBUS';
$bindVariables[":m_yyyymm_start"] = 201600;
$bindVariables[":m_yyyymm_end"] = 201602;
//print $neic->sql;
//print_r($bindVariables);
$TE_CONS_YTD_2016 = $neic->get($bindVariables);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as te_cons_2017
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TETCBUS';
$bindVariables[":m_yyyymm_start"] = 201700;
$bindVariables[":m_yyyymm_end"] = 201702;
//print $neic->sql;
//print_r($bindVariables);
$TE_CONS_YTD_2017 = $neic->get($bindVariables);
//print_r($TE_CONS_YTD_2017);
?>
<?php
//hsh_sql:
$bindVariables = array();
$neic->sql = " SELECT round(sum(m_value),0) as te_cons_2018
 FROM IDP.IDP_MER_METS WHERE m_msn = :m_msn and m_yyyymm > :m_yyyymm_start and m_yyyymm < :m_yyyymm_end ";
$bindVariables[":m_msn"] = 'TETCBUS';
$bindVariables[":m_yyyymm_start"] = 201800;
$bindVariables[":m_yyyymm_end"] = 201802;
//print $neic->sql;
//print_r($bindVariables);
$TE_CONS_YTD_2018 = $neic->get($bindVariables);
//print_r($TE_CONS_YTD_2018);
?>
<?php /* End of data queries */ ?>
<body>
<?php /* Convert publication month value into calendar text string */ ?>
<?php $strPubMonthString = date("F", mktime(0, 0, 0, $iPubMonth, 1, $iPubYear)); ?>
<?php /* ** Start of initialization of data queries arrays ** */ ?>
<?php /* Initialize consumption query arrays */ ?>
<?php $arrRES_Cons = array(); ?>
<?php $arrCONSUM_Cons = array(); ?>
<?php $arrINDUS_Cons = array(); ?>
<?php $arrTRAN_Cons = array(); ?>
<?php $arrTE_Cons = array(); ?>
<?php /* ** End of initialization of data queries arrays ** */ ?>
<?php /* ** Start of data queries execution ** */ ?>
<?php /* Get data: Assign array values from query results */ ?>
<?php /* Consumption YTD values */ ?>
<?php /* Residential end use YTD */ ?>
<?php $arrRES_Cons[1]= $RES_CONS_YTD_2014[0]['res_cons_2014']; ?>
<?php $arrRES_Cons[2]= $RES_CONS_YTD_2015[0]['res_cons_2015']; ?>
<?php $arrRES_Cons[3]= $RES_CONS_YTD_2016[0]['res_cons_2016']; ?>
<?php $arrRES_Cons[4]= $RES_CONS_YTD_2017[0]['res_cons_2017']; ?>
<?php $arrRES_Cons[5]= $RES_CONS_YTD_2018[0]['res_cons_2018']; ?>
<?php /* Commercial end use YTD */ ?>
<?php $arrCONSUM_Cons[1]= $COM_CONS_YTD_2014[0]['com_cons_2014']; ?>
<?php $arrCONSUM_Cons[2]= $COM_CONS_YTD_2015[0]['com_cons_2015']; ?>
<?php $arrCONSUM_Cons[3]= $COM_CONS_YTD_2016[0]['com_cons_2016']; ?>
<?php $arrCONSUM_Cons[4]= $COM_CONS_YTD_2017[0]['com_cons_2017']; ?>
<?php $arrCONSUM_Cons[5]= $COM_CONS_YTD_2018[0]['com_cons_2018']; ?>
<?php /* Industrial end use YTD */ ?>
<?php $arrINDUS_Cons[1]= $IN_CONS_YTD_2014[0]['in_cons_2014']; ?>
<?php $arrINDUS_Cons[2]= $IN_CONS_YTD_2015[0]['in_cons_2015']; ?>
<?php $arrINDUS_Cons[3]= $IN_CONS_YTD_2016[0]['in_cons_2016']; ?>
<?php $arrINDUS_Cons[4]= $IN_CONS_YTD_2017[0]['in_cons_2017']; ?>
<?php $arrINDUS_Cons[5]= $IN_CONS_YTD_2018[0]['in_cons_2018']; ?>
<?php /* Transportation end use YTD */ ?>
<?php $arrTRAN_Cons[1]= $TR_CONS_YTD_2014[0]['tr_cons_2014']; ?>
<?php $arrTRAN_Cons[2]= $TR_CONS_YTD_2015[0]['tr_cons_2015']; ?>
<?php $arrTRAN_Cons[3]= $TR_CONS_YTD_2016[0]['tr_cons_2016']; ?>
<?php $arrTRAN_Cons[4]= $TR_CONS_YTD_2017[0]['tr_cons_2017']; ?>
<?php $arrTRAN_Cons[5]= $TR_CONS_YTD_2018[0]['tr_cons_2018']; ?>
<?php /* Total YTD */ ?>
<?php $arrTE_Cons[1]= $TE_CONS_YTD_2014[0]['te_cons_2014']; ?>
<?php $arrTE_Cons[2]= $TE_CONS_YTD_2015[0]['te_cons_2015']; ?>
<?php $arrTE_Cons[3]= $TE_CONS_YTD_2016[0]['te_cons_2016']; ?>
<?php $arrTE_Cons[4]= $TE_CONS_YTD_2017[0]['te_cons_2017']; ?>
<?php $arrTE_Cons[5]= $TE_CONS_YTD_2018[0]['te_cons_2018']; ?>
<?php /* ** End of data queries execution ** */ ?>
<?php /* Display YTD data values */ ?>
<table width="100%" class="basic_table">
  <caption>Energy consumption estimates  by sector<br /><span class="units"> trillion Btu</span></caption>
	<thead>
        <tr>
          <th>January to <?php echo $strPubMonthString; ?></th>
          <th align="right">2018</th>
          <th align="right">2017</th>
          <th align="right">2016</th>
          <th align="right">2015</th>
          <th align="right">2014</th>
        </tr>
	</thead>
    <tbody>
<?php /* Energy Consumption by Sector: End-use sector - Year-to-Year data */ ?>
      <tr class="section">
          <td><b>End&ndash;Use Sector</b></td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>			 
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</li>
      <tr class="indented">
          <td>Residential</td>
          <td align="right"><?php echo number_format($arrRES_Cons[5]); ?></td>
          <td align="right"><?php echo number_format($arrRES_Cons[4]); ?></td>
          <td align="right"><?php echo number_format($arrRES_Cons[3]); ?></td>
          <td align="right"><?php echo number_format($arrRES_Cons[2]); ?></td>
          <td align="right"><?php echo number_format($arrRES_Cons[1]); ?></li>
      <tr class="indented">
          <td>Commercial</td>
        <td align="right"><?php echo number_format($arrCONSUM_Cons[5]); ?></td>
        <td align="right"><?php echo number_format($arrCONSUM_Cons[4]); ?></td>
        <td align="right"><?php echo number_format($arrCONSUM_Cons[3]); ?></td>
        <td align="right"><?php echo number_format($arrCONSUM_Cons[2]); ?></td>
        <td align="right"><?php echo number_format($arrCONSUM_Cons[1]); ?></li>
      <tr class="indented">
          <td>Industrial</td>
          <td align="right"><?php echo number_format($arrINDUS_Cons[5]); ?></td>
          <td align="right"><?php echo number_format($arrINDUS_Cons[4]); ?></td>
          <td align="right"><?php echo number_format($arrINDUS_Cons[3]); ?></td>
          <td align="right"><?php echo number_format($arrINDUS_Cons[2]); ?></td>
          <td align="right"><?php echo number_format($arrINDUS_Cons[1]); ?></li>
      <tr class="indented">
          <td>Transportation</td>
          <td align="right"><?php echo number_format($arrTRAN_Cons[5]); ?></td>
          <td align="right"><?php echo number_format($arrTRAN_Cons[4]); ?></td>
          <td align="right"><?php echo number_format($arrTRAN_Cons[3]); ?></td>
          <td align="right"><?php echo number_format($arrTRAN_Cons[2]); ?></td>
          <td align="right"><?php echo number_format($arrTRAN_Cons[1]); ?></li>
      <tr class="indented">
          <td>Primary Total</td>
          <td align="right"><?php echo number_format($arrTE_Cons[5]); ?></td>
          <td align="right"><?php echo number_format($arrTE_Cons[4]); ?></td>
          <td align="right"><?php echo number_format($arrTE_Cons[3]); ?></td>
          <td align="right"><?php echo number_format($arrTE_Cons[2]); ?></td>
          <td align="right"><?php echo number_format($arrTE_Cons[1]); ?></li>
<?php /* Primary Energy Overview: Consumption - Year-to-Year data reference link */ ?>
    <tfoot>
    <tr>
    <td colspan="6">Source: U.S. Energy Information Administration, <a href="/totalenergy/data/monthly/pdf/sec2_3.pdf"><i>Monthly Energy Review</i>&nbsp;&ndash;&nbsp;Table 2.1</a></li>
    </tfoot>
	</tbody>
</table>
