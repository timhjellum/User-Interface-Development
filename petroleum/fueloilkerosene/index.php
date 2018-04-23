<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Fuel Oil and Kerosene Sales - Energy Information Administration</title>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>


<body>
<?php /* BEGIN Outer Wrapper */ ?>
<div id="outerX">
  <?php include ('global/includes/eia_header.inc') ; ?>
<?php include ('petroleum/includes/subnav_petroleum.inc') ; ?>
  
      <?php $headtitle = 'Fuel Oil and Kerosene Sales'; ?>
      <?php $data_series = 'With Data for 2016'; ?>
      <?php $release = 'December 19, 2017'; ?>
      <?php $next = 'December 2018'; ?>
  
      <?php /* Report Title Treatment #1 */ ?>
      <?php include ('includes/foks_selector.inc') ; ?>

      <?php /* BEGIN Page/Body Content */ ?>
	  <div class="pagecontent mpub_temp">

        <?php /* BEGIN Main Column */ ?>
      <div class="main_col">

        <p>
        The <em>Fuel Oil and Kerosene Sales 2016</em> report provides information, illustrations, and State-level statistical data on end-use sales of kerosene; No.1, No. 2, and No. 4 distillate fuel oil; and residual fuel oil. State-level kerosene sales include volumes for residential, commercial, industrial, farm, and all other uses. State-level distillate sales include volumes for residential, commercial, industrial, oil company, railroad, vessel bunkering, military, electric utility, farm, on-highway, off-highway construction, and other uses. State-level residual fuel sales include volumes for commercial, industrial, oil company, vessel bunkering, military, electric utility, and other uses. 

        </p>



        <p>
          The Office of Petroleum and Biofuels Statistics ensures the accuracy, quality, and confidentiality of the published data in the <em>Fuel Oil and Kerosene Sales 2016</em>.

        </p>

 

        <table class="zebra" width="100%">

          <tr>
            <th colspan="2"><strong>Overview</strong></th>
          </tr>
          <tr>
            <td>Fuel Oil and Kerosene Sales 2016</td>
            <td><a href="/petroleum/fueloilkerosene/pdf/foks.pdf" class="ico_pdf">PDF</a></td>
          </tr>


          <tr>
            <td>Survey Form EIA-821, "Annual Fuel Oil and Kerosene Sales Report"</td>
            <td><a href="/petroleum/fueloilkerosene/pdf/survey.pdf" class="ico_pdf">PDF</a></td>
          </tr>

          <tr>
            <td>Survey Form EIA-821, Instructions</td>
            <td><a href="/petroleum/fueloilkerosene/pdf/instructions.pdf" class="ico_pdf">PDF</a></td>
          </tr>

          <tr>
            <td>Survey Form EIA-821, Line-By-Line Reference Guide</td>
            <td><a href="/petroleum/fueloilkerosene/pdf/reference_guide.pdf" class="ico_pdf">PDF</a></td>
          </tr>

        </table>



        <h4>Contacts</h4>

        <p>
          <strong>Robert Merriam</strong>, <a href="mailto:Robert.Merriam@eia.gov">Robert.Merriam@eia.gov</a>, (202) 586-4615, Director, Office of Petroleum and Biofuels Statistics, Office of Energy Statistics.<br><br>

          Detailed, technical questions may be directed to <strong>Daniel Walzer</strong>, <a href="mailto:Daniel.Walzer@eia.gov">Daniel.Walzer@eia.gov</a>, (202) 586-3511.

        </p>

      </div>
		


		
        <?php /* END Main Column */ ?>
		
      <?php /* BEGIN Side Column */ ?>
      <div class="side_col pub_side right">
    
	<?php include ('includes/foks_side.inc') ; ?>
	
      </div>
     
	  <?php /* END Side Column */ ?>

    </div>
<?php /* END Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*END Outer Wrapper */ ?>
</body>
</html>