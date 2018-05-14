<?php
$no_titling = true;
include_once ('global/includes/eia_head_info.inc');
?>
<!--Electricity Monthly Update table for Electricity L2 page
    file reads the monntly update Key indicators  CSV file-->
<script type="text/javascript" >

$(document).ready(function(){
	$.getJSON("/electricity/monthly/update/resources/data/data_read1.php", function(data) {
		// console.log(data[0]);
		//  table header	
		  $('#table1 thead').append('<tr>'+
		  //'<th style="text-align: left">'  +    + '</th>' +
		  '<th style="text-align:right" colspan="2">' + data[0][1] + '</th>' +
		  '<th style="text-align:right">' + data[0][2] + '</th>' +
		  '</tr>');
		
		for (var i = 1; i < data.length -1; i++) {

			
			if (i==5){
			  i= i+2;
			 }
				
			// (\d+)(\d{3}),
				 
		//	table body 
		
		$('#table1 tbody').append('<tr class="sectionhead">' + '</tr> ');
	    for (var j = 0; j < data[i].length; j++) {
						
			}
			
			 $('#table1 tbody').append('<tr>'+
			  '<td style="text-align: left">'  + data[i][0] + '</td>' +
			  '<td style="text-align:right">' + data[i][1] + '</td>' +
			  '<td style="text-align:right">' + data[i][2] + '</td>' +
			  
			  '</tr>');	
			}

	});

});
</script>
<table id="table1" class="basic_table" width="100%" valign="top">
	<caption>Key Indicators</caption>
	<thead></thead>
	<tbody></tbody>
              <tfoot>
	<tr>
              <td colspan="3"><b>Source:</b> <a href="/electricity/monthly/update/">Electricity Monthly Update</a>.
              </td>
            </tr>
	</tfoot>
</table>


