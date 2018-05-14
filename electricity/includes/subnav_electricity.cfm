<!--- Section-specific variables --->
<cfset subjectids = "146">
<cfset sectionname = "Electricity">

<script>
<!--- Fire when jQuery is ready --->
$(document).ready(function(){
    $('.dropdown').dd();
    $("div.dat_block a").click(function(){
		 $("table.contable").children("tbody").hide();
		$("table.contable th").removeClass("active");
		var sID = this.href.substring(this.href.indexOf("#") + 1);
		$("[name$='" + sID + "']").click();
  });
});	
</script>
<!---cfinclude template="/global/includes/sub_menu_fix.cfm"--->
<!--- Page/Section Title --->
<div class="title bg_electricity">
  <h1><cfoutput>#sectionname#</cfoutput></h1>
</div>

<div class="subnav"><!--- Page/Sub Nav --->
  <span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>?id=electricity">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>#electricity">FAQS &rsaquo;</a></span>
  <ul>
    <li <cfif locale EQ 'overview'>class="active"</cfif>><a href="/electricity/">Overview</a></li>
    <li class="dropdown <cfif locale EQ 'data'>active</cfif>"><a href="/electricity/data.cfm">Data</a></li>
    <!--- Data Menu Drop Down --->
    <div class="dat_block dat_links">
      <ul>
        <li><a href="/electricity/data/browser">Electricity Data Browser <i>(interactive query tool with charting &amp; mapping)</i></a></li>
        <li><a href="/electricity/data.cfm#summary">Summary</a></li>
        <li><a href="/electricity/data.cfm#sales">Sales (consumption), revenue, prices & customers</a></li>
        <li><a href="/electricity/data.cfm#generation">Generation and thermal output</a></li>
        <li><a href="/electricity/data.cfm#gencapacity">Capacity of electric power plants</a></li>
        <li><a href="/electricity/data.cfm#consumption">Consumption of fuels used to generate electricity</a></li>
        <li><a href="/electricity/data.cfm#fossilfuels">Receipts of fossil-fuels for electricity generation</a></li>
        <li><a href="/electricity/data.cfm#avgcost">Average cost of fossil-fuels for electricity generation</a></li>
        <li><a href="/electricity/data.cfm#ffstocks">Fossil-fuel stocks for electricity generation</a></li>
<!--              <li><a href="/electricity/data.cfm#electriccosts">Electricity costs</a></li> -->
        <li><a href="/electricity/data.cfm#revenue">Cost, revenue and expense statistics for...</a></li>
        <li><a href="/electricity/data.cfm#traderel">Electricity transactions, reliability</a></li>
<!--        <li><a href="/electricity/data.cfm#demand">Demand, capacity resources, and capacity margins</a></li>
 -->        <li><a href="/electricity/data.cfm#elecenv">Electricity and the environment</a></li>
        <li><a href="/electricity/data.cfm">All electricity data reports</a></li>
      </ul>
    </div>
    <!---/ Data Menu Drop Down --->
    
    <li class="dropdown <cfif locale EQ 'ap'>active</cfif>"><a href="/electricity/reports.cfm">Analysis & Projections</a></li>

    <!--- Reports Menu Drop Down --->
    <div id="analysis-projections" class="dat_block dat_links" style="width:600px;">

      <!--- Left side --->
      <div style="float:left; width:400px;">
        <h4 style="margin: 12px 20px 6px 20px;border-bottom:1px solid #CCC;padding-bottom:2px;">Major Topics</h4>
        <ul class="split_2columns" style="margin-bottom:16px;">
          <!--- Analysis & Projections Menu Include --->
          <cfinclude template="\global\includes\menu_ap.cfm">
        </ul>
      </div>

      <!--- Right side --->
      <div class="listContainer2" style="width:200px; float:right">
        <h4 style="margin: 12px 20px 6px 20px; border-bottom:1px solid #ccc; padding-bottom:2px;">Browse by Tag</h4>
        <ul>
          <li><a href="/electricity/browsebytag.cfm">Alphabetical</a></li>
          <li><a href="/electricity/browsebytag.cfm?frequency">Frequency</a></li>
          <li><a href="/electricity/browsebytag.cfm?tagcloud">Tag Cloud</a></li>
        </ul>
      </div>
    </div>
    <!---/ Data Menu Drop Down --->
  </ul>
</div><!---/ Page/Sub Nav --->