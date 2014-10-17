<?php
/**
* MailEngine class
* @author Brian Wong <bwsource@users.sourceforge.net>
* @version 04-12-05
* @package MailEngine
*
* Copyright (C) 2003 - 2007 MailZu
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');
/**
* CmnFns class
*/
include_once('lib/CmnFns.class.php');
/**
* Pear::DB
*/
if ($GLOBALS['conf']['app']['safeMode']) {
	ini_set('include_path', ( dirname(__FILE__) . '/pear/' . PATH_SEPARATOR . ini_get('include_path') ));
	include_once('pear/Mail/mimeDecode.php');
} else {
	include_once('Mail/mimeDecode.php');
}

/**
* Include htmlfilter class
*/
include_once('lib/htmlfilter.php');


/**
* Provide all MIME functionality
*/

/**
* Get full MIME type
* $param The mime structure object
*/
function GetCtype($struct) {
	$ctype_p = strtolower(trim($struct->ctype_primary));
	$ctype_s = strtolower(trim($struct->ctype_secondary));
	$type = $ctype_p . '/' . $ctype_s;
	return $type;
}

/**
* Recursively parse MIME structure
* $param The mime structure object
*/
$filelist = array ();
$errors = array ();

function MsgParseBody($struct) {
	global $filelist;
	global $errors;
	$ctype_p = strtolower(trim($struct->ctype_primary));
	$ctype_s = strtolower(trim($struct->ctype_secondary));

	switch ($ctype_p) {
		case "multipart":
			switch ($ctype_s) {
				case "alternative":
					// Handle multipart/alternative parts
					$alt_entity = FindMultiAlt($struct->parts);
					// Ignore if we return false NEEDS WORK
					if ($alt_entity) MsgParseBody($alt_entity);
					break;
				case "related":
					// Handle multipart/related parts
					$rel_entities = FindMultiRel($struct);
					foreach ($rel_entities as $ent) {
						MsgParseBody($ent);
					}
					break;
				default:
					// Probably multipart/mixed here
					// Recursively process nested mime entities
					if ( is_array($struct->parts) || is_object($struct->parts) ) {
						foreach ($struct->parts as $cur_part) {
							MsgParseBody($cur_part);
						}
					} else {
						$errors['Invalid or Corrupt MIME Detected.'] = true;
					}
					break;
			}
			break;
		case "text":
			// Do not display attached text types
			if (property_exists($struct, "d_parameters")) {
				if ($attachment = $struct->d_parameters['filename'] or $attachment = $struct->d_parameters['name']) {
					array_push($filelist, $attachment);
					break;
				}
			}
			switch ($ctype_s) {
				// Plain text
				case "plain":
					MsgBodyPlainText($struct->body);
					break;
				// HTML text
				case "html":
					MsgBodyHtmlText($struct->body);
					break;
				// Text type we do not support
				default:
					$errors['Portions of text could not be displayed'] = true;
			}
			break;
		default:
			// Save the listed filename or notify the
			// reader that this mail is not displayed completely
			$attachment = $struct->d_parameters['filename'];
			$attachment ? array_push($filelist, $attachment) : $errors['Unsupported MIME objects present'] = true;
	}
}

/**
* Get the best MIME entity for multipart/alternative
* Adapted from SqurrelMail
* $param Array of MIME entities
* $return Single MIME entity
*/
function FindMultiAlt($parts) {
	$alt_pref = array ('text/plain', 'text/html');
	$best_view = 0;
	// Bad Headers sometimes have invalid MIME....
	if ( is_array($parts) || is_object($parts) ) {
		foreach ($parts as $cur_part) {
			$type = GetCtype($cur_part);
			if ($type == 'multipart/related') {
				$type = $cur_part->d_parameters['type'];
				// Mozilla bug. Mozilla does not provide the parameter type.
				if (!$type) $type = 'text/html';
			}
			$altCount = count($alt_pref);
			for ($j = $best_view; $j < $altCount; ++$j) {
				if (($alt_pref[$j] == $type) && ($j >= $best_view)) {
					$best_view = $j;
					$struct = $cur_part;
				}
			}
		}
		return $struct;
	} else {
		$errors['Invalid or Corrupt MIME Detected.'] = true;
	}
}

/**
* Get the list of related entities for multipart/related
* Adapted from SqurrelMail
* $param multipart/alternative structure
* @return List of MIME entities
*/
function FindMultiRel($struct) {
	$entities = array();
	$type = $struct->d_parameters['type'];
	// Mozilla bug. Mozilla does not provide the parameter type.
	if (!$type) $type = 'text/html';
	// Bad Headers sometimes have invalid MIME....
	if ( is_array($struct->parts) || is_object($struct->parts) ) {
		foreach ($struct->parts as $part) {
			if (GetCtype($part) == $type || GetCtype($part) == "multipart/alternative") {
				array_push($entities,$part);
			}
		}
	} else {
		$errors['Invalid or Corrupt MIME Detected.'] = true;
	}
	return $entities;
}

// Wrapper script for htmlfilter. Settings taken
// from SquirrelMail
function sanitizeHTML($body) {
	if (isset($_COOKIE['lang']) && file_exists("img/".substr($_COOKIE['lang'],0,2).".blocked_img.png")) {
		$secremoveimg = "img/".substr($_COOKIE['lang'],0,2).".blocked_img.png";
	} else {
		$secremoveimg = "img/blocked_img.png";
	}
	$tag_list = Array(
			false,
			"object",
			"meta",
			"html",
			"head",
			"base",
			"link",
			"frame",
			"iframe",
			"plaintext",
			"marquee"
			);

	$rm_tags_with_content = Array(
				"script",
				"applet",
				"embed",
				"title",
				"frameset",
				"xml",
				"style"
				);

	$self_closing_tags = Array(
				"img",
				"br",
				"hr",
				"input"
				);

	$force_tag_closing = true;

	$rm_attnames = Array(
				"/.*/" =>
				Array(
					"/target/i",
					"/^on.*/i",
					"/^dynsrc/i",
					"/^data.*/i",
					"/^lowsrc.*/i"
				)
			);

	$bad_attvals = Array(
				"/.*/" =>
				Array(
					"/^src|background/i" =>
					Array(
						Array(
							"/^([\'\"])\s*\S+script\s*:.*([\'\"])/si",
							"/^([\'\"])\s*mocha\s*:*.*([\'\"])/si",
							"/^([\'\"])\s*about\s*:.*([\'\"])/si",
							"/^([\'\"])\s*https*:.*([\'\"])/si",
							"/^([\'\"])\s*cid*:.*([\'\"])/si"
						),
						Array(
							"\\1$secremoveimg\\2",
							"\\1$secremoveimg\\2",
							"\\1$secremoveimg\\2",
							"\\1$secremoveimg\\2",
							"\\1$secremoveimg\\2"
						)
					),
					"/^href|action/i" =>
					Array(
						Array(
							"/^([\'\"])\s*\S+script\s*:.*([\'\"])/si",
							"/^([\'\"])\s*mocha\s*:*.*([\'\"])/si",
							"/^([\'\"])\s*about\s*:.*([\'\"])/si"
						),
						Array(
							"\\1#\\1",
							"\\1#\\1",
							"\\1#\\1",
							"\\1#\\1"
						)
					),
					"/^style/i" =>
					Array(
						Array(
							"/expression/i",
							"/binding/i",
							"/behaviou*r/i",
							"/include-source/i",
							"/url\s*\(\s*([\'\"])\s*\S+script\s*:.*([\'\"])\s*\)/si",
							"/url\s*\(\s*([\'\"])\s*mocha\s*:.*([\'\"])\s*\)/si",
							"/url\s*\(\s*([\'\"])\s*about\s*:.*([\'\"])\s*\)/si",
							"/(.*)\s*:\s*url\s*\(\s*([\'\"]*)\s*\S+script\s*:.*([\'\"]*)\s*\)/si",
							"/url\(([\'\"])\s*https*:.*([\'\"])\)/si"
						),
						Array(
							"idiocy",
							"idiocy",
							"idiocy",
							"idiocy",
							"url(\\1#\\1)",
							"url(\\1#\\1)",
							"url(\\1#\\1)",
							"url(\\1#\\1)",
							"url(\\1#\\1)",
							"\\1:url(\\2#\\3)",
							"url(\\1$secremoveimg\\1)"
						)
					)
				)
			);

	$add_attr_to_tag = Array("/^a$/i" => Array('target'=>'"_new"'));

	$trusted_html = sanitize($body,
				$tag_list,
				$rm_tags_with_content,
				$self_closing_tags,
				$force_tag_closing,
				$rm_attnames,
				$bad_attvals,
				$add_attr_to_tag
			);

	return $trusted_html;
}
?>
