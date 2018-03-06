<div class="l-row header">
	<div class="slider-home-top"></div>
    <div class="slider-home">
        <ul>
        <?php
            if(!$homepageFeatures = file_get_contents("homepage/includes/slider-slides.inc", FILE_USE_INCLUDE_PATH)) {
            } else {
                echo $homepageFeatures;
            }
        ?>
        </ul>
        <div class="slider-home-pager"></div>
    </div>
    <div class="slider-home-bottom"></div>
</div>