<?php
$myfile = fopen( $fname, "w+");
fwrite($myfile, "<?php");
fwrite($myfile, "\n\n");
fwrite($myfile, "\n\n  ");
fwrite($myfile, "\n\n");
fwrite($myfile, "?>");
fclose($myfile);
if(!file_exists($fname))
die("WRITE PERMISSION ERROR: " . $fname);