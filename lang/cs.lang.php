<?php
/**
* Czech (cz) translation file.
* Based on phpScheduleIt translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*
* @author Vladimir Volcko <vtg@prolinux.cz>
* @author Petr Stehlik <pstehlik@sophics.cz>
* @version 06-05-07
* @package Languages
*
* Copyright (C) 2005 -2007 MailZu
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
$charset = 'utf-8';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvtek', 'Pátek', 'Sobota');
// The three letter abbreviation
$days_abbr = array('Ne ', 'Po ', 'Út ', 'St ', 'Čt ', 'Pá ', 'So ');
// The two letter abbreviation
$days_two  = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
// The one letter abbreviation
$days_letter = array('N', 'P', 'Ú', 'S', 'Č', 'P', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');
// The three letter month name
$months_abbr = array('Led', 'Úno', 'Bře', 'Dub', 'Kvě', 'Čěr', 'Čec', 'Srp', 'Zář', 'Říj', 'Lis', 'Pro');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%d/%m/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%d/%m/%Y @';
$dates['header'] = '%A, %B %d, %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'hodiny';
$strings['minutes'] = 'minuty';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'rrrr';
$strings['am'] = 'dop';
$strings['pm'] = 'odp';

$strings['Administrator'] = 'Administrátor';
$strings['Welcome Back'] = 'Vítejte zpět, %s';
$strings['Log Out'] = 'Odlogovat';
$strings['Help'] = 'Help';

$strings['Admin Email'] = 'Mail na admina';

$strings['Default'] = 'Default';
$strings['Reset'] = 'Reset';
$strings['Edit'] = 'Změnit';
$strings['Delete'] = 'Smazat';
$strings['Cancel'] = 'Přerušit';
$strings['View'] = 'Zobrazit';
$strings['Modify'] = 'Upravit';
$strings['Save'] = 'Uložit';
$strings['Back'] = 'Zpět';
$strings['BackMessageIndex'] = 'Zpět na zprávy';
$strings['ToggleHeaders'] = 'Přepínat hlavičky';
$strings['ViewOriginal'] = 'Zobrazit originál';
$strings['Next'] = 'Další';
$strings['Close Window'] = 'Zavřít okno';
$strings['Search'] = 'Prohledat';
$strings['Clear'] = 'Vyčistit';

$strings['Days to Show'] = 'Dny k zobrazení';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Skrytý';
$strings['Show Summary'] = 'Zobrazit přehled';
$strings['Add Schedule'] = 'Přidat plán ';
$strings['Edit Schedule'] = 'Editovat plán';
$strings['No'] = 'Ne';
$strings['Yes'] = 'Ano';
$strings['Name'] = 'Název';
$strings['First Name'] = 'Jméno';
$strings['Last Name'] = 'Příjmení';
$strings['Resource Name'] = 'Název zdroje';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Instituce';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Heslo';
$strings['Permissions'] = 'Oprávnění';
$strings['View information about'] = 'Zobrazit informace o %s %s';
$strings['Send email to'] = 'Poslat email %s %s';
$strings['Reset password for'] = 'Změnit heslo pro %s %s';
$strings['Edit permissions for'] = 'Editovat oprávnění pro %s %s';
$strings['Position'] = 'Pozice';
$strings['Password (6 char min)'] = 'Heslo (%s min. znaků)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Vložte heslo (znovu)';

$strings['Date'] = 'Datum';
$strings['Email Users'] = 'Email Users';
$strings['Subject'] = 'Předmět';
$strings['Message'] = 'Zpráva';
$strings['Send Email'] = 'Odeslat email';
$strings['problem sending email'] = 'Při odesílání mailu se vyskytla chyba. Zkuste to později znovu.';
$strings['The email sent successfully.'] = 'Email byl úspěšně odeslán.';
$strings['Email address'] = 'Emailová adresa';
$strings['Please Log In'] = 'Zalogujte se';
$strings['Keep me logged in'] = 'Zapamatovat přihlášení <br/>(vyžaduje cookies)';
$strings['Password'] = 'Heslo';
$strings['Log In'] = 'Přihlásit se';
$strings['Get online help'] = 'Získat online help';
$strings['Language'] = 'Jazyky';
$strings['(Default)'] = '(Default)';

$strings['Email Administrator'] = 'Kontaktovat admina';

$strings['N/A'] = 'N/A';
$strings['Summary'] = 'Přehled';

$strings['View stats for schedule'] = 'Zobrazit statistiky pro plán:';
$strings['At A Glance'] = 'Jako celek';
$strings['Total Users'] = 'Celkem uživatelů:';
$strings['Total Resources'] = 'Celkem zdrojů:';
$strings['Total Reservations'] = 'Celkem rezervací:';
$strings['Max Reservation'] = 'Max rezervací:';
$strings['Min Reservation'] = 'Min rezervací:';
$strings['Avg Reservation'] = 'Průměrně rezervací:';
$strings['Most Active Resource'] = 'Nejvíce aktivní zdroje:';
$strings['Most Active User'] = 'Nejvíce aktivní uživatelé:';
$strings['System Stats'] = 'Systémové statistiky';
$strings['phpScheduleIt version'] = 'phpScheduleIt version:';
$strings['Database backend'] = 'Databázový backend:';
$strings['Database name'] = 'Název databáze:';
$strings['PHP version'] = 'PHP verze:';
$strings['Server OS'] = 'Server OS:';
$strings['Server name'] = 'Jméno serveru:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt root directory:';
$strings['Using permissions'] = 'Používat oprávnění:';
$strings['Using logging'] = 'Používat logování:';
$strings['Log file'] = 'Log soubor:';
$strings['Admin email address'] = 'Admin email address:';
$strings['Tech email address'] = 'Tech email address:';
$strings['CC email addresses'] = 'CC email addresses:';
$strings['Reservation start time'] = 'Reservation start time:';
$strings['Reservation end time'] = 'Reservation end time:';
$strings['Days shown at a time'] = 'Days shown at a time:';
$strings['Reservations'] = 'Reservations';
$strings['Return to top'] = 'Return to top';
$strings['for'] = 'pro';

$strings['Per page'] = 'Po stránce:';
$strings['Page'] = 'Stránka:';

$strings['You are not logged in!'] = 'Nejste zalogován(a)!';

$strings['Setup'] = 'Setup';
$strings['Invalid User Name/Password.'] = 'Neplatný uživatel/heslo.';

$strings['Valid username is required'] = 'Platné uživatelské jméno je požadováno';

$strings['Close'] = 'Zavřít';

$strings['Admin'] = 'Admin';

$strings['My Quick Links'] = 'Moje odkazy';

$strings['Go to first page'] = 'Jít na první stránku';
$strings['Go to last page'] = 'Jít na poslední stránku';
$strings['Sort by descending order'] = 'Setřidit sestupně';
$strings['Sort by ascending order'] = 'Setřídit vzestupně';
$strings['Spam Quarantine'] = 'Spam karanténa';
$strings['Message View'] = 'Zobrazit zprávu';
$strings['Attachment Quarantine'] = 'Přílohy v karanténě';
$strings['No such content type'] = 'No such content type';
$strings['No message was selected'] = 'Žádná zpráva nebyla vybrána ...';
$strings['Unknown action type'] = 'Neznámý typ akce ...';
$strings['A problem occured when trying to release the following messages'] = 'Chyba při pokusu o uvolnění následujících zpráv';
$strings['A problem occured when trying to delete the following messages'] = 'Chyba při pokusu při odstranění následujících zpráv';
$strings['Please release the following messages'] = 'Prosím o uvolnění následujících zpráv';
$strings['To'] = 'Komu';
$strings['From'] = 'Od';
$strings['Subject'] = 'Předmět';
$strings['Date'] = 'Datum';
$strings['Score'] = 'Score';
$strings['Mail ID'] = 'Mail ID';
$strings['Status'] = 'Status';
$strings['Print'] = 'Tisk';
$strings['CloseWindow'] = 'Zavřít';
$strings['Unknown server type'] = 'Neznámý typ serveru ...';
$strings['Showing messages'] = "Zobrazení zpráv %s through %s &nbsp;&nbsp; (%s celkem)\r\n";
$strings['View this message'] = 'Zobrazit zprávu';
$strings['Message Unavailable'] = 'Zpráva není k dispozici';
$strings['My Quarantine'] = 'Moje karanténa';
$strings['Site Quarantine'] = 'Server karanténa';
$strings['Message Processing'] = 'Zpracování zprávy';
$strings['Quarantine Summary'] = 'Přehled karantény';
$strings['Site Quarantine Summary'] = 'Přehled karantény serveru';
$strings['Login'] = 'Login';
$strings['spam(s)'] = 'spam(ů)';
$strings['attachment(s)'] = 'příloh(a)';
$strings['pending release request(s)'] = 'nevyřízené(ých) požadavky(ů) na uvolnění';
$strings['virus(es)'] = 'vir(ů)';
$strings['bad header(s)'] = 'špatná(é) hlavička(y)';
$strings['You have to type some text'] = 'Napište nějaký text';
$strings['Release'] = 'Uvolnit';
$strings['Release/Request release'] = 'Uvolnit/Request release';
$strings['Request release'] = 'Požadavek na uvolnění';
$strings['Delete'] = 'Smazat';
$strings['Delete All'] = 'Smazat vše';
$strings['Send report and go back'] = 'Poslat report a jít zpět';
$strings['Go back'] = "Jít zpět";
$strings['Select All'] = "Vybrat vše";
$strings['Clear All'] = "Odznačit vše";
$strings['Access Denied'] = "Přístup odepřen";
$strings['My Pending Requests'] = "Moje nevyříz. pož.";
$strings['Site Pending Requests'] = "Server nevyříz. pož.";
$strings['Cancel Request'] = "Zrušit požadavek";
$strings['User is not allowed to login'] = "Uživatel nemá oprávnění pro nalogování";
$strings['Authentication successful'] = "Úspěšné prokázání identity";
$strings['Authentication failed'] = "Prokázání identity selhalo";
$strings['LDAP connection failed'] = "LDAP/AD spojení selhalo";
$strings['Logout successful'] = "Úspěšné odhlášení";
$strings['IMAP Authentication: no match'] = "IMAP Authentication: no match";
$strings['Search for messages whose:'] = "Hledat zprávy kde:";
$strings['Content Type'] = "Typ obsahu";
$strings['Clear search results'] = "Vyčistit výsledky vyhledávání";
$strings['contains'] = "obsahuje";
$strings['doesn\'t contain'] = "neobsahuje";
$strings['equals'] = "je shodné";
$strings['doesn\'t equal'] = "není shodné";
$strings['All'] = "Vše";
$strings['Spam'] = "Spam";
$strings['Banned'] = "Zakázané";
$strings['Virus'] = "Vir";
$strings['Viruses'] = "Viry";
$strings['Bad Header'] = "Špatná hlavička";
$strings['Bad Headers'] = "Špatné hlavičky";
$strings['Pending Requests'] = "Pending Requests";
$strings['last'] = "poslední";
$strings['first'] = "první";
$strings['previous'] = "předchozí";
$strings['There was an error executing your query'] = 'Chyba při provádění požadavku:';
$strings['There are no matching records.'] = 'Žádné záznamy neodpovídají zadaným kritériím.';
$strings['Domain'] = 'Doména';
$strings['Total'] = 'Celkem';
$strings['X-Amavis-Alert'] = 'X-Amavis-Alert';
$strings['Loading Summary...'] = 'Loading Summary...';
$strings['Retrieving Messages...'] = 'Retrieving Messages...';
?>
