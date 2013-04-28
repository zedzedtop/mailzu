<?php
/**
* This file provides common output functions thar are used by other templates
* No data manipulation is done in this file
*
* Following functions were borrowed from phpScheduleIt Project:
*	- showQuickLinks()
*	- printCpanelBr()
*	- getShowHide()
*	- getShowHideHeaders()
*	- startQuickLinksCol()
*	- startDataDisplayCol()
*	- endDataDisplayCol()
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author Adam Moore
* @author David Poole <David.Poole@fccc.edu>
* @version 04-03-07
* @package Templates
* Copyright (C) 2003 - 2005 phpScheduleIt
*
* New functions added for MailZu
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @author Brian Wong <bwsource@users.sourceforge.net>
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
* @author Jeremy Fowler <jfowler06@users.sourceforge.net>
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/

// Get Link object
$link = CmnFns::getNewLink();

/**
* Print out a table of links for user or administrator
* This function prints out a table of links to
* other parts of the system.  If the user is an admin,
* it will print out links to administrative pages, also
* @param none
*/
function showQuickLinks() {
	global $conf;
	global $link;
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tableTitle" style="background-color:#0F93DF;">
		    <?=translate('My Quick Links')?>
		  </td>
          <td class="tableTitle" style="background-color:#0F93DF;"><div align="right">
              <? $link->doLink("javascript: help('quick_links');", '?', '', 'color: #FFFFFF', translate('Help') . ' - ' . translate('My Quick Links')) ?>
            </div>
          </td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr style="padding: 5px;" class="cellColor">
          <td colspan="2">
		<? echo "Quarantine Summary" == $_SESSION['sessionNav'] ? 
			' <p class="selectedLink"><b>&raquo;</b>':
			" <p><b>&#8250;</b>\t";
              	$link->doLink('summary.php', translate('Quarantine Summary')) ?>
            	</p>
		<? echo "My Quarantine" == $_SESSION['sessionNav'] ? 
			' <p class="selectedLink"><b>&raquo;</b>':
			" <p><b>&#8250;</b>\t";
              	$link->doLink('messagesIndex.php?ctype=A', translate('My Quarantine'));
            	echo '</p>';
		if (! Auth::isMailAdmin()) {	
		  echo "My Pending Requests" == $_SESSION['sessionNav'] ?
                      ' <p class="selectedLink"><b>&raquo;</b>':
                      " <p><b>&#8250;</b>\t";
                  $link->doLink('messagesPending.php?ctype=A', translate('My Pending Requests'));
		  echo '</p>';
		}
		?>
            	</p>
		<br>
		<? if (Auth::isMailAdmin()) {
		     if ($conf['app']['siteSummary']) {
  		       echo "Site Quarantine Summary" == $_SESSION['sessionNav'] ? 
		  	  ' <p class="selectedLink"><b>&raquo;</b>':
			  " <p><b>&#8250;</b>\t";
        	      	  $link->doLink('messagesSummary.php', translate('Site Quarantine Summary'));
            	       echo '</p>';
                     }

		  echo "Site Quarantine" == $_SESSION['sessionNav'] ?
                        ' <p class="selectedLink"><b>&raquo;</b>':
                        " <p><b>&#8250;</b>\t";
                  $link->doLink('messagesAdmin.php?ctype=A&searchOnly='.$conf['app']['searchOnly'], translate('Site Quarantine'));
		  echo '</p>';
		  echo "Site Pending Requests" == $_SESSION['sessionNav'] ?
                        ' <p class="selectedLink"><b>&raquo;</b>':
                        " <p><b>&#8250;</b>\t";
                  $link->doLink('messagesPendingAdmin.php?ctype=A', translate('Site Pending Requests'));
		  echo '</p>';
		  echo '<br>';
		}  
    if ((! Auth::isMailAdmin()) && ($conf['app']['showEmailAdmin'])) {
		  echo "Email Administrator" == $_SESSION['sessionNav'] ? 
			' <p class="selectedLink"><b>&raquo;</b>':
			" <p><b>&#8250;</b>\t";
              	  $link->doLink('send_mail.php', translate('Email Administrator'));   
            	  echo ' </p>';
		}
		?>
            	<p><b>&#8250;</b>
              	<? $link->doLink('javascript: help();', translate('Help')) ?>
            	</p>
		<br>
            	<p><b>&#8250;</b>
              	<? $link->doLink('index.php?logout=true', translate('Log Out')) ?>
            	</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?
}

/**
* Print out break to be used between tables
* @param none
*/
function printCpanelBr() {
	echo '<p>&nbsp;</p>';
}

/**
* Returns the proper expansion type for this table
*  based on cookie settings
* @param string table name of table to check
* @return either 'block' or 'none'
*/
function getShowHide($table) {
	if (isset($_COOKIE[$table]) && $_COOKIE[$table] == 'show') {
		return 'block';
	}
	else
		return 'none';
}

/**
* Returns the proper className for the rows of this table
*  based on cookie settings
* @param string table name of table to check
* @return 'visible' or 'hidden'
*/
function getShowHideHeaders($table) {
        if (isset($_COOKIE[$table]) && $_COOKIE[$table] == 'visible') {
                return 'visible';
        } else {
                return 'hidden';
	}
}

function startQuickLinksCol() {
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="vertical-align:top; width:16%; border:solid 2px #0F93DF; background-color:#FFFFFF;">
<? 
}

function startDataDisplayCol() {
?>
</td>
<td style="padding-left:5px; vertical-align:top;">
<?
}

function endDataDisplayCol() {
?>
</td>
</tr>
</table>
<?
}

/**
* Print 'Release', 'Delete' and 'Delete All' buttons 
* @param string $content_type: 'S' (default), 'B', ...
* @param bool $printDeleteAll: if true (default) print 'Delete All' button
*/
function printActionButtons( $printDeleteAll = true ) {
?>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<? 
	echo "<td align=\"left\"><input type=\"submit\" class=\"button\" name=\"action\" value=\"";
	if ($_SESSION['sessionNav'] == "My Pending Requests") {
		echo ( Auth::isMailAdmin() ? translate('Release') : translate('Cancel Request') );
		
	} else {
		echo ( Auth::isMailAdmin() ? translate('Release') : translate('Release/Request release') );
	}
	echo "\"></td>";
?>
	<td align="right"><input type="submit" class="button" name="action" value="<? echo translate('Delete'); ?>">
<? 	if ( $printDeleteAll )
		echo "<input type=\"submit\" class=\"button\" name=\"action\" value=\"".translate('Delete All')."\">";
?>
	</td>
</tr>
</table>
<?
}

/**
* Print 'Send Error Report' buttons 
* @param string $query_string
* @param array $error_array
*/
function printReportButtons( $query_string, $error_array, $process_action ) {

	$serialized_error_array = urlencode(serialize($error_array));
?>
<form name="error_report_form" action="sendErrorReport.php" method="POST">
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
	<input type="hidden" name="query_string" value="<? echo $query_string; ?> ">
	<input type="hidden" name="serialized_error_array" value="<? echo $serialized_error_array; ?>">
	<input type="hidden" name="process_action" value="<? echo $process_action ;?>">
	<td><center>
		<input type="submit" class="button" name="action" value="<? echo translate('Send report and go back'); ?>">&nbsp;
		<input type="submit" class="button" name="action" value="<? echo translate('Go back'); ?>">
	</center></td>
</tr>
</table>
</form>
<?
}

/**
* Print Message and flushes the output buffer.
*/

function printMessage($message) {
	$id = urlencode($message);
?>
	<div align="center" id="<? echo $id; ?>" style="display:block;">
		<H4><? echo $message; ?></H4>
	</div>
<? 
	ob_flush();
	flush();
}

/**
* Hides Message crested with printMessage and flushes the output buffer.
*/
function hideMessage($message) {
	$id = urlencode($message);
	echo "<script> document.getElementById('$id').style.display='none'; </script>";
	ob_flush();
	flush();
}
?>
