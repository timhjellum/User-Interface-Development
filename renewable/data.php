<?php $locale = 'data'; ?>
<?php  if(!isset($no_titling))include("global/includes/titling.inc"); ?>
<?php /*cfinclude template="/global/includes/no_cache_headers.cfm"*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<script type="text/javascript">
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) {
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
</script>

<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/gallery.prefixed.css" />
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/gallery_fixes.css" />
<link rel="stylesheet" type="text/css" href="/global/includes/issuestrends/css/styles_mv.css" />

</head>
<body>
<?php /* Start of Outer Wrapper */ ?>
<div id="outerX">
  <?php /* EIA Header */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php /* Navigation Menu */ ?>
      <?php include ('includes/subnav_renewable.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
        <?php /* Start of Main Column */ ?>
        <div class="main_col">
 
        </div>
        <div class="side_col right">
          <?php /* Start of Side Column */ ?>
          <?php include ('includes/side_data.inc') ; ?>
          <?php /* End of Side Column */ ?>
        </div>
      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ End of Outer Wrapper */ ?>
</body>
</html>
