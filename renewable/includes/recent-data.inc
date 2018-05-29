<div class="content-container basic-table">
    <h1>Recent Data</h1>
    <?php include('/analysis/includes/data_table_excel.inc') ?>
	<?php
        if(file_exists("renewable/includes/data_table.html")){
          $homepage_data_file = "renewable/includes/data_table.html";
        } else{
          $homepage_data_file = "renewable/includes/data_table.inc";
        }
        if(!$homepageData = file_get_contents($homepage_data_file, FILE_USE_INCLUDE_PATH)) {
          echo "Data not currently available. Check back soon.";
        } else {
          echo $homepageData;
        }
      ?>
    <ul class="basic_table">
        <li class="foot"><a href="data.php">See more data</a></li>
	</ul>
</div>