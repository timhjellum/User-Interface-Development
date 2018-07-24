<?php
require_once('global/includes/utils/Database.inc');

abstract class localDatabase extends Database {
	var    $connection_name    = 'neicweb';
	//var    $nls_date_format    = 'DD-MON-YY'; //this is default in oracle
	var $nls_date_format = 'DD-MON-YYYY';
	static $ORACLE_DATE_FORMAT = 'd-M-Y';


	/**
	 * @param mixed $output         The variable to contain the returned rows.
	 * @param int   $flag           Indicates the array structure and whether associative arrays should be used.
	 * @param bool  $keyInLowerCase Whether or not to change all array keys to lower
	 * @param bool  $removeNulls    Whether or not to remove any nulls elements
	 *
	 * @return int Number of rows returned
	 * @throws Exception If there is an error executing oci_fetch_all
	 */
	protected function fetchAll(&$output,
															$flag = OCI_FETCHSTATEMENT_BY_ROW,
															$keyInLowerCase = true,
															$removeNulls = false) {
		parent::fetchAll($output, $flag + OCI_RETURN_NULLS, $keyInLowerCase, $removeNulls);
	}

}