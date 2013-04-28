<?php
/**
* This file provides output functions for ctrlpnl.php
* No data manipulation is done in this file
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author Adam Moore
* @author David Poole <David.Poole@fccc.edu>
* @version 03-11-05
* @package Templates
*
* Copyright (C) 2003 - 2005 phpScheduleIt
* License: GPL, see LICENSE
*/

/**
* MailMime class
*/
include_once('lib/MailMime.class.php');

function startMessage() {
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="vertical-align:top; width:16%; border:solid 2px #0F93DF; background-color:#FFFFFF;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="tableTitle" style="background-color:#0F93DF;">
            <? echo translate('Message'); ?>
          </td>
          <td class="tableTitle" style="background-color:#0F93DF;">
            <div align="right"
              <a href="javascript: help('msg_view');" class="" style="color: #FFFFFF" onmouseover="javascript: window.status='Help - Message View'; return true;" onmouseout="javascript: window.status=''; return true;">?</a>
            </div>
          </td>
        </tr>
      </table>
<?
}

function endMessage() {
?>
    </td>
  </tr>
</table>
<?
}

/**
* Print row of message header (From,To,Subject,etc)
* $param The mime structure object and the specific header name
*/
function MsgPrintHeader($struct,$hdr_list) {
	
	foreach ($hdr_list as $hdr) {
	  $header_value = $struct->headers[strtolower($hdr)];
	  if (is_array($header_value)) {
	    $value_array = $header_value;
	    $count = count($value_array);
	    for ($i=0; $i < $count; $i++) {
	      $header_value = $value_array[$i];
	      $displayed_value = $header_value ? htmlspecialchars(trim($header_value)) : '(none)';
              echo ' <tr>' . "\n"
                . '      <td class="headerName"><nobr>' . translate($hdr) , ":</nobr></td>" . "\n"
                . '      <td class="headerValue">' . $displayed_value . '</td>' . "\n"
                . '    </tr>' . "\n";
	    }
	  } else {
            $displayed_value = $header_value ? htmlspecialchars(trim($header_value)) : '(none)';
            echo '    <tr>' . "\n"
               . '      <td class="headerName"><nobr>' . translate($hdr) . ":</nobr></td>" . "\n"
               . '      <td class="headerValue">' . $displayed_value . '</td>' . "\n"
               . '    </tr>' . "\n";
	  }
	}
}

/**
* Print row of optional message headers 
* $param The mime structure object and the specific header name
*/
function MsgPrintHeaderFull($struct,$hdr_list) {
       
        foreach ($hdr_list as $hdr) {
          $header_value = $struct->headers[strtolower($hdr)];
	  if (!$header_value) continue;
          if (is_array($header_value)) {
            $value_array = $header_value;
            $count = count($value_array);
            for ($i=0; $i < $count; $i++) {
              $header_value = $value_array[$i];
              $displayed_value = $header_value ? htmlspecialchars(trim($header_value)) : '(none)';
              echo '    <tr class="' . getShowHideHeaders('headers') . '">' . "\n"
                . '      <td class="headerName"><nobr>' . "$hdr:</nobr></td>" . "\n"
                . '      <td class="headerValue">' . $displayed_value . '</td>' . "\n"
                . '    </tr>' . "\n";
            }
          } else {
            $displayed_value = $header_value ? htmlspecialchars(trim($header_value)) : '(none)';
            echo '    <tr class="' . getShowHideHeaders('headers') . '">' . "\n"
               . '      <td class="headerName"><nobr>' . "$hdr:</nobr></td>" . "\n"
               . '      <td class="headerValue">' . $displayed_value . '</td>' . "\n"
               . '    </tr>' . "\n";
          }
        }
}

/**
* Print table of message options (Toggle Header, Back to Messages, etc..)
* $param none
*/
function MsgDisplayOptions($mail_id, $recip_email) {
	// Double encode needed for javascript pass-through
	$enc_mail_id = urlencode(urlencode($mail_id));
	$enc_recip_email = urlencode(urlencode($recip_email));
?>
<table class="stdFont" width="100%">
  <tr>
    <td align="left">
      <a href="javascript: history.back();">&#8249;&#8249; <? echo translate('BackMessageIndex'); ?> </a>
    </td>
    <td align="right">
      <a href="javascript: ViewOriginal('<? echo $enc_mail_id ?>','<? echo $enc_recip_email ?>');"> <? echo translate('ViewOriginal'); ?></a>
      |
      <a href="javascript: void(1);" onclick="showHideFullHeaders('headers');">
   	      <? echo translate('ToggleHeaders'); ?></a>
     </td>
  </tr>
</table>
<?
}

/**
* Print row of original message options (Print, Close, etc..)
* $param none
*/
function MsgOriginalOptions() {
?>
  <table width="100%">
   <tr>
    <td class="stdFont" align="right">
      <a href="javascript: window.print();"> <? echo translate('Print'); ?></a>
       |
      <a href="javascript: window.close();"> <? echo translate('CloseWindow'); ?> </a>
    </td>
   </tr>
    <tr>
     <td class="stdFont" bgcolor="#FAFAFA">
<?
}


/**
* Print table of message headers (From,To,Subject,etc)
* $param The mime structure object 
*/
function MsgDisplayHeaders($struct) {
	
	$headers = array ('From', 
			  'To', 
			  'Date', 
			  'Subject'
			 );

	$headers_full = array ("Received", 
			       "Message-ID",
			       "X-Spam-Status",
			       "X-Amavis-Alert"
			      ); 
	
	echo '<table id="headers" width="100%" border="0" cellspacing="0" cellpadding="1" align="center" style="border-collapse:collapse">' . "\n";
	MsgPrintHeader($struct,$headers);
	MsgPrintHeaderFull($struct,$headers_full);
	echo '</table>' . "\n";
}

/**
* Print table of message body
* $param The mime structure object
*/
function MsgDisplayBody($struct) {
	echo '<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">';
	echo '  <tr>';
	echo '    <td class="stdFont">';
	MsgParseBody($struct);
	echo '      <br>';
	echo '    </td>';
	echo '  </tr>';
	echo '</table>';
	MsgDisplayFooter();
}

/**  
* Print text of text/plain MIME entity
* $param The body of a mime structure object
*/
function MsgBodyPlainText($text) {
	echo nl2br(htmlspecialchars($text));
}

/**
* Print HTML of text/html MIME entity
* $param The body of a mime structure object
*/ 
function MsgBodyHtmlText($text) {
	echo sanitizeHTML($text);
}

/**
* Print list of attachments
* $param The body of a mime structure object
*/ 
function MsgDisplayFooter() {
	// Globals read from MailMime.class.php
	global $filelist;
	global $errors;
	if ( $filelist || $errors ) {
	// Space before attachment or warning list
	echo '<br>';
	echo '<hr>';
	echo '<table class="stdFont" width="100%" border="0" cellspacing="0" cellpadding="1" align="center">';
	  echo '<tr>';
	  echo '  <td>';
	
	  if ($filelist) {
	    echo '--Attachments--<br>';
	    foreach ($filelist as $file) {
	      echo $file . '<br>';
	    }
       	  }
	  if ($errors) {
            echo '<br>--warnings--<br>';
	    foreach (array_keys($errors) as $errmsg) {
	      echo $errmsg . '<br>';
	    }
	  }
	  echo '  </td>';
	  echo '</tr>';
    	  echo '</table>';
	}
}
