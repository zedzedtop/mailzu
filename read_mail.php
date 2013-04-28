<?php
/**
* This file is the 'read mail' page. Logged in users can:
* - read the content of a specific message
* - view the full headers
* - view the original content
* - release or delete the viewed message
*
* @author Brian Wong <bwsource@users.sourceforge.net>
* @author Samuel Tran <stran2005@users.sourceforge.net>
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

$t = new Template(translate('Message View'));

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

// Break table into 2 columns, put quick links on left side and all other tables on the right
startQuickLinksCol();
showQuickLinks();		// Print out My Quick Links
startDataDisplayCol();

$mail_id = CmnFns::get_mail_id();
$content_type = CmnFns::getGlobalVar('ctype', GET);
$recip_email = CmnFns::getGlobalVar('recip_email', GET);
$query_string = CmnFns::querystring_exclude_vars( array('mail_id','recip_email') );

$m = new MailEngine($mail_id,$recip_email);

if ( ! $m->msg_found) {
  CmnFns::do_error_box(translate('Message Unavailable'));

} else {

  echo '<form name="messages_process_form" action="messagesProcessing.php" method="POST">';
  echo '  <input type="hidden" name="mail_id_array[]" value="' . $mail_id . '_' . $recip_email . '">';
  echo '  <input type="hidden" name="query_string" value="' . $query_string . '">';
  printActionButtons(false);
  echo '</form>';

  MsgDisplayOptions(CmnFns::get_mail_id(),$recip_email);
  startMessage();
  MsgDisplayHeaders($m->struct);
  // Give a space before the body displays
  echo '<br>' . "\n";
  if ( ! $m->msg_error ) { 
    MsgDisplayBody($m->struct);
  } else {
    echo "<p> $m->last_error </p>";
  }
  endMessage();
}
  
endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>
