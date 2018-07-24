<?php
require $_SERVER['APPL_PHYSICAL_PATH'] . 'global/includes/utils/ErrorLogger.inc';

class localErrorLogger extends ErrorLogger {
	var $application_name = 'bookshelf';
}