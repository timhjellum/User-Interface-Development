<?php /* <?php $locale = 'data'; ?> */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<style>
.table_title{
	font-weight:bold;
	font-size:10pt;
	font-family:
	Arial,Helvetica
}
.table_units{
}
.group_header{
}
.row_header{
}
.datacell{
}
.super {
 	font-size: 7pt;		
}
</style>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<?php /* ****************************************************************************  */ ?>
<?php /* File Name:  showtext.php                                                      */ ?>
<?php /* Purpose:    Display the AER html pages w/ EIA's header and footer information */ ?>
<?php /* Revision date:   October 5 9, 2011                                            */ ?>
<?php /* ****************************************************************************  */ ?>

<body>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	//remove spans inside of <SUP> and add the class "super"
	$("sup span").each(function(){
		//console.info($(this).html());
		$(this).parent().html($(this).html()).addClass("super");
	});
	
	//eliminate the spans 
	
	$("td").each(function(){
		var cell_Text = '';
		console.info($(this).attr("colspan"))
		if($(this).attr("colspan")== null || $(this).attr("colspan")<5){
			$(this).children().each(function(){
				if(this.outerHTML.indexOf("<span")==1){
					cell_Text += this.innerHTML;
				}else{
					cell_Text += this.outerHTML;
				}
			});
			$(this).html(cell_Text).addClass("datacell").removeAttr('style');
		}
	});	
	
	//make sure the first line is style as a title
	$("td:first").addClass('table_title');
	
	/* add in header
	$("tr:gt(0)").each(function(){
		var leftCellContents = $(this).children("td:first").html().get(0);
		console.info("rowIndex: " + this.rowIndex)
		if(isNaN(leftCellContents.replace(/ /g,'').replace(/&nbsp;/g,'').substr(0,4))){
			console.info(leftCellContents + ": " + leftCellContents.replace(/ /g,'').substr(0,4));
			$(this).children("td").replaceWith(function(){
				return(this.outerHTML.replace(/<td/i, "<th").replace(/<\/td/i,"</th"));
			});
		}
	});
	*/
});
</script>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
<?php /* EIA Header */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php /* Navigation Menu */ ?>
<?php include ('totalenergy/includes/subnav_allsources.inc') ; ?>
<?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp3">
	  <?php /* Start of Main Column */ ?>
      <div>
	      <?php /* Start of  */ ?>
				<?php /* get file name from url string parameter */ ?>
				<?php $mytextfile = str_replace("ptb","ptb", strtolower($_REQUEST['t'])).".html"; ?>
				<?php /* set path string variable */ ?>
				<?php /* <?php $mypath ="http://www.eia.gov/totalenergy/data/annual/txt/"; ?> */ ?>
				<?php $mypath ="http://wwwdev.eia.gov/totalenergy/data/annual/txt/"; ?>
				<?php /* build full path string variable */ ?>
				<?php $myfullpath = $mypath . $mytextfile; ?>
				<?php /* debug path variable
				<p>Debug: myfullpath=<?php echo "$myfullpath"?></p>
				 */ ?>
				<?php /* display date stamp info: add on 09/09/2011 by CA2 */ ?>
				<h2>Annual Energy Review</h2><p class="dat">Release Date: October XX, 2011&nbsp; <br />Next Update: August 2012</p>
				<?php /* read html file */ ?>
		  		<?php $text_out = file_get_contents($myfullpath); ?>
				<?php /* display html content */ ?>
				<?php echo $text_out?>
	      <?php /* End of  */ ?>
	  <?php /* End of Main Column */ ?>
      </div>
	  <?php /* Comment out Side Column */ ?>
      <?php /* <div class="side_col right"> */ ?>
	  <?php /* Start of Side Column */ ?>
      <?php /* <?php include ('includes/annual_content.inc') ; ?> */ ?>
      <?php /* End of Side Column */ ?>
      <?php /* </div> */ ?>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>