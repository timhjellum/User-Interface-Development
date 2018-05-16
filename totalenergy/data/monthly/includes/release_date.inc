<?php /* 
	Release date
	9/11/2013 - Update: Change the values inside the CreateDate functions.
	CreateDate takes 3 values, the four digit year, the month, and the day.
 */ ?>
<?php $m_release_date = date_create("2018-04-26"); ?>
<?php $next_m_release_date = date_create("2018-05-24"); ?>
<?php if ( !isset($set_vars_only)) {?>
<p>
<?php echo date_format($m_release_date, "F Y");?>&nbsp;&nbsp;<a href="pdf/mer.pdf" class="ico_pdf">PDF</a>&nbsp;&#124;&nbsp;<a href="previous.php">previous editions</a><br />
Release Date: <?php echo date_format($m_release_date, "F j, Y");?><br />
<?php /* Revision notice for February 2016 release */ ?>
<?php /*Revised: February 25, 2016 (<a class="lightbox" href="revision_notice.php">revision</a>)<br />*/ ?>
Next Update: <?php echo date_format($next_m_release_date, "F j, Y");?>
</p>
<?php  } // end if ?>