<?php /* ///////////////////////////////////////// */ ?>
<?php /* File Scrub - TIE                          */ ?>
<?php /* ///////////////////////////////////////// */ ?>

<?php $ContentMarker = "<body; ?>" ?>
<?php $Endsummary = "</body; ?>" ?>

<?php /* Set path to variable ... read file */ ?>
<?php
  $filename = strtolower($_REQUEST['t']) & ".html";
  $sFileWhole = file_get_contents("totalenergy/data/annual/txt".$filename, FILE_USE_INCLUDE_PATH);
  $pos = strpos($sFileWhole, $ContentMarker);
  if($pos != 0){
    $sFileWhole = substr($sFileWhole, $pos, 999000);
    $endsum = strpos($sFileWhole, $Endsummary) - 1;
    if(strpos($sFileWhole, $Endsummary) !== false){
      $sFileWhole = substr($sFileWhole, 1, $endsum);
    }
  }

  $sFileWhole = str_replace(chr(145) , "&$145;", $sFileWhole);
  $sFileWhole = str_replace(chr(146) , "&$146;", $sFileWhole);
  $sFileWhole = str_replace(chr(147) , "&$147;", $sFileWhole);
  $sFileWhole = str_replace(chr(148) , "&$148;", $sFileWhole);
  $sFileWhole = str_replace(chr(150) , "&$150;", $sFileWhole);
  $sFileWhole = str_replace(chr(151) , "&$151;", $sFileWhole);
  $sFileWhole = preg_replace("<!--(.*?)--; ?>" , "", $sFileWhole);
  $sFileWhole = str_replace("--" , "&$150;", $sFileWhole);
  $sFileWhole = str_replace("---" , "&$151;", $sFileWhole);

  echo "$sFileWhole";
?>
