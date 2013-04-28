<?php
/**
* MailEngine class
* @author Brian Wong <bwsource@users.sourceforge.net>
* @version 04-02-07
* @package MailEngine
*
* Copyright (C) 2003 - 2007 MailZu
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
        include_once('pear/PEAR.php');
        include_once('pear/Mail/mimeDecode.php');
}
else {
        include_once 'PEAR.php';
        include_once('Mail/mimeDecode.php');
}

/**
* Provide all mail access/manipulation functionality
*/

class MailEngine {

	var $raw;    // Raw mail contents
	var $struct; // The top-level MIME structure
	var $recipient; // The recipient of the email 
	var $msg_found; // Msg found in database
	var $msg_error; // Msg has MIME error
  var $last_error; // PEAR Error Messages

	/**
	* MailEngine object constructor
	* $param string The unique mail_id
	* $param string The mail addr of the reader
	* $return object MailEngine object
	*/
	function MailEngine($mail_id, $recip) {
	  $this->recipient = $recip;
	  $this->getRawContent($mail_id);
	  $this->msg_error = false;
	  if ($this->raw) {
	    $this->msg_found = true;
	    $this->struct = $this->getDecodedStruct($this->raw);
	    if (PEAR::isError($this->struct)) {
	      $this->msg_error = true;
	      $this->last_error = $this->struct->getMessage();
	    }
	  } else {
	    $this->msg_found = false;
	  }
	
	  return $this->struct;
	}
	
	/**
	* Decode the raw contents to get the MIME structure
	* $param string The complete raw message returned by get_raw_mail
	* $return object Mail_mimeDecode::decode object 
	*/
	function getDecodedStruct($contents) {
	  $message = new Mail_mimeDecode($contents);
          $msg_struct = $message->decode( array ( 'include_bodies' => true,
				          	  'decode_bodies' => true,
				          	  'decode_headers' => true)
				        );
	  return $msg_struct;
	}

	/**
	* Get the raw content through a DB call
        * $param string The unique mail_id
        * $return string The complete raw email
        */
	function getRawContent($mail_id) {
	  $db = new DBEngine();
	  $this->raw = $db->get_raw_mail($mail_id, $this->recipient);
	  // Mark read
	  
	  if (in_array($this->recipient, $_SESSION['sessionMail']) && $this->raw) {
	    $db->update_msgrcpt_rs($mail_id,$this->recipient,'v');
	  }
	}
}
