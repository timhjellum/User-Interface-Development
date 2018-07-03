<?php /* 
		Release date

	9/11/2013 - Update: Change the values inside the CreateDate functions.
	CreateDate takes 3 values, the four digit year, the month, and the day.
	
	1/8/2013 - Update: Also change the value of last_year_annual_data. 
	This is used in the query  of annual data for the total energy browser. -SG
 */ ?>

<?php $a_release_date = date_create("2012-09-27"); ?>
<?php $last_year_annual_data = 2017; ?>
<?php if ( !isset($set_vars_only)) {?>

<p><?php echo date_format($a_release_date, "F Y"); ?>&nbsp;&nbsp;<a href="pdf/aer.pdf" class="ico_pdf">PDF</a>&nbsp;&#124;&nbsp;<a href="previous.php">previous editions</a><br />
Release Date: <?php echo date_format($a_release_date, "F j, Y"); ?><br /><?php /*Next Update: Suspended for 2013 (see <a href="/pressroom/releases/press386.php">press release</a>)*/ ?></p>
<?php  } // end if ?>