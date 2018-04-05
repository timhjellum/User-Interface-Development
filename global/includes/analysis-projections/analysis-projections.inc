<!-- script type="text/javascript" src="/global/scripts/highlighted_ap.js"></script -->
<?php
require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
$curOVPref = str_replace("ovPref=","",$_SERVER['QUERY_STRING']);
//echo  $curOVPref;

$neic->sql = "select * from
							(
							select TITLE, RELEASE_DATE, PERIODICITY, HAS_ANALYSIS, HAS_DATA, HAS_FORECAST, LINK_HTML, 'HL' as RPT_CATEGORY,
								   listagg(TAGID, ',') within group (order by tag asc) as reporttags,
								   listagg(TAG, ',') within group (order by tag asc) as reporttagnames
							  from
								(
								SELECT	distinct TITLE,RELEASE_DATE,PERIODICITY,HAS_ANALYSIS,HAS_DATA,HAS_FORECAST,LINK_HTML,
								  t.ID as TAGID, t.TAG
								FROM 
								  NEIC.BS_REPORTS r
								  join 
								  NEIC.BS_HIGHLIGHTED_REPORTS hlr
								    on r.id = hlr.report_id
								  join NEIC.BS_TAGS_LU lu
								    on lu.report_id = r.id
								  join NEIC.BS_TAGS t 
								    on lu.tag_id = t.id
								WHERE lower(r.VERSION) in ( 'current', 'pastissue')
								 AND  r.RELEASE_DATE IS NOT NULL
								 AND  hlr.L2_ID = :l2id
								)
							  group by TITLE, RELEASE_DATE, PERIODICITY, HAS_ANALYSIS, HAS_DATA, HAS_FORECAST, LINK_HTML
							  order by RELEASE_DATE desc
							)
				where rownum < 6
				UNION ALL
				SELECT * FROM (
					select RPTS.TITLE, RPTS.RELEASE_DATE, RPTS.PERIODICITY, RPTS.HAS_ANALYSIS, RPTS.HAS_DATA,
						   RPTS.HAS_FORECAST, RPTS.LINK_HTML, 'AP' RPT_CATEGORY,
						   listagg(TAGS.ID, ',') within group (order by TAGS.TAG asc) as reporttags,
						   listagg(TAGS.TAG, ',') within group (order by TAGS.TAG asc) as reporttagnames
					from (
							SELECT	distinct TITLE,RELEASE_DATE,PERIODICITY,HAS_ANALYSIS,HAS_DATA,
									HAS_FORECAST,LINK_HTML, r.ID
							FROM  
							    NEIC.BS_REPORTS r
							    join NEIC.BS_TAGS_LU lu
							        on r.id = lu.report_id
							    join NEIC.BS_TAGS t
							        on lu.tag_id = t.id
							WHERE t.L2_ID =  :l2id
							 AND  lower(r.VERSION) in ( 'current', 'pastissue')
							 AND  r.RELEASE_DATE BETWEEN ADD_MONTHS(SYSDATE, -6) AND SYSDATE
							 AND (r.HAS_DATA = 'Y' or r.HAS_ANALYSIS = 'Y' or r.HAS_FORECAST = 'Y')
							ORDER BY r.RELEASE_DATE DESC
						 ) RPTS, NEIC.BS_TAGS TAGS, NEIC.BS_TAGS_LU TLU
					where RPTS.ID = TLU.REPORT_ID
					 AND TLU.TAG_ID = TAGS.ID
					group by RPTS.TITLE, RPTS.RELEASE_DATE, RPTS.PERIODICITY, RPTS.HAS_ANALYSIS, RPTS.HAS_DATA,
							 RPTS.HAS_FORECAST, RPTS.LINK_HTML
					order by RELEASE_DATE desc)
				WHERE ROWNUM < 6";
$bindVariables = array(
    "l2id" => $l2id
);
//print $neic->sql;

$recent_AP = $neic->get($bindVariables);
//print_r($recent_AP);

?>
<div class="content-container">
    <h1>Analysis &amp; Projections</h1>
    <span id="overviewSideNavOptions">
        <label id='ov_ap' name='ov_ap' value="ap" class="rpt_category active">Recent</label>
        <span class="v_divider">&nbsp;|&nbsp;</span>
        <label id='ov_hl' name='ov_hl' value="hl" class="rpt_category">Highlighted Reports</label>
    </span>
    <form id="ovFrm" name="ovFrm">
        <input type="hidden" id='ovPref' name='ovPref' value="ap">
    </form>

    <ul class="analysis-projections">
	<?php
	$rptCnt = 10;	
	foreach($recent_AP as $row) {
		$DataTypesArray = [];
		$filename = "";
		if(strtolower($row['has_data']) == "y"){
			$DataTypesArray[] = "Data";
			$filename .= "d";
		}
		if(strtolower($row['has_analysis']) == "y"){
			$DataTypesArray[] = "Analysis";
			$filename .= "a";
		}
		if(strtolower($row['has_forecast']) == "y"){
			$DataTypesArray[] = "Forecast";
			$filename .= "p";
		}

		$TitleText = "Report Type";
		if(count($DataTypesArray)>1)
			$TitleText .= "s";

		$TitleText .= ": ";

		$count=count($DataTypesArray);
		for($x=0;$x<$count;$x++){
			$TitleText .= $DataTypesArray[$x];
			if($x<$count-1)
				$TitleText .= ", ";
		}

		echo '<li data_value="' . $row['rpt_category'] . '"><img src="/global/images/icons/dap/';
		if(strtolower($row['has_data']) == "y") {
			echo 'd';
		}
		if(strtolower($row['has_analysis']) == "y") {
			echo 'a';
		}
		if(strtolower($row['has_forecast']) == "y") {
			echo 'p';
		}
		echo '.png" title="' . $TitleText . '"/>';

		echo PHP_EOL;
		echo '<div><h2>';

		echo PHP_EOL;

		if(strlen($row['link_html']))
			echo "<a href=\"".$row['link_html']."\">".$row['title']."</a>";
		else
			echo $row['title'];

		echo PHP_EOL;
		echo '</h2>';
		echo PHP_EOL;
		echo "<em>Released ".date('F d, Y',strtotime($row['release_date']))."</em>&nbsp;|";
		echo PHP_EOL;

		$thetags = $row['reporttags'];
		$thetagnames = $row['reporttagnames'];
		$thetitle = $row['title'];
		$thelink = $row['link_html'];

		//		include "css_rehab/archive/global/includes/analysis-projections/tags.inc";
		//		include "css_rehab/archive/global/includes/";
		include('./tags.inc');
		echo "</div>";
		echo PHP_EOL;

		echo "</li>";
		echo PHP_EOL;
		$rptCnt++;
	}
	?>

		<li class="foot"><a href="reports.php">See more analysis &amp; projections</a></li>
	</ul>
</div>
<!--	window.scrollTo(300,500);-->
