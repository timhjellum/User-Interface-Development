 <table id="snl_dpst" class="basic_table snl">
        <caption>
            Average weekly coal commodity spot prices<br/>
            
            <em>(dollars per short ton)</em>
        </caption>
        
        <thead >
            <tr class="double-header">
                <th rowspan="2">Coal commodity regions</th>
                <th colspan="4">Week ending</th>
            </tr>
            <tr id="dpst_dates">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="dpst_data">
            <tr>
                <td>Central Appalachia<br/>
                <em>12,500 Btu, 1.2 SO<sub>2</sub></em></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Northern Appalachia<br/>
                <em>13,000 Btu, < 3.0 SO<sub>2</sub></em></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Illinois Basin<br/>
                <em>11,800 Btu, 5.0 SO<sub>2</sub></em></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Powder River Basin<br/>
                <em>8,800 Btu, 0.8 SO<sub>2</sub></em></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Uinta Basin<br/>
                <em>11,700 Btu, 0.8 SO<sub>2</sub></em></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
            	<td colspan="6"><strong>Source: </strong>With permission, <a href="/coal/markets/">Coal Markets</a></td>
            </tr>
        </tfoot>
        
</table>

<script type="text/javascript">

$.getJSON( "/coal/markets/coal_markets_json.php", function(result) {

	snl_dpst_table(result.data[0].snl_dpst);
	
});


function snl_dpst_table(data) {
		data.reverse();
		var header_dates 	= [data[1].WEEK_ENDING_DATE, data[2].WEEK_ENDING_DATE, data[3].WEEK_ENDING_DATE, data[4].WEEK_ENDING_DATE];//, data[5].WEEK_ENDING_DATE];
		var column 			= 1;
		var row 			= 0;
		//change the i from 1 to 0 to get the data date
		for(var i=0; i<header_dates.length; i++) {
			$("#dpst_dates th:eq(" + i + ")").text(header_dates[i]);
		}
		
		for(var i=1; i < 5; i++) { //<data.length; i++) {
			for(var j=1; j<4; j++) {
				var td = i  ;      //td = i + 1;
				/*var central_app 		= parseFloat(data[i].CENTRAL_APP).toFixed(2);
				var northern_app 		= parseFloat(data[i].NORTHERN_APP).toFixed(2);
				var illiois_basin 		= parseFloat(data[i].ILLIOIS_BASIN).toFixed(2);
				var power_river_basin 	= parseFloat(data[i].POWDER_RIVER_BASIN).toFixed(2);
				var uinta_basin 		= parseFloat(data[i].UINTA_BASIN).toFixed(2);*/
				var central_app;
				var northern_app;
				var illiois_basin;
				var power_river_basin;
				var uinta_basin;
				
				if(isNaN(data[i].CENTRAL_APP)) {
					central_app	= "NA";
				} else {
					central_app = "$" + parseFloat(data[i].CENTRAL_APP).toFixed(2);
				}
				
				if(isNaN(data[i].NORTHERN_APP)) {
					northern_app = "NA";
				} else {
					northern_app = "$" + parseFloat(data[i].NORTHERN_APP).toFixed(2);
				}
				
				if(isNaN(data[i].ILLIOIS_BASIN)) {
					illiois_basin = "NA";
				} else {
					illiois_basin = "$" + parseFloat(data[i].ILLIOIS_BASIN).toFixed(2);
				}
				
				if(isNaN(data[i].POWDER_RIVER_BASIN)) {
					power_river_basin = "NA";
				} else {
					power_river_basin = "$" + parseFloat(data[i].POWDER_RIVER_BASIN).toFixed(2);
				}
				
				if(isNaN(data[i].UINTA_BASIN)) {
					uinta_basin = "NA";
				} else {
					uinta_basin = "$" + parseFloat(data[i].UINTA_BASIN).toFixed(2);
				}
				//rows
				
				$("#dpst_data tr:eq(0) td:eq(" + td + ")").html(central_app);
				$("#dpst_data tr:eq(1) td:eq(" + td + ")").html(northern_app);
				$("#dpst_data tr:eq(2) td:eq(" + td + ")").html(illiois_basin);
				$("#dpst_data tr:eq(3) td:eq(" + td + ")").html(power_river_basin);
				$("#dpst_data tr:eq(4) td:eq(" + td + ")").html(uinta_basin); 
			}
		}
	}
	</script>