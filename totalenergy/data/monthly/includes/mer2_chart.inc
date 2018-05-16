 
<div class="loader"></div>
 
<script type="text/javascript" src="/global/scripts/jquery/highcharts/js/eia-theme.js"></script>
<script type="text/javascript" src="/global/scripts/jquery/highcharts/js/modules/captions.js"></script>
<script type="text/javascript"> 

<!--[if IE 7]>
<style type="text/css">
#bubble2 li {
    display: inline;
}
</style>
<![endif]-->

<script> 
$(function() {
	$('#efmi_ui').hide();
});
</script>

<script type="text/javascript">
		
$(window).load(function() {
	
var jColumn = {
	chart: {
		zoomType:'',
		renderTo: 'container_col',
		defaultSeriesType: 'column'
	},
	legend: {
            enabled: false
        },
	credits: {
		text: 'Monthly Energy Review, Table 1.1',
		href: '/totalenergy/data/monthly/pdf/sec1_3.pdf'
	},
	title: {
		text: 'Primary Energy<br>Overview,<br>February 2012',
		/*style:  {
					fontSize: '13px'
				}*/
	},
	xAxis: {
		categories: ['Production','Net Imports', 'Consumption'],
		    /*labels: {
                align: 'center',
				style:  {
					fontSize: '9px'
				}
			} */
        },
	
	yAxis: [{
		title:{
			text:'quadrillion Btu'
		},
		tickInterval: 2
	}],	
	
	captions : {
			items:[{
				text: '<a href="http://wwwdev.eia.gov/tools/glossary/?id=p#prim_energy">Primary energy</a> definition',
	/* style:{
					fontSize:'11px',
					color:'black'
				} */
			}
			]
			},
	
	
	series: [{
		name: 'primary energy',
		data: [6.280, 1.265, 8.026]
	
	},]
};

var chart_column = new Highcharts.Chart(jColumn);

});
</script>

<div id="container_col" style="width:227px; height:300px"></div>
