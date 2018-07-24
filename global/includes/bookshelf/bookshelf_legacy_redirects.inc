<?php
/**
 * Created by PhpStorm.
 * User: HSH
 * Date: 2/3/16
 * Time: 9:24 AM
 */

if(isset($_REQUEST['t']) && ($_REQUEST['t'])) {
    if(is_numeric($_REQUEST['t'])) {
        header("location:" . $_SERVER['SCRIPT_NAME'] . "#/T" . $_REQUEST['t']);
    } else {
        header("location:" . $_SERVER['SCRIPT_NAME'] . "#/K" . $_REQUEST['t']);
    } 
    exit;
}

