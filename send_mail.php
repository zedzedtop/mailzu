<?php
/**
* This file is the 'read mail' page. Logged in users can:
* - read the content of a specific message
* - view the full headers
* - view the original content
* - release or delete the viewed message
*
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
* @version 04-22-05
* @package MailZu
*
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/
/**
* Include Template class
*/
include_once('lib/Template.class.php');
/**
* Include control panel-specific output functions
*/
include_once('templates/common.template.php');
/**
* Include sendmail to admin specific output functions
*/
include_once('templates/sendmail.template.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

$_SESSION['sessionNav'] = "Email Administrator";

$t = new Template(translate('Email Administrator'));

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

// Break table into 2 columns, put quick links on left side and all other tables on the right
startQuickLinksCol();
showQuickLinks();		// Print out My Quick Links
startDataDisplayCol();

$action = CmnFns::getGlobalVar('action', POST);

if (isset($action)){
	verifyAndSendMail();
}else{
	printsendmail();
}
  
endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>
