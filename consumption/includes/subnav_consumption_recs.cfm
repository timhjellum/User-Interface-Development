<script>
	$(function(){
		$('.dropdown').dd();
	});
	
$(document).ready(function(){
    $("div.dat_block a").click(function(){
		 $("table.contable").children("tbody").hide();
		$("table.contable th").removeClass("active");
		var sID = this.href.substring(this.href.indexOf("#") + 1);
		$("[name$='" + sID + "']").click();
  });
});	
</script>
<!--- Consumption Sub Nav --->
<cfset L2Title = "Residential Energy Consumption Survey (RECS)">
<div class="title bg_residential"> 
  <!--- Page/Section Title ---> 
  <a href="/consumption">&#8249; Consumption &amp; Efficiency</a>
  <h1 style="font-size:27px">
    <cfoutput>#L2Title#</cfoutput>
  </h1>
</div>
<!---/ Page/Section Title --->
<div class="subnav"> 
  <!--- Page/Sub Nav ---> 
  <span class="right"><a href="<cfoutput>#glossary_path#</cfoutput>?id=consumption">Glossary &rsaquo;</a> <a href="<cfoutput>#faqs_path#</cfoutput>#crudeoil">FAQS &rsaquo;</a></span>
  <ul>
    <li <cfif locale EQ 'overview'>class="active"</cfif>><a href="/consumption/residential/index.cfm">Overview</a></li>
<!---div class="dat_block">
      <ul>
        <li><a href="/consumption/residential/about.cfm">About RECS</a></li>
        <li><a href="/consumption/residential/terminology.cfm">RECS Terminology</a></li>
        <li><a href="/consumption/residential/faqs.cfm">RECS FAQs</a></li>
      </ul>
    </div--->
    <li class="dropdown <cfif locale EQ 'data'>active</cfif>"><a href="/consumption/residential/data/2009">Data</a></li>
    <div class="dat_block">
      <ul>
        <li ><a href="/consumption/residential/data/2009/">2009</a></li>
        <li><a href="/consumption/residential/data/2005/">2005</a></li>
        <li><a href="/consumption/residential/data/2001/">2001</a></li>
        <li><a href="/consumption/residential/data/1997/">1997</a></li>
        <li><a href="/consumption/residential/data/1993/">1993</a></li>
        <li><a href="/consumption/residential/data/previous.cfm">Previous</a></li>
        <!---li><a href="/consumption/residential/data/archive.cfm">Archive</a></li--->
      </ul>
      
    </div>
    <!---li class="dropdown <cfif locale EQ 'methodology'>active</cfif>"><a href="/consumption/residential/methodology/index.cfm" >Methodology</a></li>
    <div class="dat_block">
      <ul>
        <li><a href="/consumption/residential/surveyforms.cfm">Survey Forms</a></li>
        <li><a href="#">Terminology</a></li>
      </ul>
    </div--->
    <li <cfif locale EQ 'ap'>class="active"</cfif>><a href="/consumption/residential/reports.cfm">Analysis &amp; Projections</a></li>
    <!---li class="dropdown"><a href="/consumption/residential/about.cfm">Surveys</a></li>
    <div class="dat_block">
      <ul>
        <li><a href="/emeu/cbecs/contents.html">Commercial (CBECS)</a></li>
        <li><a href="/emeu/mecs/contents.html">Manufacturing (MECS)</a></li>
        <li><a href="/consumption/archive/rtecs/contents.html">Transportation (TECS)</a></li>
      </ul>
    </div--->
  </ul>
</div>
<!---/ Page/Sub Nav ---> 
