<?php
/**
 * Created by PhpStorm.
 * Updated: 10/11/17
 * Time: 2:30 PM
 */
require_once ('classes/DataService.inc');

$DataService = new DataService();
$sectionname = isset($sectionname) ? $sectionname : '';

$allAvailableTags = $DataService->getAllAvailableTags();
$categories = $DataService->getFilteredTags();
$frequencyTags = $DataService->getFrequencyTags();
if ($l2id!==-1)
	$L2tagId = $DataService->getL2TagsArr($l2id);
else
	$L2tagId = '';

?>
	<script>
		var allAvailableTags = <?php echo json_encode($allAvailableTags); ?>;
        var frequencyTags = <?php echo json_encode($frequencyTags); ?>;
		var tagCategories = <?php echo json_encode($categories); ?>;
		var sectionname = "<?php echo $sectionname; ?>";
		var L2tagId =  <?php echo json_encode($L2tagId); ?>;
		var l2id =  <?php echo $l2id; ?>;
		<?php
			/* override function for displaying report ID in row to provide an edit link for OPS team */ 
			if(strpos($_SERVER['HTTP_HOST'], 'wwwdev') > -1 or strpos($_SERVER['HTTP_HOST'], 'wwwtest') > -1) {
		?>
		function formatReportID(report) {
			return $('<em>(id=' + report.id + ')</em> ... <em><a href="/global/admin/bookshelf/index.cfm?action=report.edit&IDReport=' + report.id + '">edit</a></em>');
		}
		<?php } 
			/* Since the tag names are not provided via Ajax, create an object that can be accessed like an associative array - 
			 * For use by both jqHXR.done() in ajaxCall(), and by createTag().
			 */ ?>

	</script>

<div class="pagecontent temp_rpt">
	<?php
		if ($L2T!='All Reports & Publications') {
			/* Top Feature Results */
			include("global/includes/sub_feature_sql.inc");
			/* Top Feature Results */
		}
	
		/* Everything after the subnav menu */
		include("bookshelf_results.html");
	?>
</div>
<br>
