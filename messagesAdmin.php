<?php
/**
* This file is the messages index in quarantine for logged in users.
* It provides a listing of all messages corresponding to:
* - attachment ('B')
* - spam ('S')
* @author Samuel Tran
* @author Brian Wong
* @author Jeremy Fowler <jfowler06@users.sourceforge.net>
* @version 04-03-07
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
include_once('templates/quarantine.template.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

// grab the display size limit set in config.php
$sizeLimit = isset ( $conf['app']['displaySizeLimit'] ) && is_numeric( $conf['app']['displaySizeLimit'] ) ?
	     $conf['app']['displaySizeLimit'] : 50;
// Get current page number
$requestedPage = CmnFns::getGlobalVar('page', GET);

$_SESSION['sessionNav'] = "Site Quarantine";

$db = new DBEngine();

$t = new Template(translate('Site Quarantine'));

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

// Break table into 2 columns, put quick links on left side and all other tables on the right
startQuickLinksCol();
showQuickLinks();		// Print out My Quick Links
startDataDisplayCol();

if (! Auth::isMailAdmin()) {
  CmnFns::do_error_box(translate('Access Denied'));

} else {
  // Draw search engine
  printSearchEngine($content_type, $_SERVER['PHP_SELF'], 1);
  echo '<br>';

  if ( CmnFns::getGlobalVar('search_action', GET) == translate('Clear search results') ) {
	CmnFns::redirect_js($_SERVER['PHP_SELF'] . '?searchOnly=' . $conf['app']['searchOnly']);
  }

  $search_array1 = $db->convertSearch2SQL( 'msgs.from_addr', CmnFns::getGlobalVar('f_criterion', GET), CmnFns::getGlobalVar('f_string', GET) );
  $search_array2 = $db->convertSearch2SQL( 'msgs.subject', CmnFns::getGlobalVar('s_criterion', GET), CmnFns::getGlobalVar('s_string', GET) );
  $search_array3 = $db->convertSearch2SQL( 'recip.email', CmnFns::getGlobalVar('t_criterion', GET), CmnFns::getGlobalVar('t_string', GET) );
  $search_array4 = $db->convertSearch2SQL( 'msgs.mail_id', CmnFns::getGlobalVar('m_criterion', GET), CmnFns::getGlobalVar('m_string', GET) );

  $search_array = array_merge( $search_array1, $search_array2, $search_array3, $search_array4 );

  $order = array('msgs.time_num', 'from_addr', 'msgs.subject', 'spam_level', 'recip.email', 'msgs.content', 'mail_id');
  // Arbitrary type for Admin
  $content_type = (CmnFns::get_ctype() ? CmnFns::get_ctype() : 'A');

  //echo "Before query: " . date("l dS of F Y h:i:s A") . "<br><br>";

  if ( CmnFns::getGlobalVar('searchOnly', GET) != 1 ) {
  // Print a loading message until database returns...
  printMessage(translate('Retrieving Messages...'));

  $messages = $db->get_user_messages($content_type, $_SESSION['sessionMail'], CmnFns::get_value_order($order), CmnFns::get_vert_order(), $search_array, 1, 0, $requestedPage);
  }

// Compute maximum number of pages
$maxPage = (ceil($db->numRows/$sizeLimit)-1);

// If $requestedPage > $maxPage, then redirect to $maxPage instead of $requestedPage
if ( $requestedPage > $maxPage ) {
	$query_string = CmnFns::array_to_query_string( $_GET, array( 'page' ) );
	$query_string = str_replace ( '&amp;', '&', $query_string );
	CmnFns::redirect_js($_SERVER['PHP_SELF'].'?'.$query_string.'&page='.$maxPage);
}

  if ( CmnFns::getGlobalVar('searchOnly', GET) != 1 ) {
    showMessagesTable($content_type, $messages, $requestedPage, CmnFns::get_value_order($order), CmnFns::get_vert_order(), $db->numRows );

    // Hide the message after the table loads.
    hideMessage(translate('Retrieving Messages...'));
  }

}

endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>
