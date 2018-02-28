<div class="nav-menu whats-new">
	<i class="ico-menu ico-nav whats-new"></i>
		<h3><a href="/about/new/">What's New?</a></h3>
		<ul class="header-whats-new">
	<?php
	if(!$whatsNew = file_get_contents("CFusionMX7/global/data/whatsnew2.htm", FILE_USE_INCLUDE_PATH)) {
	  echo "<a href=\"about/new/\">See what's new</a>";
	} else {
	  echo $whatsNew;
	}
	?>
	</ul>
</div>