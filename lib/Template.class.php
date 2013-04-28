<?php
/**
* This file provides output functions
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 10-21-04
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2005 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');
/**
* Include Auth class
*/
include_once('Auth.class.php');

/**
* Provides functions for outputting template HTML
*/
class Template {
	var $title;
	var $link;
	var $dir_path;
	
	/**
	* Set the page's title
	* @param string $title title of page
	* @param int $depth depth of the current page relative to phpScheduleIt root
	*/
	function Template($title = '', $depth = 0) {
		global $conf;
		
		$this->title = (!empty($title)) ? $title : $conf['ui']['welcome'];
		$this->dir_path = str_repeat('../', $depth);
		$this->link = CmnFns::getNewLink();
		//Auth::Auth();	// Starts session
	}
	
	/**
	* Print all XHTML headers
	* This function prints the HTML header code, CSS link, and JavaScript link
	*
	* DOCTYPE is XHTML 1.0 Transitional
	* @param none
	*/
	function printHTMLHeader() {
		global $conf;
		global $languages;
		global $lang;
		global $charset;
		
		$path = $this->dir_path;
		echo "<?xml version=\"1.0\" encoding=\"$charset\"?" . ">\n";
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=$languages[$lang][2]?>" lang="<?=$languages[$lang][2]?>">
	<head>
	<title>
	<?=$this->title?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<script language="JavaScript" type="text/javascript" src="<?=$path?>functions.js"></script>
	<!--<link href="<?=$path?>css.css" rel="stylesheet" type="text/css" />-->
	<style type="text/css">
	@import url(<?=$path?>css.css);
	</style>
	</head>
	<body>
	<?
	}
	
	
	/**
	* Print welcome header message
	* This function prints out a table welcoming
	*  the user.  It prints links to My Control Panel,
	*  Log Out, Help, and Email Admin.
	* If the user is the admin, an admin banner will
	*  show up
	* @global $conf
	*/
	function printWelcome() {
		global $conf;
		
		// Print out logoImage if it exists
		echo (!empty($conf['ui']['logoImage']))
			? '<div align="left"><img src="' . $conf['ui']['logoImage'] . '" alt="logo" vspace="5" /></div>'
			: '';
	?>
	<table width="100%" border="0" cellspacing="0" cellpadding="5" class="mainBorder">
	  <tr>
		<td class="mainBkgrdClr">
		  <h4 class="welcomeBack">
		    <?= 
		      translate('Welcome Back', array($_SESSION['sessionName'], 1));
		      // Notify if the person logged in is admin
		      echo (Auth::isMailAdmin() ? ' (' . translate('Administrator') . ')' : '');
		    ?>
		  </h4>
		  <!--<p>
			<? $this->link->doLink($this->dir_path . 'index.php?logout=true', translate('Log Out')) ?>
			|
			<? $this->link->doLink($this->dir_path . 'summary.php', translate('My Control Panel')) ?>
		  </p>-->
		</td>
		<td class="mainBkgrdClr" valign="top">
		  <div align="right">
		    <p>
			<?= translate_date('header', mktime());?>
			</p>
			<!--<p>
			  <? $this->link->doLink('javascript: help();', translate('Help')) ?>
			</p>-->
		  </div>
		</td>
	  </tr>
	</table>
	<?
	}
	
	
	/**
	* Start main HTML table
	* @param none
	*/
	function startMain() {
	?>
	<p>&nbsp;</p>
	<table width="100%" border="0" cellspacing="0" cellpadding="10" style="border: solid #CCCCCC 1px;">
	  <tr>
		<td bgcolor="#FAFAFA">
		  <?
	}
	
	
	/**
	* End main HTML table
	* @param none
	*/
	function endMain() {
	?>
		</td>
	  </tr>
	</table>
	<?
	}
	
	
	/**
	* Print HTML footer
	* This function prints out a tech email
	* link and closes off HTML page
	* @global $conf
	*/
	function printHTMLFooter() {
		global $conf;
	?>
	<p align="center"><a href="http://www.mailzu.net"><?=$conf['app']['title']?> v<?=$conf['app']['version']?></a></p>
	</body>
	</html>
	<?
	}
	
	/**
	* Sets the link class variable to reference a new Link object
	* @param none
	*/
	function set_link() {
		$this->link = CmnFns::getNewLink();
	}
	
	/**
	* Returns the link object
	* @param none
	* @return link object for this class 
	*/
	function get_link() {
		return $this->link;
	}
	
	/**
	* Sets a new title for the template page
	* @param string $title title of page
	*/
	function set_title($title) {
		$this->title = $title;
	}
}
?>
