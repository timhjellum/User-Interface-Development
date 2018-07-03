<?php $locale = 'data'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Energy Perspectives, Total Energy - Energy Information Administration</title>
<?php $hct = 'y'; ?><?php /*include highcharts eia-theme via eia_head_info.php */ ?>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php /* Start of user defined Javascript function */ ?>
<?php /* Purpose: display the correct data year value as shown in the table header */ ?>
<script language="javascript" type="text/javascript">
function DataEndYear(lngLagValue)
{
	var lngSetCalendarYear, lngDataYear;
	lngSetCalendarYear = 2012;
	lngDataYear = lngSetCalendarYear - lngLagValue;
	document.write(lngDataYear);
	return;
}
</script>
<style>
.EPG_link, .chart_nav_link {
	cursor: pointer;
}
</style>
<script language="javascript">
function getChart(chartURL){
	$.ajax({url:chartURL, success:function(result){
		var debuggerSignature = '</td></td></td></th></th></th></tr></tr></tr></table></table></table></a></abbrev></acronym></address></applet>';
		var debugPos = result.indexOf(debuggerSignature);
		if (debugPos > 0){
			$("HTML").prepend(result.substring(0,debugPos));
		}else{
			$("HTML").prepend(result);
		}

	var partsChartURL = chartURL.split("=");
	$('#nav_chart_previous a').attr("name", partsChartURL[0] + "=" + (parseInt(partsChartURL[1])-1));
	$('#nav_chart_next a').attr("name", partsChartURL[0] + "=" + (parseInt(partsChartURL[1])+1));
	if(partsChartURL[1]=="1"){
		$('#nav_chart_previous').hide();
	} else {
		$('#nav_chart_previous').show();
	}
	if(partsChartURL[1]=="43"){
		$('#nav_chart_next').hide();
	} else {
		$('#nav_chart_next').show();
	}
	$('.showGraphLink').click();
	$('#fancybox-content, #fancybox-content > div').height('auto');
	makeChart();
	$.fancybox.center(0);


}});

}

	$(document).ready(function(){
		$(".showGraphLink").fancybox({
			'width'             :  900,
			'height'            : '90%',
			'autoDimensions'    : false,
			'autoScale'         : true,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});
		//$("#fancybox-close").click(function(){
		//	$("table.zebra td[style]").css("background-color", "");
		//});
		$("a.EPG_link").click(function(){
			$("#fancybox-close").click();
			//$("table.zebra a[name='" + this.name + "']").parent().css("background-color","yellow");
			getChart(this.name);
//			$("div#HighChartsDiv").load(this.name);

		});

	});

	function showChart(){
		$('.showGraphLink').click();
	}

</script>
<?php /* End of user defined Javascript function */ ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* *********************************************************************** */ ?>
<?php /* File Name:            perspectives.php                                  */ ?>
<?php /* Purpose:              Display Annual Energy Review Perspectives website */ ?>
<?php /* Publication Issue:    AER 2011                                          */ ?>
<?php /* Revision date:        September 27, 2012                                */ ?>
<?php /* *********************************************************************** */ ?>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php /* Navigation Menu */ ?>
<?php include ('totalenergy/data/annual/includes/subnav_allsources.inc') ; ?>
<?php include ('energy_perspectives_config.php') ; ?>
<?php /* fancy box structures */ ?>
<a class="showGraphLink" href="#outerShowGraphDiv"></a>
<div id="dwrap" style="display:none;width:100%;height:100%;"><div id="outerShowGraphDiv" style="width:100%; height:100%; position:relative;">
	<div id="HighChartsDiv" style="width:100%;height:100%;position:relative;">this will be filled with a highchart</div>
	</br>
    <div id="chart_nav" class="no_print"><span id="nav_chart_previous" style="float:left;"><a class="EPG_link">PREVIOUS</a></span><span id="nav_chart_next" style="float:right;"><a class="EPG_link">NEXT</a></span></div>
</div>
</div>
<?php /* Page/Body Content */ ?>

    <div class="pagecontent mr_temp2">
	  <?php /* Start of Main Column */ ?>
      <div class="main_col">
	      <?php /* Start of Total Energy - Annual */ ?>
          <h2>Energy Perspectives 1949&ndash;2011</h2>
	      <?php /* Start of release date of AER */ ?>
          <p class="dat"><?php include ('includes/release_date.inc') ; ?></p>
	      <?php /* End of release date of AER */ ?>
<?php /*           <p class="dat">Release Date: September 20, 2012<br />Next Update: August 2013<br /></p> */ ?>
            <p><h2>Introduction</h2></p>
<p>
<i>Energy Perspectives</i> is a graphical overview of energy history in the United States. The 42 graphs shown here reveal sweeping trends related to the Nation's production, consumption, and trade of energy from 1949 through 2011.</p>
<p>&nbsp;</p><p><h2>Energy Flow, 2011 (Quadrillion Btu)</h2><a onclick="$('a#ep_excel').click();"><img src="images/overview_flow_2011_med.png" border="0" alt="Total Energy Flow diagram image"/></a><p style="font-style:italic;">For footnotes see <a href="diagram1.php">here</a>.</p></p>
<p>Energy can be grouped into three broad categories. First, and by far the largest, is the fossil fuels&ndash;coal, petroleum, and natural gas. Fossil fuels have stored the sun's energy over millennia past, and it is primarily that captured energy that we are drawing on today to fuel the activities of the modern economy. Use of the individual fossil fuels changed at different rates over the decades but all three major forms have been essential to meeting the Nation's energy requirements. In 1949, fossil fuel consumption in the United States totaled 29 quadrillion British thermal units (Btu); in 2011, the total was 80 quadrillion Btu.</p>
<?php /*p>&nbsp;</p><p><h2>Primary Energy Consumption by Source and Sector (Quadrillion Btu)</h2><br /><img src="images/pecss_btu_2010_small.jpg" border="0" alt="Primary Energy Consumption diagram image"/></p*/ ?>
<p>The second major category of energy is nuclear power, which is a relative newcomer in the energy business. The nuclear electric power industry got its start in this country in 1957, when the Shippingport, Pennsylvania, nuclear electric power plant came on line. By 2011, the industry had expanded to supply 19 percent of the Nation's electrical output and 8 percent of all primary energy.</p>

<p>&nbsp;</p><p><h2>Renewable Energy as Share of Total Primary Energy Consumption, 2011</h2><img src="images/aer_2011_renewable_energy_via_source.png" border="0" alt="Renewable Energy by Source diagram image" /></p>
<p>The third category is renewable energy. Unlike fossil fuels, which are finite in supply, renewable energy is essentially inexhaustible because it is naturally replenished. Renewable energy includes conventional hydroelectric power, which is power derived from flowing water; biomass such as wood, waste, and biofuels; geothermal; solar; and wind. Before the great expansion in fossil fuel use that began with coal in the late 1800s, wood was the primary fuel used in this country. Today, we are looking again at renewable resources to find new ways to help meet our energy needs. In 2011, all forms of renewable energy together accounted for 9 percent of U.S. primary energy consumption.</p>
<p>The U.S. Energy Information Administration invites you to study the trends appearing in this update of Energy Perspectives. For greater detail of data and illustrations, please see the main report, the <a href="/totalenergy/data/annual/" style="font-style:italic">Annual Energy Review 2011</a>. For the most current data for many of the time series, see the <a href="/totalenergy/data/monthly/index.php" style="font-style:italic">Monthly Energy Review</a>.</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

          <table class="contable">
          </table>          
	      <?php /* End of Total Energy - Annual */ ?>
	  <?php /* End of Main Column */ ?>
      </div>
      <div class="side_col right">
	  <?php /* Start of Side Column */ ?>
      <?php include ('totalenergy/data/annual/includes/ep_aer2011_content.inc') ; ?>
      <?php /* End of Side Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>