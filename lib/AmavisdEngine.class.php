<?php
/**
* AmavisdEngine class
* @author Samuel Tran
* @author Jeremy Fowler
* @version 03-22-07
* @package AmavisdEngine
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
include_once('lib/CmnFns.class.php');

/**
*	PEAR::Net_Socket Library
*/
if ($GLOBALS['conf']['app']['safeMode']) {
	ini_set('include_path', ( dirname(__FILE__) . '/pear/' . PATH_SEPARATOR . ini_get('include_path') ));
	include_once('pear/PEAR.php');
	include_once('pear/Net/Socket.php');
}
else {
	include_once 'PEAR.php';
	include_once 'Net/Socket.php';
}

/**
* Provide all access/communication to Amavisd AM.PDP
*/

class AmavisdEngine {
	var $socket;			// Reference to socket
	var $port;			// Amavisd spam release port
	var $connected; 		// Connection status
	var $last_error;		// Last error message

	/**
	* AmavisdEngine object constructor
	* $param none
	* $return object Amavisd object
	*/
	function AmavisdEngine($host) {
		$this->socket = new Net_Socket();
		$this->port = $GLOBALS['conf']['amavisd']['spam_release_port'];
		$this->connected = false;
		$this->last_error = '';

		// Connect to the Amavisd Port or wait 5 seconds and timeout
		$result = $this->socket->connect($host, $this->port, true, 5);

		if (PEAR::isError($result)) {
			$this->last_error = "Error connecting to $host:$this->port, " . $result->getMessage();
		} else {
			$this->connected = true;
		}
	}

	/**
	* Shutdown and close socket
	* @param none
	*/
	function disconnect() {
		$this->socket->disconnect();
	}

	/**
	* Release message from quarantine
	* @param $mail_id
	* @param $secret_id
	* @param $recipient
	* @result response
	*/

	function release_message($mail_id, $secret_id, $recipient, $quar_type, $quar_loc) {
		if (! $this->connected) {
			return $this->last_error;
		}

		$in = "request=release\r\n";
		$in .= "mail_id=$mail_id\r\n";
		$in .= "secret_id=$secret_id\r\n";
		$in .= "quar_type=$quar_type\r\n";

		# If it is file-based quarantine, lets provide the filename on the host
		if ( $quar_type == 'F' ) {
		  $in .= "mail_file=$quar_loc\r\n";
		}

		$in .= "recipient=<$recipient>\r\n";
		$in .= "\r\n";

		// Sending request ...
		$out = $this->socket->write($in);

		if (PEAR::isError($out)) {
			$this->last_error = 'Error writing to socket: ' . $out->getMessage();
			return $this->last_error;
		}

		// Set timeout of 5 seconds
		$this->socket->setTimeout(5);

		// Reading response
		$out = $this->socket->read(512);

		if (PEAR::isError($out)) {
			$this->last_error = 'Error reading from socket: ' . $out->getMessage();
			return $this->last_error;
		}

		return $out;
	}
}
?>
