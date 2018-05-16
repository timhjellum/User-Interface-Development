<?php /* ///////////////////////////////////////// */ ?>
<?php /* File Scrub - TOTAL ENERGY - ANNUAL        */ ?>
<?php /* ///////////////////////////////////////// */ ?>

<script>
$(function(){
            var rowNum=0; //iterator
            var headerRows = new Array(); //row number that contain the header
            var newHeader = '<thead>';
            //Finds the header rows
            /*($('table.tpl tr').each(function(rowNum){
                var isHeaderRow = true;
                $(this).children().each(function(){
                  return isHeaderRow = isNaN(parseInt($(this).text().replace(/[,A-Za-z]/g))) && $.trim($(this).text()) != ''; 
                });
                if(isHeaderRow) headerRows.push(rowNum);
                return isHeaderRow;
            });*/
			var headerSpan = parseInt($('table.tpl tr:eq(1) td:eq(0)').attr('rowspan'), 10);
			
			for(var i = 1; i <= 1 + headerSpan; i++) headerRows.push(i);
            //Construct new header
            if(headerRows.length > 0){
                for(var i=0; i<headerRows.length; i++){
                    var originalRow = $('table.tpl tr').eq(i).html();
                    newHeader += '<tr>'+originalRow.replace(/<td/gi,'<th').replace(/td>/gi,'th>')+'</tr>';
                }
                newHeader += '</thead>';
            }

            //delete the original header
            for(var i=headerRows.length-1; i>-1; i--){
                $('table.tpl tr').eq(i).remove();
            }
            //prepend the new header to the table
            $('table.tpl').prepend(newHeader);
            
            $('table.tpl > tbody > tr').not(':last-child').each(function(rowNum){
                isOtherHeader = false;
                $(this).children().each(function(){
                  isOtherHeader = $(this).attr('colspan') > 1;
                  return !isOtherHeader;
                });
                if(isOtherHeader){
                  $(this).children().each(function(){
                    $(this).css({
                      border: '1px solid #ccc',
                      textAlign: 'left',
                      fontWeight: 'bold'
                    });
                  });
                }
            });
	  
    });
</script>

<style>
table.tpl {
	width: 100%;
}
.tpl tbody tr:last-child  {
  border-top: 2px solid #189BD7;
}
.tpl > tbody tr:first-child {
    border-top: 2px solid #189BD7;
}
.tpl .double-header th[colspan]{
	border-bottom: 1px solid #ccc;
	border-right: 6px solid #fff;
	text-align: left;
}
.tpl th[colspan]{
	border: 1px solid #ccc;
	/*border-right: 6px solid #fff;*/
	text-align: left;
}
sup,sub {height: 0; line-height: 1; vertical-align: baseline; _vertical-align: bottom; position: relative;}
sup {bottom: 1ex;}
sub {top: .5ex;}
/*.tpl th[colspan]:last-child{
	border-right:none;
}*/
.basic_table tr th, .basic_table tr td {
	padding-left: 5px;
	padding-right: 5px;
	font-size: 10px;
}
.tplfooter tr td{font-size:9px;font-style: italic;padding:0px 0px 0px 0px;margin:0px;text-align:left; border: none;}
.tplfooter br {content: ' '}
.tplfooter br:after {content: ' '}
.category_cell button, .value_cell button {
  background-color: transparent;
  border: medium none;
  color: #189BD7;
  cursor: pointer;
  padding: 0px;
  min-height: 20px;
}
.category_cell button:hover, .value_cell button:hover {
	text-decoration: underline;
}
.category_cell button.graph_button, .value_cell button.graph_button {
  margin-left:-2px;
}
.category_cell button.graph_button span, .value_cell button.graph_button span {
	background: url("/global/images/icons/sprites/icon-sprites.png") no-repeat scroll -2px -4px transparent !important;
	width: 20px;
	display: block;
	float: right;
}
.category_cell button.graph_button:hover span, .value_cell button.graph_button:hover span {
	background: url("/global/images/icons/sprites/icon-sprites.png") no-repeat scroll -32px -4px transparent !important;
}
.category_cell button.clear_button {
	margin-left: 8px;
}
.category_cell button.clear_button span {
	background: url("/global/images/icons/remove.png") no-repeat scroll 4px 1px transparent;
	width: 20px;
	display: block;
	float: right;
}
.category_cell button.clear_button:hover span {
	background: url("/global/images/icons/remove_over.png") no-repeat scroll 4px 1px transparent;
}
.tpl tbody tr:hover td {
	background-color: #DFF2FB;
}
.tpl tbody tr:last-child:hover td {
	background-color: transparent;
}

</style>
<?php /* UDF for stripping tags */ ?>
<?php include ('global/scripts/udf/tagStripper.php') ; ?>

<?php $ContentMarker = "<body; ?>" ?>
<?php /*cfset Endsummary = "</body>"*/ ?>

<div style="background-color:#fff;margin:0 auto;">
<?php /*<cffile file=$ExpandPath('/totalenergy/data/annual/txt_bk/ptb0409.html') variable=fileX action=read>*/ ?>
	<?php
	if(isset($_REQUEST['t']) && $_REQUEST['t']) {
		?>
		<?php $fileName = str_replace("ptb", "ptb", strtolower($_REQUEST['t'])); ?>
		<?php $fileX = file_get_contents('totalenergy/data/annual/txt/' . $fileName . ".html", FILE_USE_INCLUDE_PATH); ?>
		<?php $fileX = str_replace('�', '-', $fileX); ?><?php /* fix for dashed values */ ?>
		<?php $fileX = preg_replace('/' . preg_quote("<table", '/') . '/', '<table class="basic_table tpl"', $fileX, 1); ?>
		<?php $fileX = str_replace('bgcolor = "#f0f0f0"', '', $fileX); ?>
		<?php $fileX = str_replace('align="left"', '', $fileX); ?>
		<?php $fileX = str_replace('align="right"', '', $fileX); ?>
		<?php $fileX = str_replace('align="center"', '', $fileX); ?>
		<?php /*<?php $fileX = '$replace(filex, '<table border=0 cellspacing=20 WIDTH="100%">', '<table border=0 cellspacing=20 WIDTH="100%" class="tplfooter">', "all")'; ?>*/ ?>
		<?php $fileX =
			str_replace('<table border="0" cellspacing="0" width="100%">',
			            '<table border="0" cellspacing="0" width="100%" class="tplfooter">',
			            $fileX); ?>
		<?php /*cfset fileX = '#replace(filex, '<tr><td', '<thead><tr><th')#'>
<?php $fileX = '$replace(filex, 'td></tr>', 'th></tr><thead>')'*/; ?>
		<?php $fileX = tagStripper($fileX, 'preserve', 'span,div,html,head,meta,body,!DOCTYPE'); ?>
		<?php $fileX = str_replace('>Table', ' style="border:1;">Table', $fileX); ?>  <!--- Table header --->
		<?php echo $fileX; ?>
		<?php
	}
	?>
</div>
