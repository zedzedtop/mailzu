<?php
/**
* DBAuth class
* @author Samuel Tran
* @version 04-26-2005
* @package DBAuth
*
* Following functions taken from PhpScheduleIt,
*	Nick Korbel <lqqkout13@users.sourceforge.net>:
* db_connect(), cleanRow(), get_err()
*
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');
/**
* CmnFns class
*/
include_once('CmnFns.class.php');
/**
* Pear::DB
*/
if ($GLOBALS['conf']['app']['safeMode']) {
	ini_set('include_path', ( dirname(__FILE__) . '/pear/' . PATH_SEPARATOR . ini_get('include_path') ));
	include_once('pear/DB.php');
}
else {
	include_once('DB.php');
}

/**
* Provide all database access/manipulation functionality for SQL Auth
*/
class DBAuth {

	// Reference to the database object
	var $db;

	// The database hostname with port (hostname[:port])
        var $dbHost;

	// Database type
	var $dbType;
	// Database name
	var $dbName;

	// Database user
	var $dbUser;
	// Password for database user
	var $dbPass;

	// Name for auth table that contains usernames and passwords
	var $dbTable;
	// Name of the Username field of the MySQL table
	var $dbTableUsername;
	// Name of the password field of the MySQL table
	var $dbTablePassword;
	// Name of the 'first name' or 'full name' field of the MySQL table
	var $dbTableName;
	// Name of the email address field of the MySQL table
	var $dbTableMail;

	// Hash configuration
	// 1            = passwords will be stored md5 encrypted on database
	// other number = passwords will be stored as is on database
	var $isMd5;

        // The user's logon name
        var $logonName;
        // The user's first name
        var $firstName;
        // The user's mail address
        var $emailAddress;

	var $err_msg = '';
	
	/**
	* DBEngine constructor to initialize object
	* @param none
	*/
	function DBAuth() {
		global $conf;

		$this->dbType = $conf['auth']['dbType'];
		$this->dbHost = $conf['auth']['dbHostSpec'];
		$this->dbName = $conf['auth']['dbName'];
		$this->dbUser = $conf['auth']['dbUser'];
		$this->dbPass = $conf['auth']['dbPass'];
		$this->isMd5 = $conf['auth']['dbIsMd5'];
		$this->dbTable = $conf['auth']['dbTable'];
		$this->dbTableUsername = $conf['auth']['dbTableUsername'];
		$this->dbTablePassword = $conf['auth']['dbTablePassword'];
		$this->dbTableName = $conf['auth']['dbTableName'];
		$this->dbTableMail = $conf['auth']['dbTableMail'];
		
		$this->db_connect();
	}

	// Connection handling methods -------------------------------------------
	
	/**
	* Create a persistent connection to the database
	* @param none
	*/
	function db_connect() {
	
		/***********************************************************
		/ This uses PEAR::DB
		/ See http://www.pear.php.net/manual/en/package.database.php#package.database.db
		/ for more information and syntax on PEAR::DB
		/**********************************************************/
	
		// Data Source Name: This is the universal connection string
		// See http://www.pear.php.net/manual/en/package.database.php#package.database.db
		// for more information on DSN

		$dsn = $this->dbType . '://' . $this->dbUser . ':' . $this->dbPass
				. '@' . $this->dbHost . '/' . $this->dbName;

		// Make persistant connection to database
		$db = DB::connect($dsn, true);
	
		// If there is an error, print to browser, print to logfile and kill app
		if (DB::isError($db)) {
			die ('Error connecting to database: ' . $db->getMessage() );
		}
		
		// Set fetch mode to return associatve array
		$db->setFetchMode(DB_FETCHMODE_ASSOC);
	
		$this->db = $db;
	}


	// User methods -------------------------------------------	

	/**
	* Authenticates user
	* @param string $username
	* @param string $password
	* @return boolean
	*/
	function authUser($username, $password) {

		if ( $this->isMd5 )
			$password = md5( $password );

		$query = "SELECT $this->dbTableUsername, $this->dbTableMail"
				. (! empty($this->dbTableName) ? ", $this->dbTableName" : '')
                                . " FROM $this->dbTable"
                                . " WHERE $this->dbTableUsername=?"
                                . " AND $this->dbTablePassword=?";

		$values = array($username, $password);

		// Prepare query
		$q = $this->db->prepare($query);
                // Execute query
		$result = $this->db->execute($q, $values);
                // Check if error
                $this->check_for_error($result);

        	if ($result->numRows() <= 0) {
			$this->err_msg = translate('There are no records in the table.');
			return false;
		} else {

			// Fetch the first row of data
			$rs = $this->cleanRow($result->fetchRow());

			$this->logonName = $rs[$this->dbTableUsername];
			$this->firstName = ( !empty($rs[$this->dbTableName]) ?
						$rs[$this->dbTableName] : $rs[$this->dbTableUsername] );
			$this->emailAddress = array( $rs[$this->dbTableMail] );

			$result->free();

			return true;
		}
	}
	
	/**
	* Checks to see if there was a database error and die if there was
	* @param object $result result object of query
	*/
	function check_for_error($result) {
		if (DB::isError($result))
			CmnFns::do_error_box(translate('There was an error executing your query') . '<br />'
				. $result->getMessage()
				. '<br />' . '<a href="javascript: history.back();">' . translate('Back') . '</a>');
		return false;
	}
	
	
	/**
	* Strips out slashes for all data in the return row
	* - THIS MUST ONLY BE ONE ROW OF DATA -
	* @param array $data array of data to clean up
	* @return array with same key => value pairs (except slashes)
	*/
	function cleanRow($data) {
		$return = array();
			
		foreach ($data as $key => $val)
			$return[$key] = stripslashes($val);
		return $return;
	}
	
	/**
	* Returns the last database error message
	* @param none
	* @return last error message generated
	*/
	function get_err() {
		return $this->err_msg;
	}

	// Helper methods -------------------------------------------

    	/**
        * Returns user information
        * @return array containing user information
        */
	function getUserData() {
        	$return = array(
            			'logonName' => $this->logonName,
            			'firstName' => $this->firstName,
            			'emailAddress' => $this->emailAddress
        	);
        	return $return;
    	}

}
?>
