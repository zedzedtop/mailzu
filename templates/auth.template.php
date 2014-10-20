<?php
/**
* This file provides output functions for all auth pages
* No data manipulation is done in this file
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-04-05
* @package Templates
*
* Copyright (C) 2003 - 2005 phpScheduleIt
* License: GPL, see LICENSE
*/

$link = CmnFns::getNewLink();	// Get Link object

/**
* Prints out a login form and any error messages
* @param string $msg error messages to display for user
* @param string $resume page to resume on after login
*/ 
function printLoginForm($msg = '', $resume = '') {
	global $conf;
	$link = CmnFns::getNewLink();
	
	// Check browser information
	echo '<script language="JavaScript" type="text/javascript">checkBrowser();</script>';
	
	if (!empty($msg)) 
		CmnFns::do_error_box($msg, '', false);
?>
<form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<table width="350px" border="0" cellspacing="0" cellpadding="1" align="center">
<tr>
  <td bgcolor="#CCCCCC">
	<table width="100%" border="0" cellspacing="0" cellpadding="3">
	  <tr bgcolor="#EDEDED">
		<td colspan="2" style="border-bottom: solid 1px #CCCCCC;">
		  <h5 align="center"><?php echo translate('Please Log In')?></h5>
		</td>
	  </tr>
	  <tr bgcolor="#FFFFFF">
		<td width="150">
		  <p><b><?php echo translate('Login')?></b></p>
		</td>
		<td>
		  <input type="text" name="email" class="textbox" />
		</td>
	  </tr>
	  <tr bgcolor="#FFFFFF">
		<td>
		  <p><b><?php echo translate('Password')?></b></p>
		</td>
		<td>
		  <input type="password" name="password" class="textbox" />
		</td>
	  </tr>
	  <?php if ($conf['auth']['serverType'] === 'exchange') { ?>
	  <tr bgcolor="#FFFFFF">
		<td>
		  <p><b><?php echo translate('Domain')?></b></p>
		</td>
		<td>
		  <input type="text" name="domain" class="textbox" value="<?php echo $conf['auth']['exch_domain']?>"/>
		</td>
	  </tr>
	  <?php }
	  if ($conf['app']['selectLanguage']) { ?>
	  <tr bgcolor="#FFFFFF">
		<td>
		  <p><b><?php echo translate('Language')?></b></p>
		</td>
		<td>
		<?php CmnFns::print_language_pulldown()?>
		</td>
	  </tr>
	  <?php } ?>
	  <tr bgcolor="#FFFFFF">
		<td>
		  <p><b><?php echo translate('Keep me logged in')?></b></p>
		</td>
		<td>
		  <input type="checkbox" name="setCookie" value="true" />
		</td>
	  </tr>
	  <tr bgcolor="#FAFAFA">
		<td colspan="2" style="border-top: solid 1px #CCCCCC;">
		   <p align="center">
			<input type="submit" name="login" value="<?php echo translate('Log In')?>" class="button" />
			<input type="hidden" name="resume" value="<?php echo $resume?>" />
		  </p>
		</td>
	  </tr>
	</table>
  </td>
</tr>
</table>
<p align="center">
<?php $link->doLink('javascript: help();', translate('Help'), '', '', translate('Get online help')) ?>
</p>
</form>
<?php
}
?>
