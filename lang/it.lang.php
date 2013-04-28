<?php
/**
* Italian (it) translation file.
* Based on phpScheduleIt translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*
* @author Paolo Cravero <pcravero@as2594.net>
* @version 08-25-05
* @package Languages
*
* Copyright (C) 2005 - MailZu
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
$days_full = array('Domenica', 'Lunedi', 'Martedi', 'Mercoledi', 'Giovedi', 'Venerdi', 'Sabato');
// The three letter abbreviation
$days_abbr = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
// The two letter abbreviation
$days_two  = array('Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa');
// The one letter abbreviation
$days_letter = array('D', 'L', 'm', 'M', 'G', 'V', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
// The three letter month name
$months_abbr = array('Gen', 'Feb', 'Mar', 'Apr', 'MaG', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

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
// Date on top-right of each page
$dates['header'] = '%A, %d %B %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'ore';
$strings['minutes'] = 'minuti';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'gg';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'aaaa';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Amministratore';
$strings['Welcome Back'] = 'Benvenuto, %s';
$strings['Log Out'] = 'Esci';
$strings['Help'] = 'Aiuto';

$strings['Admin Email'] = 'Admin Email';

$strings['Default'] = 'Default';
$strings['Reset'] = 'Reset';
$strings['Edit'] = 'Modifica';
$strings['Delete'] = 'Cancella';
$strings['Cancel'] = 'Annulla';
$strings['View'] = 'Visualizza';
$strings['Modify'] = 'Modifica';
$strings['Save'] = 'Salva';
$strings['Back'] = 'Indietro';
$strings['BackMessageIndex'] = 'Elenco Messaggi';
$strings['ToggleHeaders'] = 'Intestazioni Si/No';
$strings['ViewOriginal'] = 'Messaggio Originale';
$strings['Next'] = 'succ.';
$strings['Close Window'] = 'Close Window';
$strings['Search'] = 'Cerca';
$strings['Clear'] = 'Pulisci';

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
$strings['Subject'] = 'Oggetto';
$strings['Message'] = 'Messaggio';
$strings['Send Email'] = 'Send Email';
$strings['problem sending email'] = 'Sorry, there was a problem sending your email. Please try again later.';
$strings['The email sent successfully.'] = 'The email sent successfully.';
$strings['Email address'] = 'Email address';
$strings['Please Log In'] = 'Inserire le proprie credenziali';
$strings['Keep me logged in'] = 'Ricorda le credenziali <br/>(richiede i cookies)';
$strings['Password'] = 'Password';
$strings['Log In'] = 'Entra';
$strings['Get online help'] = 'Get online help';
$strings['Language'] = 'Lingua';
$strings['(Default)'] = '(Default)';

$strings['Email Administrator'] = 'Scrivi all\'amministratore';

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
$strings['Invalid User Name/Password.'] = 'Login e/o Password errati.';

$strings['Valid username is required'] = 'Valid username is required';

$strings['Close'] = 'Close';

$strings['Admin'] = 'Admin';

$strings['My Quick Links'] = 'Menu';

$strings['Go to first page'] = 'Vai alla prima pagina';
$strings['Go to last page'] = 'Vai all\'ultima pagina';
$strings['Sort by descending order'] = 'Sort by descending order';
$strings['Sort by ascending order'] = 'Sort by ascending order';
$strings['Spam Quarantine'] = 'Quarantena Spam';
$strings['Message View'] = 'Visualizzazione Messaggio';
$strings['Attachment Quarantine'] = 'Quarantena Allegati';
$strings['No such content type'] = 'No such content type';
$strings['No message was selected'] = 'Nessun messaggio selezionato ...';
$strings['Unknown action type'] = 'Tipo di richiesta sconosciuta ...';
$strings['A problem occured when trying to release the following messages'] = 'Si &egrave; verificato un problema cercando di sbloccare i seguenti messaggi';
$strings['A problem occured when trying to delete the following messages'] = 'Si &egrave; verificato un problema cercando di cancellare i seguenti messaggi';
$strings['Please release the following messages'] = 'Per cortesia vogliate sbloccare i seguenti messaggi';
$strings['To'] = 'A';
$strings['From'] = 'Da';
$strings['Subject'] = 'Oggetto';
$strings['Date'] = 'Data';
$strings['Score'] = 'Punteggio';
$strings['Mail ID'] = 'ID Messaggio';
$strings['Status'] = 'Stato';
$strings['Print'] = 'Stampa';
$strings['CloseWindow'] = 'Chiudi';
$strings['Unknown server type'] = 'Tipo di server sconosciuto ...';
$strings['Showing messages'] = "Messaggi dal %s al %s &nbsp;&nbsp; (%s in totale)\r\n";
$strings['View this message'] = 'Apri questo messaggio';
$strings['Message Unavailable'] = 'Messaggio non disponibile';
$strings['My Quarantine'] = 'Quarantena';
$strings['Site Quarantine'] = 'Quarantena globale';
$strings['Message Processing'] = 'Elaborazione Messaggio';
$strings['Quarantine Summary'] = 'Statistiche Quarantena';
$strings['Site Quarantine Summary'] = 'Statistiche Quarantena globale';
$strings['Login'] = 'Login';
$strings['spam(s)'] = 'spam';
$strings['attachment(s)'] = 'allegati';
$strings['pending release request(s)'] = 'richiesta/e di sblocco accodate';
$strings['virus(es)'] = 'virus(es)';
$strings['bad header(s)'] = 'intestazione/i difettosa/e';
$strings['You have to type some text'] = 'E\' obbligatorio inserire del testo';
$strings['Release'] = 'Sblocca';
$strings['Release/Request release'] = 'Sblocca/Richiedi sblocco';
$strings['Request release'] = 'Richiedi slocco';
$strings['Delete'] = 'Cancella';
$strings['Delete All'] = 'Cancella Tutti';
$strings['Send report and go back'] = 'Invia il rapporto e torna alla pagina precedente';
$strings['Go back'] = "Indietro";
$strings['Select All'] = "Seleziona Tutti";
$strings['Clear All'] = "Deseleziona Tutti";
$strings['Access Denied'] = "Accesso Negato ";
$strings['My Pending Requests'] = "Richieste in sospeso";
$strings['Site Pending Requests'] = "Richieste in sospeso (globali)";
$strings['Cancel Request'] = "Cancella la Richiesta";
$strings['User is not allowed to login'] = "Utente non autorizzato al servizio";
$strings['Authentication successful'] = "Autenticazione riuscita";
$strings['Authentication failed'] = "Autenticazione fallita";
$strings['LDAP connection failed'] = "Connessione al server LDAP/AD fallita";
$strings['Logout successful'] = "Logout riuscito";
$strings['IMAP Authentication: no match'] = "Autenticazione IMAP: non trovato";
$strings['Search for messages whose:'] = "Cerca i messaggi che:";
$strings['Content Type'] = "Content Type";
$strings['Clear search results'] = "Azzera il risultato della ricerca";
$strings['contains'] = "contiene";
$strings['doesn\'t contain'] = "non contiene";
$strings['equals'] = "uguale a";
$strings['doesn\'t equal'] = "diverso da";
$strings['All'] = "Tutti";
$strings['Spam'] = "Spam";
$strings['Banned'] = "Non permesso";
$strings['Bad Header'] = "Intestazione Difettosa";
$strings['Bad Headers'] = "Intestazioni Difettose";
$strings['Pending Requests'] = 'Richieste in sospeso';
$strings['Virus'] = "Virus";
$strings['Viruses'] = "Viruses";
$strings['last'] = "ultima";
$strings['first'] = "prima";
$strings['previous'] = "prec."; 
$strings['There was an error executing your query'] = 'E\' stato riscontrato un errore durante la ricerca sul database:';
$strings['There are no matching records.'] = 'Nessun record trovato.';
$strings['Domain'] = 'Dominio';
$strings['Total'] = 'Totali';
$strings['X-Amavis-Alert'] = 'X-Amavis-Alert';
$strings['Loading Summary...'] = 'Caricamento in corso...';
$strings['Retrieving Messages...'] = 'Download dei messaggi...';
?>
