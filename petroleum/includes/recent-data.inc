<div class="content-container">
    <h1>Recent Data</h1>
    <?php /* replace this with something local in the include directory, or with inline code*/ ?>
    <?php 
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/petroleum/includes/data_table.html")){
        $homepage_data_file = $_SERVER['DOCUMENT_ROOT'] . "/petroleum/includes/data_table.html";
    } else{
        $homepage_data_file = $_SERVER['DOCUMENT_ROOT'] . "/petroleum/includes/data_table.inc";
    }
    if(!$homepageData = file_get_contents($homepage_data_file, FILE_USE_INCLUDE_PATH)) {
        echo "Data not currently available. Check back soon.";
    } else {
        echo $homepageData;
    }
    //include ('petroleum/includes/data_table.inc') ;
    ?>
    <ul class="basic_table">
        <li class="foot"><a href="data.php">See more data</a></li>
	</ul>
</div>