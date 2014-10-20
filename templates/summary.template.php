<?php
/**
* This file provides output functions for summary.php
* No data manipulation is done in this file
* @author Samuel Tran
* @author Jeremy Fowler <jfowler06@users.sourceforge.net>
* @version 04-03-2007
* @package Templates
*
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/


/**
* Print table listing messages in quarantine :
*	- spam (content type = 'S')
*	- attachment (content type = 'B')
*	- viruses (content type = 'V')
*	- bad headers (content type = H)
*	- pending requests ( RS = 'P')
* @param array $res containing spam and attachments of logged in user
*/
function showSummary($count_array) {
	global $link;

?>
	<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  		<tr>
    		<td class="tableBorder">

					<!-- Draw Summary table -->
      		<table width="100%" border="0" cellspacing="1" cellpadding="0">
        		<tr>
			<td colspan="5" class="tableTitle">
			<?php echo translate($_SESSION['sessionNav']); ?>
			</td>

        		<td class="tableTitle">
            		<div align="right">
              			<?php $link->doLink('javascript: help(\'msg_summary\');', '?', '', 'color: #FFFFFF;',
					translate('Help') . ' - ' . translate($_SESSION['sessionNav'])) ?>
            		</div>
        		</td>
        		</tr>
      		</table>


		<!-- Print summary table -->
    <table class="stdFont" width="100%" height="100%" border="0" cellspacing="1" cellpadding="0">

				<!-- Print table's headers -->
        <tr class="rowHeaders">
					<td width="15%">
						<?php echo translate('Date'); ?>
					</td>
					<td width="14%">
						<?php echo translate('Spam'); ?>
					</td>
       		<td width="14%">
						<?php echo translate('Banned'); ?>
					</td>
       		<td width="14%">
 						<?php echo translate('Viruses'); ?>
					</td>
       		<td width="14%">
 						<?php echo translate('Bad Headers'); ?>
					</td>
       		<td width="14%">
 						<?php echo translate('Pending Requests'); ?>
					</td>
       		<td width="15%">
 						<?php echo translate('Total'); ?>
					</td>
   			</tr>
			
			<?php  $i = 0;
					foreach ($count_array as $key => $val) { 
						echo '<tr class="' . 'cellColor' . ($i++%2) . ' align="center">';
						echo ($key == 'Total' ? '<td class="rowTotals">' : '<td class="rowNumValues">') . "$key</td> \n";
						foreach ($val as $subkey => $subval) {
	 						echo ( $key == 'Total' ? '<td class="rowTotals">' : '<td class="rowNumValues">') . "$subval</td> \n"; 
						}
					echo '</tr>';
					}
			?>
			</tr>
		</table>
		</td>
		</tr>
	</table>
<?php 
}

?>
