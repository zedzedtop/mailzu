<?php
/**
* English (en) translation file.
* Based on phpScheduleIt translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @author Brian Wong <bwsource@users.sourceforge.net>
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
* @author Jeremy Fowler <jfowler06@users.sourceforge.net>
* @version 04-03-07
* @package Languages
*
* Copyright (C) 2005 - 2007 MailZu
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all of the strings that are used throughout phpScheduleit.
// Please save the translated file as '2 letter language code'.lang.php.  For example, en.lang.php.
// 
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  If there
//  is no direct translation, please provide the closest translation.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
//  Also, please add a help translation for your language using en.help.php as a base.
//
// You will probably keep all sprintf (%s) tags in their current place.  These tags
//  are there as a substitution placeholder.  Please check the output after translating
//  to be sure that the sentences make sense.
//
// + Please use single quotes ' around all $strings.  If you need to use the ' character, please enter it as \'
// + Please use double quotes " around all $email.  If you need to use the " character, please enter it as \"
//
// + For all $dates please use the PHP strftime() syntax
//    http://us2.php.net/manual/en/function.strftime.php
//
// + Non-intuitive parts of this file will be explained with comments.  If you
//    have any questions, please email lqqkout13@users.sourceforge.net
//    or post questions in the Developers forum on SourceForge
//    http://sourceforge.net/forum/forum.php?forum_id=331297
///////////////////////////////////////////////////////////

////////////////////////////////
/* Do not modify this section */
////////////////////////////////
global $strings;			  //
global $email;				  //
global $dates;				  //
global $charset;			  //
global $letters;			  //
global $days_full;			  //
global $days_abbr;			  //
global $days_two;			  //
global $days_letter;		  //
global $months_full;		  //
global $months_abbr;		  //
global $days_letter;		  //
/******************************/

// Charset for this language
// 'iso-8859-1' will work for most languages
$charset = 'iso-8859-1';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
// The three letter abbreviation
$days_abbr = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
// The two letter abbreviation
$days_two  = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
// The one letter abbreviation
$days_letter = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
// The three letter month name
$months_abbr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%m/%d/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%m/%d/%Y @';
$dates['header'] = '%A, %B %d, %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'hours';
$strings['minutes'] = 'minutes';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'Welcome Back, %s';
$strings['Log Out'] = 'Log Out';
$strings['Help'] = 'Help';

$strings['Admin Email'] = 'Admin Email';

$strings['Default'] = 'Default';
$strings['Reset'] = 'Reset';
$strings['Edit'] = 'Edit';
$strings['Delete'] = 'Delete';
$strings['Cancel'] = 'Cancel';
$strings['View'] = 'View';
$strings['Modify'] = 'Modify';
$strings['Save'] = 'Save';
$strings['Back'] = 'Back';
$strings['BackMessageIndex'] = 'Back to Messages';
$strings['ToggleHeaders'] = 'Toggle Headers';
$strings['ViewOriginal'] = 'View Original';
$strings['Next'] = 'Next';
$strings['Close Window'] = 'Close Window';
$strings['Search'] = 'Search';
$strings['Clear'] = 'Clear';

$strings['Days to Show'] = 'Days to Show';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Hidden';
$strings['Show Summary'] = 'Show Summary';
$strings['Add Schedule'] = 'Add Schedule';
$strings['Edit Schedule'] = 'Edit Schedule';
$strings['No'] = 'No';
$strings['Yes'] = 'Yes';
$strings['Name'] = 'Name';
$strings['First Name'] = 'First Name';
$strings['Last Name'] = 'Last Name';
$strings['Resource Name'] = 'Resource Name';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Institution';
$strings['Phone'] = 'Phone';
$strings['Password'] = 'Password';
$strings['Permissions'] = 'Permissions';
$strings['View information about'] = 'View information about %s %s';
$strings['Send email to'] = 'Send email to %s %s';
$strings['Reset password for'] = 'Reset password for %s %s';
$strings['Edit permissions for'] = 'Edit permissions for %s %s';
$strings['Position'] = 'Position';
$strings['Password (6 char min)'] = 'Password (%s char min)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Re-Enter Password';

$strings['Date'] = 'Date';
$strings['Email Users'] = 'Email Users';
$strings['Subject'] = 'Subject';
$strings['Message'] = 'Message';
$strings['Send Email'] = 'Send Email';
$strings['problem sending email'] = 'Sorry, there was a problem sending your email. Please try again later.';
$strings['The email sent successfully.'] = 'The email sent successfully.';
$strings['Email address'] = 'Email address';
$strings['Please Log In'] = 'Please Log In';
$strings['Keep me logged in'] = 'Keep me logged in <br/>(requires cookies)';
$strings['Password'] = 'Password';
$strings['Log In'] = 'Log In';
$strings['Get online help'] = 'Get online help';
$strings['Language'] = 'Language';
$strings['(Default)'] = '(Default)';

$strings['Email Administrator'] = 'Email Administrator';

$strings['N/A'] = 'N/A';
$strings['Summary'] = 'Summary';

$strings['View stats for schedule'] = 'View stats for schedule:';
$strings['At A Glance'] = 'At A Glance';
$strings['Total Users'] = 'Total Users:';
$strings['Total Resources'] = 'Total Resources:';
$strings['Total Reservations'] = 'Total Reservations:';
$strings['Max Reservation'] = 'Max Reservation:';
$strings['Min Reservation'] = 'Min Reservation:';
$strings['Avg Reservation'] = 'Avg Reservation:';
$strings['Most Active Resource'] = 'Most Active Resource:';
$strings['Most Active User'] = 'Most Active User:';
$strings['System Stats'] = 'System Stats';
$strings['phpScheduleIt version'] = 'phpScheduleIt version:';
$strings['Database backend'] = 'Database backend:';
$strings['Database name'] = 'Database name:';
$strings['PHP version'] = 'PHP version:';
$strings['Server OS'] = 'Server OS:';
$strings['Server name'] = 'Server name:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt root directory:';
$strings['Using permissions'] = 'Using permissions:';
$strings['Using logging'] = 'Using logging:';
$strings['Log file'] = 'Log file:';
$strings['Admin email address'] = 'Admin email address:';
$strings['Tech email address'] = 'Tech email address:';
$strings['CC email addresses'] = 'CC email addresses:';
$strings['Reservation start time'] = 'Reservation start time:';
$strings['Reservation end time'] = 'Reservation end time:';
$strings['Days shown at a time'] = 'Days shown at a time:';
$strings['Reservations'] = 'Reservations';
$strings['Return to top'] = 'Return to top';
$strings['for'] = 'for';

$strings['Per page'] = 'Per page:';
$strings['Page'] = 'Page:';

$strings['You are not logged in!'] = 'You are not logged in!';

$strings['Setup'] = 'Setup';
$strings['Invalid User Name/Password.'] = 'Invalid User Name/Password.';

$strings['Valid username is required'] = 'Valid username is required';

$strings['Close'] = 'Close';

$strings['Admin'] = 'Admin';

$strings['My Quick Links'] = 'My Quick Links';

$strings['Go to first page'] = 'Go to first page';
$strings['Go to last page'] = 'Go to last page';
$strings['Sort by descending order'] = 'Sort by descending order';
$strings['Sort by ascending order'] = 'Sort by ascending order';
$strings['Spam Quarantine'] = 'Spam Quarantine';
$strings['Message View'] = 'Message View';
$strings['Attachment Quarantine'] = 'Attachment Quarantine';
$strings['No such content type'] = 'No such content type';
$strings['No message was selected'] = 'No message was selected ...';
$strings['Unknown action type'] = 'Unknown action type ...';
$strings['A problem occured when trying to release the following messages'] = 'A problem occured when trying to release the following messages';
$strings['A problem occured when trying to delete the following messages'] = 'A problem occured when trying to delete the following messages';
$strings['Please release the following messages'] = 'Please release the following messages';
$strings['To'] = 'To';
$strings['From'] = 'From';
$strings['Subject'] = 'Subject';
$strings['Date'] = 'Date';
$strings['Score'] = 'Score';
$strings['Mail ID'] = 'Mail ID';
$strings['Status'] = 'Status';
$strings['Print'] = 'Print';
$strings['CloseWindow'] = 'Close';
$strings['Unknown server type'] = 'Unknown server type ...';
$strings['Showing messages'] = "Showing messages %s through %s &nbsp;&nbsp; (%s total)\r\n";
$strings['View this message'] = 'View this message';
$strings['Message Unavailable'] = 'Message Unavailable';
$strings['My Quarantine'] = 'My Quarantine';
$strings['Site Quarantine'] = 'Site Quarantine';
$strings['Message Processing'] = 'Message Processing';
$strings['Quarantine Summary'] = 'Quarantine Summary';
$strings['Site Quarantine Summary'] = 'Site Quarantine Summary';
$strings['Login'] = 'Login';
$strings['spam(s)'] = 'spam(s)';
$strings['attachment(s)'] = 'attachment(s)';
$strings['pending release request(s)'] = 'pending release request(s)';
$strings['virus(es)'] = 'virus(es)';
$strings['bad header(s)'] = 'bad header(s)';
$strings['You have to type some text'] = 'You have to type some text';
$strings['Release'] = 'Release';
$strings['Release/Request release'] = 'Release/Request release';
$strings['Request release'] = 'Request release';
$strings['Delete'] = 'Delete';
$strings['Delete All'] = 'Delete All';
$strings['Send report and go back'] = 'Send report and go back';
$strings['Go back'] = "Go back";
$strings['Select All'] = "Select All";
$strings['Clear All'] = "Clear All";
$strings['Access Denied'] = "Access Denied";
$strings['My Pending Requests'] = "My Pending Requests";
$strings['Site Pending Requests'] = "Site Pending Requests";
$strings['Cancel Request'] = "Cancel Request";
$strings['User is not allowed to login'] = "User is not allowed to login";
$strings['Authentication successful'] = "Authentication successful";
$strings['Authentication failed'] = "Authentication failed";
$strings['LDAP connection failed'] = "LDAP/AD connection failed";
$strings['Logout successful'] = "Logout successful";
$strings['IMAP Authentication: no match'] = "IMAP Authentication: no match";
$strings['Search for messages whose:'] = "Search for messages whose:";
$strings['Content Type'] = "Content Type";
$strings['Clear search results'] = "Clear search results";
$strings['contains'] = "contains";
$strings['doesn\'t contain'] = "doesn't contain";
$strings['equals'] = "equals";
$strings['doesn\'t equal'] = "doesn't equal";
$strings['All'] = "All";
$strings['Spam'] = "Spam";
$strings['Banned'] = "Banned";
$strings['Virus'] = "Virus";
$strings['Viruses'] = "Viruses";
$strings['Bad Header'] = "Bad Header";
$strings['Bad Headers'] = "Bad Headers";
$strings['Pending Requests'] = "Pending Requests";
$strings['last'] = "last";
$strings['first'] = "first";
$strings['previous'] = "previous";
$strings['There was an error executing your query'] = 'There was an error executing your query:';
$strings['There are no matching records.'] = 'There are no matching records.';
$strings['Domain'] = 'Domain';
$strings['Total'] = 'Total';
$strings['X-Amavis-Alert'] = 'X-Amavis-Alert';
$strings['Loading Summary...'] = 'Loading Summary...';
$strings['Retrieving Messages...'] = 'Retrieving Messages...';
?>
