// JavaScript Document
		function InsertMERCode() {
		$(document).ready(function() {
			var options = {
				chart: {
					renderTo: 'container',
					defaultSeriesType: 'column'
				},
				legend: {
            enabled: false
        },
				credits: {
		text: 'Monthly Energy Review, Table 1.1',
		href: '/totalenergy/data/monthly/pdf/sec1_3.pdf'
	},
				
		captions : {
			items:[{
				text: '<a href="http://wwwdev.eia.gov/tools/glossary/?id=p#prim_energy">Primary energy</a> definition'
	
			}
			]
			},	
				
				
				title: {
					text: 'Primary Energy<br>Overview,<br>October 2013'
				},
				xAxis: {
					categories: []
				},
				yAxis: {
					title: {
						text: 'quadrillion Btu'
					}
				},
				
					plotOptions: {
            series: {
               // groupPadding: 0
			   pointWidth: 40,
			   
            }
        },
				series: []
			};
						
			$.get('/totalenergy/data/monthly/includes/primary2.csv', function(data) {
				// Split the lines
				var lines = data.split('\n');
				$.each(lines, function(lineNo, line) {
					var items = line.split(',');
					
					// header line containes categories
					if (lineNo == 0) {
						$.each(items, function(itemNo, item) {
							if (itemNo > 0) options.xAxis.categories.push(item);
						});
					}
					
					// the rest of the lines contain data with their name in the first position
					else {
						var series = { 
							data: []
						};
						$.each(items, function(itemNo, item) {
							if (itemNo == 0) {
								series.name = item;
							} else {
								series.data.push(parseFloat(item));
							}
						});
						
						options.series.push(series);

					}
					
				});
				
				var chart = new Highcharts.Chart(options);
			});
			
			
		});
		}