
<script type="text/javascript" >

$(document).ready(function(){
	$.getJSON("/electricity/monthly/update/resources/data/data_read1.php", function(data) {
		// console.log(data[0]);
		//  table header	
		  $('#table1 thead').append('<tr>'+
		  //'<th style="text-align: left">'  +    + '</th>' +
		  '<th colspan="2">' + data[0][1] + '</th>' +
		  '<th>' + data[0][2] + '</th>' +
		  '</tr>');
		
		for (var i = 1; i < data.length -1; i++) {

			
			if (i==5){
			  i= i+2;
			 }
				
			// (\d+)(\d{3}),
				 
		//	table body 
		
	    for (var j = 0; j < data[i].length; j++) {
						
			}
			
			 $('#table1 tbody').append('<tr>'+
			  '<td>'  + data[i][0] + '</td>' +
			  '<td>' + data[i][1] + '</td>' +
			  '<td>' + data[i][2] + '</td>' +
			  
			  '</tr>');	
			}

	});

});
</script>
<table>
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


