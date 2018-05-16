<cfsilent>
<!--- Data Source: STEO price summary table (table 2 annual values) as shown on http://wwwdev.eia.gov/forecasts/steo/tables/?tableNumber=8#startcode=2013 --->
<!--- Get current directory path --->
<cfset strCurDirPath = GetDirectoryFromPath(GetCurrentTemplatePath())>
<!--- Assign spreadsheet name --->
<cfset strSpreadsheetName = "steo_price_summary.xls">
<!--- Assign full spreadsheet path --->
<cfset strFullSpreadSheetPath = strCurDirPath & strSpreadsheetName>
<!--- Read data values from spreadsheet --->
<!--- WTI Crude Oil (WTIPUUS) --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="4" columns="4-7" query="WTIPUUS_data">
<!--- Brent Crude Oil (BREPUUS)  --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="7" columns="4-7" query="BREPUUS_data">
<!--- Gasoline (MGRARUS)  --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="18" columns="4-7" query="MGRARUS_data">
<cfset GasArray = arrayNew(1)>
<cfset GasArray[1] = MGRARUS_data.col_1/100>
<cfset GasArray[2] = MGRARUS_data.col_2/100>
<cfset GasArray[3] = MGRARUS_data.col_3/100>
<cfset GasArray[4] = MGRARUS_data.col_4/100>
<!--- Diesel (DSRTUUS)  --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="20" columns="4-7" query="DSRTUUS_data">
<cfset DieselArray = arrayNew(1)>
<cfset DieselArray[1] = DSRTUUS_data.col_1/100>
<cfset DieselArray[2] = DSRTUUS_data.col_2/100>
<cfset DieselArray[3] = DSRTUUS_data.col_3/100>
<cfset DieselArray[4] = DSRTUUS_data.col_4/100>
<!--- Heating Oil (D2RCAUS)  --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="21" columns="4-7" query="D2RCAUS_data">
<cfset HeatArray = arrayNew(1)>
<cfset HeatArray[1] = D2RCAUS_data.col_1/100>
<cfset HeatArray[2] = D2RCAUS_data.col_2/100>
<cfset HeatArray[3] = D2RCAUS_data.col_3/100>
<cfset HeatArray[4] = D2RCAUS_data.col_4/100>
<!--- Natural Gas (NGRCUUS)  --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="29" columns="4-7" query="NGRCUUS_data">
<!--- Electricity (ESRCUUS)  --->
<cfspreadsheet action="READ" src=#strFullSpreadSheetPath# sheet="1" rows="40" columns="4-7" query="ESRCUUS_data">
<!--- Display data values --->
</cfsilent>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="basic_table" >
  <caption>Price summary (historical and forecast) 
  </caption>
  <thead>
    <tr>
      <th>
      <th>2015</th>
      <th>2016</th>
      <th><em>2017</em></th>
      <th><em>2018</em></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>WTI Crude Oil<sup>a</sup></strong><br /><span style="font-size:11px; font-style:italic">dollars per barrel</span></td>
      <td><cfoutput query="WTIPUUS_data">#NumberFormat(WTIPUUS_data.col_1,"999.99")#</cfoutput></td>
      <td><cfoutput query="WTIPUUS_data">#NumberFormat(WTIPUUS_data.col_2,"999.99")#</cfoutput></td>
      <td><em><cfoutput query="WTIPUUS_data">#NumberFormat(WTIPUUS_data.col_3,"999.99")#</cfoutput></em></td>
      <td><em><cfoutput query="WTIPUUS_data">#NumberFormat(WTIPUUS_data.col_4,"999.99")#</cfoutput></em></td>
    </tr>
    <tr>
      <td><strong>Brent Crude Oil</strong><br />
<span style="font-size:11px; font-style:italic">dollars per barrel</span></td>
      <td><cfoutput query="BREPUUS_data">#NumberFormat(BREPUUS_data.col_1,"999.99")#</cfoutput></td>
      <td><cfoutput query="BREPUUS_data">#NumberFormat(BREPUUS_data.col_2,"999.99")#</cfoutput></td>
      <td><em><cfoutput query="BREPUUS_data">#NumberFormat(BREPUUS_data.col_3,"999.99")#</cfoutput></em></td>
      <td><em><cfoutput query="BREPUUS_data">#NumberFormat(BREPUUS_data.col_4,"999.99")#</cfoutput></em></td>
    </tr>
    <tr>
      <td><strong>Gasoline<sup>b</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
		<td><cfoutput>#NumberFormat(GasArray[1],"99.99")#</cfoutput></td>
		<td><cfoutput>#NumberFormat(GasArray[2],"99.99")#</cfoutput></td>
		<td><em><cfoutput>#NumberFormat(GasArray[3],"99.99")#</cfoutput></em></td>
		<td><em><cfoutput>#NumberFormat(GasArray[4],"99.99")#</cfoutput></em></td>
    </tr>
    <tr>
      <td><strong>Diesel<sup>c</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
		<td><cfoutput>#NumberFormat(DieselArray[1],"99.99")#</cfoutput></td>
		<td><cfoutput>#NumberFormat(DieselArray[2],"99.99")#</cfoutput></td>
		<td><em><cfoutput>#NumberFormat(DieselArray[3],"99.99")#</cfoutput></em></td>
		<td><em><cfoutput>#NumberFormat(DieselArray[4],"99.99")#</cfoutput></em></td>
    </tr>
    <tr>
      <td><strong>Heating Oil<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per gallon</span></td>
		<td><cfoutput>#NumberFormat(HeatArray[1],"99.99")#</cfoutput></td>
		<td><cfoutput>#NumberFormat(HeatArray[2],"99.99")#</cfoutput></td>
		<td><em><cfoutput>#NumberFormat(HeatArray[3],"99.99")#</cfoutput></em></td>
		<td><em><cfoutput>#NumberFormat(HeatArray[4],"99.99")#</cfoutput></em></td>
    </tr>
    <tr>
      <td><strong>Natural Gas<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">dollars per thousand cubic feet</span></td>
      <td><cfoutput query="NGRCUUS_data">#NumberFormat(NGRCUUS_data.col_1,"99.99")#</cfoutput></td>
      <td><cfoutput query="NGRCUUS_data">#NumberFormat(NGRCUUS_data.col_2,"99.99")#</cfoutput></td>
      <td><em><cfoutput query="NGRCUUS_data">#NumberFormat(NGRCUUS_data.col_3,"99.99")#</cfoutput></em></td>
      <td><em><cfoutput query="NGRCUUS_data">#NumberFormat(NGRCUUS_data.col_4,"99.99")#</cfoutput></em></td>
    </tr>
    <tr>
      <td><strong>Electricity<sup>d</sup></strong><br />
<span style="font-size:11px; font-style:italic">cents per kilowatthour</span></td>
      <td><cfoutput query="ESRCUUS_data">#NumberFormat(ESRCUUS_data.col_1,"99.99")#</cfoutput></td>
      <td><cfoutput query="ESRCUUS_data">#NumberFormat(ESRCUUS_data.col_2,"99.99")#</cfoutput></td>
      <td><em><cfoutput query="ESRCUUS_data">#NumberFormat(ESRCUUS_data.col_3,"99.99")#</cfoutput></em></td>
      <td><em><cfoutput query="ESRCUUS_data">#NumberFormat(ESRCUUS_data.col_4,"99.99")#</cfoutput></em></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <td colspan="1"><sup>a</sup>West Texas Intermediate.<br />
        <sup>b</sup>Average regular pump price.
        <br />Note: Italics indicate forecast.
        <br />Source: <a href="/forecasts/steo/">Short-Term Energy Outlook</a>
        </td>
        <td style="text-align:left" colspan="4">
        <sup>c</sup>On-highway retail.<br />
        <sup>d</sup>U.S. Residential average.</td>
    </tr>
  </tfoot>
</table>
