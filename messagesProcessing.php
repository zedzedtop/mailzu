<?php
/**
* This file processes the messages that were selected 
* in messagesIndex.php for logged in users.
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
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
* Include Quarantine functions 
*/
include_once('lib/Quarantine.lib.php');
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

//Turn off all error reporting, useless for users
error_reporting(0);

$db = new DBEngine();

$t = new Template(translate('Message Processing'));

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

// Break table into 2 columns, put quick links on left side and all other tables on the right
startQuickLinksCol();
showQuickLinks();		// Print out My Quick Links
startDataDisplayCol();

$action = CmnFns::get_action();
$content_type = CmnFns::get_ctype();
$query_string = CmnFns::get_query_string();
$mail_id_array = CmnFns::getGlobalVar('mail_id_array', POST);

switch ( $_SESSION['sessionNav'] ) {
	case 'My Quarantine':
		$referral = 'messagesIndex.php';
		break;
	case 'Site Quarantine':
		$referral = 'messagesAdmin.php';
		break;
	case 'My Pending Requests':
		$referral = 'messagesPending.php';
		break;
	case 'Site Pending Requests':
		$referral = 'messagesPending.php';
		break;
}

// If no message was selected and the action is not "Delete All"
if ( ! isset($mail_id_array) && $action != translate('Delete All') )
 
	printNoMesgWarning();

elseif ( isset( $action ) ) {

	switch ( $action ) {
		case translate('Release'):
		case translate('Release/Request release'):
			$failed_array = releaseMessages($_SESSION['sessionMail'], $mail_id_array);
			if ( is_array($failed_array) && !empty($failed_array) ) {
				showFailedMessagesTable($action, $content_type, $failed_array);
				printCpanelBr();	
				printReportButtons($query_string, $failed_array, $action);
			} else {
				CmnFns::redirect_js($referral . '?' . $query_string);
			}
			break;
		case translate('Cancel Request'):
			$failed_array = updateMessages('', $content_type, $_SESSION['sessionMail'], $mail_id_array);
			if ( is_array($failed_array) && !empty($failed_array) ) {
				showFailedMessagesTable($action, $content_type, $failed_array);
				printCpanelBr();	
				printReportButtons($query_string, $failed_array, $action);
			} else {
				CmnFns::redirect_js($referral . '?' . $query_string);
			}
			break;
		case translate('Delete'):
			$failed_array = updateMessages('D', $content_type, $_SESSION['sessionMail'], $mail_id_array);
			if ( is_array($failed_array) && !empty($failed_array) ) {
				showFailedMessagesTable($action, $content_type, $failed_array);
				printCpanelBr();	
				printReportButtons($query_string, $failed_array, $action);
			} else {
				CmnFns::redirect_js($referral . '?' . $query_string);
			}
			break;
		case translate('Delete All'):
			$failed_array = updateMessages('D', $content_type, $_SESSION['sessionMail'], '', true);
			if ( is_array($failed_array) && !empty($failed_array) ) {
				showFailedMessagesTable($action, $content_type, $failed_array);
				printCpanelBr();	
				printReportButtons($query_string, $failed_array, $action);
			} else {
				CmnFns::redirect_js($referral . '?' . $query_string);
			}
			break;
		default:
			CmnFns::do_error_box(translate('Unknown action type'), '', false);
	}

}

endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>
