<?php
/**
* This file provides output functions for messagesIndex.php
* No data manipulation is done in this file
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @author Brian Wong <bwsource@users.sourceforge.net>
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
* @author Jeremy Fowler <jfowler06@users.sourceforge.net>
* @version 04-03-2007
* @package Templates
*
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/


/**
* Print table listing messages in quarantine
* This function prints a table of all spam/attachment in quarantine
* for the current user.  It also
* provides a way for them to release and delete
* their messages
* @param string $content_type 'B', 'S', ...
* @param mixed $res array of message data
* @param integer $page current page number
* @param string $order previous order field
* @param string $vert previous vertical order
* @param string $numRows total number of rows in table
*/
function showMessagesTable($content_type, $res, $page, $order, $vert, $numRows = 0) {
	global $link;
	global $conf;

	// grab the display size limit set in config.php
	$sizeLimit = isset ( $conf['app']['displaySizeLimit'] ) && is_numeric( $conf['app']['displaySizeLimit'] ) ?
			$conf['app']['displaySizeLimit'] : 50;

	if ('ASC' == $vert) {
		$new_vert = 'DESC';
		$mouseover_text = translate('Sort by descending order');
	} else {
		$new_vert='ASC';
		$mouseover_text = translate('Sort by ascending order');
	}

	// If there are messages in quarantine, draw tables
	if ( $res ) {
		// $res is only a subset of the message quarantine
		// Its number of rows is $sizeLimit
		$count = $numRows;
		$start_entry = 0;
		$end_entry = count($res);
		$query_string = $_SERVER['QUERY_STRING'];

		$pager_html = ( $count > $sizeLimit ) ? CmnFns::genMultiPagesLinks( $page, $sizeLimit, $count) : ''; ?>

		<form name="messages_process_form" action="messagesProcessing.php" method="POST">

		<input type="hidden" name="ctype" value="<? echo $content_type; ?>">
		<input type="hidden" name="query_string" value="<? echo $query_string; ?>">

		<? // Draw 'Release', 'Delete' and 'Delete All' buttons 
		printActionButtons((! CmnFns::didSearch() && ! ("Site Quarantine" == $_SESSION['sessionNav'])) );
		// Draw 'Select All, Clear All' and multi pages links 
		printSelectAndPager($pager_html);
	 
        	flush(); ?>

		<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  			<tr>
    			<td class="tableBorder">

			<!-- Draw 'Showing messages ...' table -->
      			<table width="100%" border="0" cellspacing="1" cellpadding="0">
        			<tr>
				<td colspan="5" class="tableTitle">
				<? echo translate('Showing messages', 
					array( number_format($page*$sizeLimit+1), number_format($page*$sizeLimit+$end_entry), $count )); ?>
				</td>

        			<td class="tableTitle">
            			<div align="right">
              				<? $link->doLink('javascript: help(\'msg_index\');', '?', '', 'color: #FFFFFF;',
						translate('Help') . ' - ' . translate('My Quarantine')) ?>
            			</div>
        			</td>
        			</tr>
      			</table>

			<!-- Print messages table -->
      			<table width="100%" border="0" cellspacing="1" cellpadding="0">

				<!-- Print table's headers -->
			<tr class="rowHeaders">
				<td width="3%">&nbsp;</td>
				<? if ( (count($_SESSION['sessionMail']) > 1) || ((Auth::isMailAdmin()) && 
				      ("Site Quarantine" == $_SESSION['sessionNav'] || "Site Pending Requests" == $_SESSION['sessionNav']))) { ?>
				<td width="15%" <? echo "recip.email"==$order?' class="reservedCell"':''; ?>>
					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=recip.email&amp;vert=' . $new_vert, translate('To'), '', '', $mouseover_text) ?>
				</td>
				<? } ?>
				<td width="15%" <? echo "from_addr"==$order?' class="reservedCell"':''; ?>>
 					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=from_addr&amp;vert=' . $new_vert, translate('From'), '', '', $mouseover_text) ?>
				</td>
				<td width="40%" <? echo "msgs.subject"==$order?' class="reservedCell"':''; ?>>
					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=msgs.subject&amp;vert=' . $new_vert, translate('Subject'), '', '', $mouseover_text) ?>
				</td>
				<td width="10%" <? echo "msgs.time_num"==$order?' class="reservedCell"':''; ?>>
					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=msgs.time_num&amp;vert=' . $new_vert, translate('Date'), '', '', $mouseover_text) ?>
				</td>
				<td width="7%" <? echo "spam_level"==$order?' class="reservedCell"':''; ?>>
					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=spam_level&amp;vert=' . $new_vert, translate('Score'), '', '', $mouseover_text) ?>
				</td>
				<td width="10%" <? echo "msgs.content"==$order?' class="reservedCell"':''; ?>>
					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=msgs.content&amp;vert=' . $new_vert, translate('Content Type'), '', '', $mouseover_text) ?>
				</td>
					<? if ( (Auth::isMailAdmin()) && 
				      ("Site Quarantine" == $_SESSION['sessionNav'] || "Site Pending Requests" == $_SESSION['sessionNav'])) { ?>
				<td width="10%" <? echo "mail_id"==$order?' class="reservedCell"':''; ?>>
					<? $link->doLink($_SERVER['PHP_SELF'] . '?' . CmnFns::querystring_exclude_vars( array('order','vert'))
					. '&amp;order=mail_id&amp;vert=' . $new_vert, translate('Mail ID'), '', '', $mouseover_text) ?>
				</td>
				<? } ?>
			</tr>

        			<? // For each line in table, print message fields
				for ($i = $start_entry;  $i < $end_entry; $i++) {
					$rs = $res[$i];
					// Make sure that there is a clickable subject
					$subject = $rs['subject'] ? htmlspecialchars($rs['subject']) : '(none)';
					$from = $rs['from_addr'] ? htmlspecialchars($rs['from_addr']) : '(none)';
					if ( (count($_SESSION['sessionMail']) > 1) || (Auth::isMailAdmin() && 
					   ("Site Quarantine" == $_SESSION['sessionNav'] || "Site Pending Requests" == $_SESSION['sessionNav']))) {
						$to = $rs['email'] ? htmlspecialchars($rs['email']) : '(none)';
					}
					$class = ( $rs['content'] == 'V' ? 'cellVirus' : 'cellColor') . ($i%2);
        				echo "<tr class=\"$class\" align=\"center\">";

					echo '  <td><input type="checkbox" onclick="ColorRow(this,\'lightyellow\')" 
						name="mail_id_array[]" value="' . $rs['mail_id'] . '_' . $rs['email'] . '"></td>';
					if ( (count($_SESSION['sessionMail']) > 1) || (Auth::isMailAdmin() && 
					   ("Site Quarantine" == $_SESSION['sessionNav'] || "Site Pending Requests" == $_SESSION['sessionNav']))) {
						echo '  <td>' . $to . '</td>';
					}
					echo '  <td>' . $from . '</td>';
					echo '  <td>' . 
						// Only allow link to view mail if the mail is stored in SQL
						($rs['quar_type'] == 'Q' ?
						$link->getLink('read_mail.php' . '?mail_id=' . urlencode($rs['mail_id']) .
						"&amp;recip_email=" . urlencode($rs['email']) .
						"&amp;$query_string", $subject, '', '',
						translate('View this message'), ($rs['rs']=='v' || $rs['rs']=='p' ? false : true)) 
						: "<b>$subject</b>") . 
						'</td>';
					echo '  <td>' . CmnFns::formatDateTime($rs['time_num']) . '</td>';

					echo '  <td>' . ( $rs['content'] == 'S' ? $rs['spam_level'] : 'N/A') . '</td>';
					
					switch ($rs['content']) {
					case 'S':
						$type = translate('Spam');	
						break;	
					case 'B':
						$type = translate('Banned');	
						break;	
					case 'V':
						$type = translate('Virus');	
						break;	
					case 'H':
						$type = translate('Bad Header');	
						break;	
					}

					echo ( $rs['content'] == 'V' ? '<td class="typeVirus">' : '<td>') . $type . '</td>';

					if ( Auth::isMailAdmin() && 
					   ("Site Quarantine" == $_SESSION['sessionNav'] || "Site Pending Requests" == $_SESSION['sessionNav'])) {
						echo '  <td>' . $rs['mail_id'] . '</td>';
					}

					echo "</tr>\n";
				} ?>
      			</table>

    			</td>
  			</tr>
		</table>

		<? // Draw 'Select All, Clear All' and multi pages links 
		printSelectAndPager($pager_html);
		// Draw 'Release', 'Delete' and 'Delete All' buttons
		printActionButtons((! CmnFns::didSearch() && ! ("Site Quarantine" == $_SESSION['sessionNav'])) );

		unset($res); ?>

		</form>
	<? } else {
		echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">';
		echo '<tr><td align="center">' . translate('There are no matching records.') . '</td></tr>';
		echo '</table>';
	}

}

/**
* Print Search Engine
* $param $content_type 
*/
function printSearchEngine($content_type, $submit_page, $full_search = false) {
	global $link;
?>
<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td class="tableBorder">
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
      	<tr>
	  <td class="tableTitle">
	    <a href="javascript: void(0);" onclick="showHideSearch('search');">&#8250; <?=translate('Search')?></a>
	  </td>
	  <td class="tableTitle">
            <div align="right">
              <? $link->doLink('javascript: help(\'search\');', '?', '', 'color: #FFFFFF;', translate('Help') . ' - ' . translate('My Re
servations')) ?>
            </div>
          </td>
	</tr>
</table>
<div id="search" style="display: <?= getShowHide('search') ?>">
  <table width="100%" border="0" cellspacing="1" cellpadding="0">
    <tr class="cellColor"><td><center><? CmnFns::searchEngine($content_type, $submit_page, $full_search); ?></center></td></tr>
  </table>
</div>
    </td>
  </tr>
</table>
<?
}


/**
* Print 'Select All, Clear All' and multi pages links
* @param $pager_html multiple pages links
*/
function printSelectAndPager($pager_html) {
?>

<table class="stdFont" width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
	<a href="javascript:CheckAll(document.messages_process_form);"><? echo translate('Select All'); ?></a>&nbsp;|&nbsp;
	<a href="javascript:CheckNone(document.messages_process_form);"><? echo translate('Clear All'); ?></a>
</td>
<td>
	<div align="right">
<?
	// Draw the paging links if more than 1 page
	echo $pager_html . "\n";
?>
	</div>
</td>
</tr>
</table>
<?
}

/**
* Print 'No message was selected' warning and 'Back to messages' link
* @param none
*/
function printNoMesgWarning() {
	global $link;
?>
	<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
		<tr><td class="tableBorder">
			<table width="100%" border="0" cellspacing="1" cellpadding="0">
				<tr class="cellColor"><td>
					<center><? echo translate('No message was selected'); ?><br>
					<? $link->doLink('javascript: history.back();','&#8249;&#8249; ' . translate('BackMessageIndex'), '', '',
						translate('BackMessageIndex')); ?></center>
				</td></tr>
			</table>
		</td></tr>
	</table>
<?
}

/**
* Print table of messages that were processed without success
* for the current user.
* @param string $action 'Release', 'Delete', ...
* @param string $content_type 'B', 'S', ...
* @param mixed $res array of message data
*/
function showFailedMessagesTable($action, $content_type, $res) {
	global $link;
?>

	<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  	<tr>
		<!-- Print table title -->
			<td class="tableBorder">
				<table width="100%" border="0" cellspacing="1" cellpadding="0">
				<tr>
			<td colspan="5" class="tableTitle">
			<? 	if ( $action == translate('Release') || $action == translate('Release/Request release') )
					echo translate('A problem occured when trying to release the following messages');
				elseif ( $action == translate('Delete') || $action == translate('Delete All') )
					echo translate('A problem occured when trying to delete the following messages');
 			?>
			</td>
					<td class="tableTitle">
							<div align="right">
								<? $link->doLink('javascript: help(\'msg_index\');', '?', '', 'color: #FFFFFF;', translate('Help') ) ?>
							</div>
					</td>
				</tr>
				</table>

		<!-- Print table headers -->
					<table width="100%" border="0" cellspacing="1" cellpadding="0">
					<tr class="rowHeaders">
							<td width="20%"><? echo translate('From'); ?></td>
							<td width="30%"><? echo translate('Subject'); ?></td>
							<td width="10%"><? echo translate('Date'); ?></td>
			<? if ( 'S' == $content_type ) { ?>
							<td width="10%"><? echo translate('Score'); ?></td>
			<? } ?>
							<td width="30%"><? echo translate('Status'); ?></td>
		</tr>

		<!-- Print table rows -->
		<?
		for ($i = 0; is_array($res) && $i < count($res); $i++) {
			$rs = $res[$i];
			$subject = $rs['subject'] ? $rs['subject'] : '(none)';
			$class = 'cellColor' . ($i%2);
			echo "<tr class=\"$class\" align=\"center\">"
				. ' <td>' . $rs['from_addr'] . '</td>'
				. ' <td>' . $subject . '</td>'
				. ' <td>' . CmnFns::formatDateTime($rs['time_num']) . '</td>';
			if ( 'S' == $content_type )
				echo ' <td>' . $rs['spam_level'] . '</td>';
				echo ' <td>' . $rs['status'] . '</td>';
				echo "</tr>\n";
		} ?>
		</table>
		</td>
	</tr>
	</table>	
<?
}

?>
