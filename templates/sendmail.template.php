<?php
/**
* @version 04-03-2007
* @package Templates
*
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/

include_once("lib/PHPMailer.class.php");

function printsendmail(){
	global $conf;
	global $link;
?>
	<table width="100%" border="0" cellspacing="0" cellpadding="1">
		<tr>
		<td class="tableBorder">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
                                <tr>
                                <td class="tableTitle">
				<?php
				$adminEmail = $conf['app']['adminEmail'];
				$emailList = '';
				if ( is_array($adminEmail) ) {
					foreach ($adminEmail as $email) {
						$emailList .= $emailList == '' ? $email : ", $email";
					}
				} else {
					$emailList = $adminEmail;
				}
				echo translate('Email Administrator') . " ($emailList)"; 
				?>

				</td>
				<td class="tableTitle">
                                <div align="right">
                                        <?php $link->doLink('javascript: help(\'msg_index\');', '?', '', 'color: #FFFFFF;',
                                                translate('Help') . ' - ' . translate('Email Administrator')) ?>
                                </div>
                                </td>
				</tr>
		</table>

		<table class="stdFont" width="100%" height="100%" border="0" cellspacing="1" cellpadding="0">

			<tr class="cellColor" align="left">
			<form name="sendmail_to_admin_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<td><br />
			&nbsp;&nbsp;<?php echo translate('Subject') . ": " ;?><br />
			&nbsp;&nbsp;<input name="subject" type="text" size="60"><br /><br />
			&nbsp;&nbsp;<?php echo translate('Message') . ": " ;?><br />
			&nbsp;&nbsp;<textarea name="body" cols="60" rows="15"></textarea><br/>
			&nbsp;&nbsp;<input type="submit" class="button" name="action" value="send"><br /><br />
			</form>
			</td>
			</tr>
		</table>	
		</td>
		</tr>
	</table>

<?php
}


function verifyAndSendMail()
{
	global $conf;
	$subject = "[MailZu] " . stripslashes(CmnFns::getGlobalVar('subject', POST));
	$body = stripslashes(CmnFns::getGlobalVar('body', POST));
	if( $subject != '' && $body != '' ){
		$adminEmail = $conf['app']['adminEmail'];
		$sub = "[ Email Administrator ] Notification from '" . $_SESSION['sessionID'] . "'";
		$mailer = new PHPMailer();
		if ( is_array($adminEmail) ) {
			foreach ($adminEmail as $email) {
				$mailer->AddAddress($email, '');
			}
		} else {
			$mailer->AddAddress($adminEmail, '');
		}
		$mailer->FromName = $_SESSION['sessionID'];
		$mailer->From = $_SESSION['sessionMail'][0];
		$mailer->Subject = $subject;
		$mailer->Body = $body;
		$mailer->Send();
		CmnFns::redirect_js('summary.php');
	}else{
		CmnFns::do_error_box(translate('You have to type some text'), '', false);
		printsendmail();
	}
}

?>
