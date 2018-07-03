<?php include ('energy_perspectives_config.php') ; ?>

<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();

?>
<?php if ( isset($_REQUEST['debug'])) {?>
	<?php $debug = true; ?>
<?php  } else { ?>
	<?php $debug = false ; ?>
<?php  } // end if ?>
<?php $chartNumber = ""; ?>
<?php if ( isset($_REQUEST['epg'])) {?>
  <?php $graph = $aGraphs[$_REQUEST['epg'] - 1]; ?>
  <?php $chartNumber = $_REQUEST['epg']; ?>
<?php } else if(isset($_REQUEST['graphmsn'])){ ?>
  <?php $graph = $_REQUEST['graphmsn']; ?>
<?php  } else { ?>
	<?php exit(); ?>
<?php  } // end if ?>
<?php /*Special Cases*/ ?>
<?php switch ($graph) {
	case "F0208a":
		/*<?php $indexLine = true /; ?>*/
		$boldHundredPercent = true;
		break;
	case "P_05":
		$stackedAreaChart = true;
		break;
	case "F0601a":
		$negativeBase = true;
		break;
	case "F0701c":
		$oneDecimalPlace = true;
		$boldHundredPercent = true;
		break;
	case "F0810d":
		$twoDecimalPlaces = true;
		break;
	case "F0521b":
		$twoDecimalPlaces = true;
		break;
	case "F0706b":
		$twoDecimalPlaces = true;
		break;
	case "F0708a":
		$twoDecimalPlaces = true;
		break;
	case "F0105c":
		$twoDecimalPlaces = true;
		break;
	case "F0901a":
		$wholeNumbers = true;
		break;
	case "F0517d":
		$wholeNumbers = true;
		break;
	case "F0105d":
		$wholeNumbers = true;
		break;
	case "F0608a":
		$wholeNumbers = true;
		break;
} /* end switch */
?>
	<?php /*<?php  case "F0605a":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F1201c":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F1207c":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F1207e":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F0201bc":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F0502c":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F0511a":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F0501bd":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F0504a":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>
	<?php  case "F0504d":?>
		<?php $wholeNumbers = true /; ?>
	<?php break; ?>*/ ?>
<?php /* Additional Special Case */ ?>
<?php if ( preg_match('F0201bc|F0502c|F0511a|F0501bd|F0504a|F0504c|F0504d|F0605a|F0608a|P_44|F0809c|F1202c|F1207c|F1207e', $graph)) {?>
	<?php $yAxisDecimal = true ; ?>
<?php  } // end if ?>
<?php if ( preg_match('F0524a|F0810d', $graph )) {?>
	<?php $yAxisDecimalExport = true ; ?>
<?php  } // end if ?>
<?php
	function prepareText($in){
		$ret = preg_replace("'", "\'", $in );
		$ret = preg_replace('<sub; ?>(\s*)2(\s*)<\/sub>', '\1₂\2', $ret);
		$ret = preg_replace('<sub; ?>(\s*)5(\s*)<\/sub>', '\1₅\2', $ret );
		$ret = preg_replace('<sub; ?>(\s*)6(\s*)<\/sub>', '\1₆\2', $ret);
		$ret = preg_replace('<sup; ?>(\s*)4(\s*)<\/sup>', '\1⁴\2', $ret);
		$ret = preg_replace('<sub; ?>(\s*)X(\s*)<\/sub>', '\1<span style="font-size:.5em;">X</span>\2', $ret);
		$ret = preg_replace('&mdash;', '—', $ret);
		return $ret;
	}
?>

<?php
	$bindVariables = array();
	$neic->sql = "select * from NEIC.AER_GRAPHS where Graph = :graph";
	$bindVariables[':graph'] = $graph;
	$EPGraph = $neic->get($bindVariables)[0];


	$neic->sql = "select ags.TITLE, ASH.TITLE as fullname, ags.PUB_UNIT, DB2PUB, nvl(sc.SCALE,1) AS SCALOR, asd.* 
    from NEIC.AER_GRAPH_SERIES ags, NEIC.AER_SERIES_DATA asd, NEIC.AER_SERIES_SCALE sc, NEIC.AER_SERIES_HEADER ash
    where ags.msnName=asd.msnName and ASH.MSNNAME(+) = ASD.MSNNAME and ags.Graph = :graph
    and ags.MSNNAME = sc.MSNNAME (+) and ags.GRAPH = sc.GRAPH (+) 
    order by Column_Num";
	$EPGraphData = $neic->get($bindVariables);
	$neic->sql = "select TEXT, NOTES, SOURCE from NEIC.AER_ENERGY_PERSPECTIVES 
    where Graph = :graph and PUB_YEAR = :spubyear";
	$bindVariables[":spubyear"] = $sPub_Year;
	$EPText = $neic->get($bindVariables);
?>
<?php $aGraphDataColumns = array_keys($EPGraphData[0]); ?>
<script language="javascript">
 
var chart;   
function makeChart(){
	var createExportOptions = function(){
		var noteSize = 10;
		var textSize = 12;
		var creditsSize = 10;
		var spacing = creditsSize * 1.5;
		var textWidth = 850;
		
		var ret1 = {
			title:{
				style:{
					fontSize:'15px'
				}
			},
			yAxis : {
				title : {
					x : chart.options.yAxis[0].title.margin / -10
				}
				<?php if ( isset($yAxisDecimalExport)) {?>
				,labels:{
					formatter:function(){
						return this.value.toFixed(1);
					}
				}
				<?php  } // end if ?>
			},
			chart:{
				height : 400 + spacing,
				spacingBottom : spacing
			},
			credits:{
				text:chart.options.credits.text.replace(/<\s*a[^>]*>([^<]+)<\s*\/\s*a\s*>/g, '$1'),
				style:{
					fontSize:creditsSize
				},
				position: {y: -1 * spacing + creditsSize * 1.5}
			}
		}
		return ret1;
	};
	 jschart = {
		chart: 
		{ 
			height:400,
			renderTo: 'HighChartsDiv',
			zoomType: 'xy'
			<?php if ( isset($stackedAreaChart)) {?>
				,defaultSeriesType:'area',
			<?php  } // end if ?>
		},
		<?php if ( isset($stackedAreaChart)) {?>
				plotOptions:{
					area:{
						stacking:'normal'
					}
				},
			<?php  } // end if ?>
		tooltip: {
        	formatter: function() {
				var xDate = new Date(this.x);
				var iDate = xDate.getFullYear();
				//eliminate 0 and insert commas
				var sy = parseInt(this.y);
				<?php if ( !isset($oneDecimalPlace) && !isset($twoDecimalPlaces) && !isset($wholeNumbers)) {?>
				if(sy<100){
					sY = (Math.round(this.y * 1E3) / 1E3).toFixed(3);
				} else {
					sY = (Math.round(this.y * 1E2) / 1E2).toFixed(2);
				}
				<?php  } else { ?>
					<?php if ( isset($wholeNumbers)) {?>
						sY = Math.round(this.y);
					<?php } else if(isset($oneDecimalPlace)) { ?>
						sY = (Math.round(this.y * 1E1) / 1E1).toFixed(1);
					<?php } else if(isset($twoDecimalPlaces)){ ?>
						sY = (Math.round(this.y * 1E2) / 1E2).toFixed(2);
					<?php  } // end if ?>
					
				<?php  } // end if ?>
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(sY)) {
					sY = sY.replace(rgx, '$1' + ',' + '$2');
				}
				return '<b>' + this.series.name + '</b><br/>' +
				'<b>' + iDate + ': '+ sY +' <?php echo $EPGraph['ytitle']; ?></b>';
			}
		},
		credits: {
        	enabled: true,
			text:'<a href="/totalenergy/data/annual/">U.S. Energy Information Administration, <i>Annual Energy Review</i>,</a> <?php echo $EPText['source']; ?>',
			href:null
		},
		title: {
			text: '<?php echo $debug ? "(".$graph.")"." ".($ERGraph['title']) : $chartNumber." ".($EPGraph['title']); ?>'
    	},
		legend :{
			enabled: <?php echo count($EPGraphData) > 1 ? 'true' : 'false'; ?>
		},
       // subtitle: {
       //		text: '<?php echo prepareText($EPGraphData['pub_unit']);?>'
       // }, 
		series: [
		<?php $rowCount = 0; ?>
	<?php foreach($EPGraphData as $data){ ?>

      <?php if ( $rowCount != 0) {?>,<?php  } // end if ?>
            {
                name: '<?php echo $debug ? prepareText($data['title'])." ".$data['msnname'] : $data['title'] ?>',
    			description: '<?php echo $data['fullname'] ;?>',
				id: '<?php echo $data['msnname'] ;?>',
                data: [
      <?php $firstDatapoint = true; ?>
      <?php for($i=0; $i <=count($aGraphDataColumns); $i++){ ?>
        <?php /* test the output and replace with routine to write data series */ ?>
		<?php /* Ryan: Added Start Year Check */ ?>
        <?php if ( is_numeric($aGraphDataColumns[$i]) && intval($aGraphDataColumns[$i]) >= intval($EPGraph['startyear'])) {?>
					<?php if ( $EPGraphData[$rowCount][$aGraphDataColumns[$i]] != 999999999999 && ($EPGraphData[$rowCount][$aGraphDataColumns[$i]] != 0 || $EPGraphData['msnname'] == "PAIMPIQ/DAYSINYEAR") || !$firstDatapoint ) {?>

					<?php if ( $firstDatapoint) {?><?php $firstDatapoint = false; ?><?php  } else { ?>,<?php  } // end if ?>
						<?php if ( $EPGraphData[$rowCount][$aGraphDataColumns[$i]] != 999999999999 && ($EPGraphData[$rowCount][$aGraphDataColumns[$i]] != 0 || $EPGraphData['msnname'] == "PAIMPIQ/DAYSINYEAR")) {?>
					[Date.UTC(<?php echo $aGraphDataColumns[$i]; ?>, 1, 1), <?php echo $EPGraphData[$rowCount][$aGraphDataColumns[$i]] ;?>/(<?php echo $data['db2pub'] ;?>*<?php echo $data['scalor'] ;?>)]
				<?php  } else { ?>
				 [Date.UTC(<?php echo $aGraphDataColumns[$i] ;?>, 1, 1), null]
				<?php  } // end if ?>
			<?php  } // end if ?>
        <?php  }  ?>
      <?php } ?>
                ]
            }
    <?php $rowCount++; } ?>
        ],
		xAxis: {
			type: 'datetime',
			maxZoom: 10 * 365* 24 * 3600 * 1000
			<?php /*<?php if ( isset($1)) {?>
				,plotLines:[{
					value:Date.UTC(1949, 1, 1)
				}]
			<?php  } // end if ?>*/ ?>
		},
		yAxis: {
			title:  {
        		text: '<?php echo ($EPGraph['ytitle']) ;?>',
				align:'above',
				style: {
					color: 'black'
				}
    		},
			<?php if ( isset($yAxisDecimal)) {?>
			labels:{
				formatter:function(){
					return this.value.toFixed(1);
				}
			},
			<?php  } // end if ?>
			<?php if ( isset($negativeBase)) {?>
			min:null
			<?php  } else { ?>
			min: 0
			<?php  } // end if ?>
			//maxZoom: 48 * 3600 * 1000
			<?php if ( isset($boldHundredPercent)) {?>
				,plotLines:[{
					value:100,
					color:'#c0c0c0',
					width:2
				}]
			<?php  } // end if ?>
			<?php if ( isset($negativeBase)) {?>
				,plotLines:[{
					value:0,
					color:'#c0c0c0',
					width:2
				}]
			<?php  } // end if ?>
		},
		exporting : {
			filename: 'Energy_Perspectives_<?php echo $chartNumber ;?>',
			buttons:{
				exportButton: {
					menuItems: [{
						  text: 'Download Image as PNG',
						  onclick: function(){
							this.exportChart({url:'/global/scripts/jquery/highcharts/exporting-server/index.php', type: 'image/png'});
						  }
						},
						{
						  text: 'Download Image as SVG',
						  onclick: function(){
							this.exportChart({url:'/global/scripts/jquery/highcharts/exporting-server/index.php', type: 'image/svg+xml'});
						  }
						},
						{
						  text: 'Download Document as PDF',
						  onclick: function(){
							this.exportChart({url:'/global/scripts/jquery/highcharts/exporting-server/index.php', type: 'application/pdf'});
						  }
						},
						{
						  text: 'Download Charts and Data as XLS',
						  onclick: function() { window.open('EnergyPerspectives.xls'); }
						}]
				},
				printButton:{
					enabled: false
					/*,
					onclick:function(){
						var chart = this,
							container = $(chart.container).closest('#outerShowGraphDiv').get(0),
							origDisplay = [],
							origParent = container.parentNode,
							body = document.body,
							childNodes = body.childNodes;
							
						if (chart.isPrinting) { // block the button while in printing mode
							return;
						}
						
						chart.isPrinting = true;
						
						// hide all body content	
						jQuery.each(childNodes, function (i, node) {
							if (node.nodeType === 1) {
								origDisplay[i] = node.style.display;
								node.style.display = 'none';
							}
						});
							
						// pull out the chart
						body.appendChild(container);
						 
						// print
						window.print();		
						
						// allow the browser to prepare before reverting
						setTimeout(function () {

							// put the chart back in
							origParent.appendChild(container);
							
							// restore all body content
							jQuery.each(childNodes, function (i, node) {
								if (node.nodeType === 1) {
									node.style.display = origDisplay[i];
								}
							});
							
							chart.isPrinting = false;
							
						}, 1000);
					}*/
				}
			}
		}, 
		captions : {
			<?php if ( count($EPText) == 1) {?>
			items:[{
				text:'<?php echo prepareText($EPText['notes']) ;?>',
				style:{
					fontSize:'10px',
					lineHeight:'1.5em',
					color:'black'
				}
			},{
				text:'<?php echo prepareText($EPText['text']) ;?>',
				style:{
					fontSize:'13px',
					color:'black'
				}
			}]
			<?php  } // end if ?>
		}
	}
   chart = new Highcharts.Chart(jschart);
   chart.renderer.buildText('<?php echo preg_replace("'","\'", $EPText['notes']); ?>', chart.renderer.text('', 0, 0)).add();
	
}


function xlsDownload(){
	alert('download xls');
	$('#ep_excel').trigger();
}
</script>