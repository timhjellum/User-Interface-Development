<?php
/* This gets included by carousel.php, it_archive_inc.php, and recent_AP_schedule.php to display only the tags */
/* If there is at least one tag */
if(strlen($thetags) && strlen($thetagnames)) {
    /* Split the tags into an array */
    $thetagsarray = explode(",", $thetags);
    $thetagnamesarray = explode(",", $thetagnames);

    $TagsStringArray = array();
    $TagsStringPlus = "";

    /* Link to the reports page one directory up if issue trends, otherwise empty string*/
    $pathPrefix = strpos($_SERVER['SCRIPT_NAME'],"issuestrends") ? "../" : "";

    if(!function_exists("stripParantheses")){
        function stripParantheses($string) {
            return (isset($string) && $string) ? trim(preg_replace("/\([^)]+\)/","",$string)) : '';
        }
    }

    if(!function_exists("outputTag")) {
        function outputTag($tagId, $tagName)
        {
            global $pathPrefix;
            global $CorrespondingTag;

            $fullTitle = (isset($tagName) && $tagName) ? $tagName : '';
            /* Use a regular expression to strip out parentheses (and anything inside them)*/
            $titleNoParantheses = stripParantheses($fullTitle);

            echo "<a href=\"{$pathPrefix}reports.php/#/T{$CorrespondingTag},T{$tagId}\" class=\"capsule\" title=\"{$fullTitle}\">{$titleNoParantheses}</a>";
        }
    }

    if(count($thetagsarray) > 0) {
        echo "tags: <span class='tag-list'>";

        $displayedTags = max(count($thetagsarray), 6);
        for($i=0; $i < min(count($thetagsarray), 6); $i++) {

            outputTag($thetagsarray[$i], $thetagnamesarray[$i]);
            /* Link to the reports page in the same directory */
        }
        if(count($thetagsarray) > 6) {
            echo '<a href="#" class="show-more-tags">+</a><span class="more-tags">';
            for($i = min(count($thetagsarray), 6); $i < count($thetagsarray); $i++) {
                outputTag($thetagsarray[$i], $thetagnamesarray[$i]);
            }
            echo '</span></span>';
        }
    }

    
}
?>