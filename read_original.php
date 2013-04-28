<?php
/**
* This file is the control panel, or "home page" for logged in users.
* It provides a listing of all upcoming reservations
*  and functionality to modify or delete them. It also
*  provides links to all other parts of the system.
* @author Brian Wong <bwsource@users.sourceforge.net>
* @author Jeremy Fowler
* @version 04-03-07
* @package MailZu
*
* Copyright (C) 2003 - 2007 MailZu
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
* Include viewmail template class
*/
include_once('templates/viewmail.template.php');
/**
* Include MailEngine class
*/
include_once('lib/MailEngine.class.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

$t = new Template(translate('ViewOriginal'));

$t->printHTMLHeader();
$t->startMain();

//$mail_id = CmnFns::get_mail_id();
$mail_id = CmnFns::getGlobalVar('mail_id', GET);
$recip_email = CmnFns::getGlobalVar('recip_email', GET);

$m = new MailEngine($mail_id,$recip_email);

MsgOriginalOptions();
MsgBodyPlainText($m->raw);

$t->endMain();
$t->printHTMLFooter();
?>
