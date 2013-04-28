<?php
/**
* This file is the messages index in quarantine for the entire site.
* It provides a listing of all messages corresponding to:
* - attachment ('B')
* - spam ('S')
* - viruses ('V')
* - bad headers ('H')
* @author Samuel Tran
* @author Jeremy Fowler <jfowler06@users.sourceforge.net>
* @version 04-03-2007
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
* Include common output functions
*/
include_once('templates/common.template.php');
/**
* Include quarantine-specific output functions
*/
include_once('templates/summary.template.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

$_SESSION['sessionNav'] = "Site Quarantine Summary";
$t = new Template(translate('Site Quarantine Summary'));

$db = new DBEngine();

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

// Break table into 2 columns, put quick links on left side and all other tables on the right
startQuickLinksCol();
showQuickLinks();		// Print out My Quick Links
startDataDisplayCol();

if (! Auth::isMailAdmin() || ! $conf['app']['siteSummary']) {
  CmnFns::do_error_box(translate('Access Denied'));

} else {

  // Print a loading message until database returns...
  printMessage(translate('Loading Summary...'));

  $count_array = $db->get_site_summary();

  showSummary( $count_array ); 

  // Hide the message after the table loads.
  hideMessage(translate('Loading Summary...'));

}

endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>
