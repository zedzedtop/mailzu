<?php
/**
* French (fr) translation file.
* Based on phpScheduleIt translation file.
* This also serves as the base translation file from which to derive
*
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
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
// 
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
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
$days_full = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
// The three letter abbreviation
$days_abbr = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
// The two letter abbreviation
$days_two  = array('Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa');
// The one letter abbreviation
$days_letter = array('D', 'L', 'M', 'M', 'J', 'V', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
// The three letter month name
$months_abbr = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec');

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
$dates['header'] = '%A, %B %d, %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'heures';
$strings['minutes'] = 'minutes';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'jj';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'aaaa';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrateur';
$strings['Welcome Back'] = 'Bienvenue, %s';
$strings['Log Out'] = 'Quitter';
$strings['Help'] = 'Aide';

$strings['Admin Email'] = 'Adresse messagerie de l\'administrateur';

$strings['Default'] = 'Defaut';
$strings['Reset'] = 'Ré-initialisation';
$strings['Edit'] = 'Mise à jour';
$strings['Delete'] = 'Effacement';
$strings['Cancel'] = 'Annulation';
$strings['View'] = 'Visualisation';
$strings['Modify'] = 'Modification';
$strings['Save'] = 'Sauvegarde';
$strings['Back'] = 'Retour';
$strings['BackMessageIndex'] = 'Retour aux messages';
$strings['ToggleHeaders'] = 'Voir/Cacher les en-têtes';
$strings['ViewOriginal'] = 'Voir le message original';
$strings['Next'] = 'Suivant';
$strings['Close Window'] = 'Fermeture de fenêtre';
$strings['Search'] = 'Recherche';
$strings['Clear'] = 'Effacement';

$strings['Days to Show'] = 'Jours à visualiser';
$strings['Reservation Offset'] = 'Période de réservation';
$strings['Hidden'] = 'Caché';
$strings['Show Summary'] = 'Visualisation abrégée';
$strings['Add Schedule'] = 'Ajout d\'une planification';
$strings['Edit Schedule'] = 'Modification d\'une planification';
$strings['No'] = 'Non';
$strings['Yes'] = 'Oui';
$strings['Name'] = 'Nom';
$strings['First Name'] = 'Prénom';
$strings['Last Name'] = 'Patronyme';
$strings['Resource Name'] = 'Nom de la Ressource';
$strings['Email'] = 'Adresse de messagerie';
$strings['Institution'] = 'Institution';
$strings['Phone'] = 'Téléphone';
$strings['Password'] = 'Mot de passe';
$strings['Permissions'] = 'Permissions';
$strings['View information about'] = 'Visualisation des information de %s %s';
$strings['Send email to'] = 'Envoi d\'un message électronique à  %s %s';
$strings['Reset password for'] = 'Ré-initialisation du mot de passe de %s %s';
$strings['Edit permissions for'] = 'Modification des privilèges pour %s %s';
$strings['Position'] = 'Position';
$strings['Password (6 char min)'] = 'Mot de passe (%s char min)';
$strings['Re-Enter Password'] = 'Re-Entrer le mot de passe';

$strings['Date'] = 'Date';
$strings['Email Users'] = 'Adresse électronique utilisateur';
$strings['Subject'] = 'Objet';
$strings['Message'] = 'Message';
$strings['Send Email'] = 'Envoi du message électronique';
$strings['problem sending email'] = 'Désolé, des difficultés on étés rencontrées lors de l\'envoi du message. S.V.P. Essayez de nouveau plus tard.';
$strings['The email sent successfully.'] = 'Le message électronique a été envoyé avec succés.';
$strings['Email address'] = 'Adresse électronique';
$strings['Please Log In'] = 'Merci de vous identifier';
$strings['Keep me logged in'] = 'Maintenir ma connexion <br/>(utilisation de cookies requise )';
$strings['Password'] = 'Mot de passe';
$strings['Log In'] = 'Se connecter';
$strings['Get online help'] = 'Obtenir de l\'aide en ligne';
$strings['Language'] = 'Langue';
$strings['(Default)'] = '(Defaut)';

$strings['Email Administrator'] = 'Envoi d\'un message électronique à l\'administrateur';

$strings['N/A'] = 'N/A';
$strings['Summary'] = 'Résumé';

$strings['View stats for schedule'] = 'Visualisation des statistique pour la planification:';
$strings['At A Glance'] = 'D\'un coup d\'oeil';
$strings['Total Users'] = 'Total utilisateur:';
$strings['Total Resources'] = 'Total Ressources:';
$strings['Total Reservations'] = 'Total Reservations:';
$strings['Max Reservation'] = 'Max Reservation:';
$strings['Min Reservation'] = 'Min Reservation:';
$strings['Avg Reservation'] = 'Moy Reservation:';
$strings['Most Active Resource'] = 'Ressource la plus active :';
$strings['Most Active User'] = 'L\'utilisateur le plus actif :';
$strings['System Stats'] = 'Statistiques systèmes';
$strings['phpScheduleIt version'] = 'phpScheduleIt version:';
$strings['Database backend'] = 'Base de données principale :';
$strings['Database name'] = 'Nom de la base de données :';
$strings['PHP version'] = 'version PHP:';
$strings['Server OS'] = 'SE du serveur:';
$strings['Server name'] = 'Nom du serveur:';
$strings['phpScheduleIt root directory'] = 'répertoire racine de phpScheduleIt:';
$strings['Using permissions'] = 'Utilise les permissions:';
$strings['Using logging'] = 'Using logging:';
$strings['Log file'] = 'Fichier historique :';
$strings['Admin email address'] = 'Adresse de messagerie administrateur:';
$strings['Tech email address'] = 'Adresse de messagerie technique:';
$strings['CC email addresses'] = 'Adresses de messagerie en CC:';
$strings['Reservation start time'] = 'Heure de début de reservation :';
$strings['Reservation end time'] = 'Heure de fin de reservation :';
$strings['Days shown at a time'] = 'Nombre de jours visualisés d\'un coup:';
$strings['Reservations'] = 'Réservations';
$strings['Return to top'] = 'Retour en haut';
$strings['for'] = 'pour';

$strings['Per page'] = 'Par page:';
$strings['Page'] = 'Page:';

$strings['You are not logged in!'] = 'Vous n\'êtes pas connecté!';

$strings['Setup'] = 'Installation';

$strings['Invalid User Name/Password.'] = 'Compte Utilisateur/Mot de pass invalide.';
$strings['Valid username is required'] = 'Un compte Utilisateur valide est requis.';

$strings['Close'] = 'Fermer';

$strings['Admin'] = 'Admin';

$strings['My Quick Links'] = 'Mes liens rapides';

$strings['Go to first page'] = 'Allez à la première page';
$strings['Go to last page'] = 'Allez à la dernière page';
$strings['Sort by descending order'] = 'Trier par ordre décroissant';
$strings['Sort by ascending order'] = 'Trier par ordre croissant';
$strings['Spam Quarantine'] = 'Quarantaine de Spam';
$strings['Message View'] = 'Voir le message';
$strings['Attachment Quarantine'] = 'Quarantaine d\'attachements';
$strings['No such content type'] = 'Type de contenu inconnu';
$strings['No message was selected'] = 'Aucun message n\'a été sélectionné ...';
$strings['Unknown action type'] = 'Type d\'action inconnu ...';
$strings['A problem occured when trying to release the following messages'] = 'Une erreur s\'est produite en essayant de réémettre les messages suivants';
$strings['A problem occured when trying to delete the following messages'] = 'Une erreur s\'est produite en essayant de supprimer les messages suivants';
$strings['Please release the following messages'] = 'Veuillez réémettre les messages suivants';
$strings['To'] = 'à';
$strings['From'] = 'De';
$strings['Subject'] = 'Objet';
$strings['Date'] = 'Date';
$strings['Score'] = 'Score';
$strings['Mail ID'] = 'Identifiant mail';
$strings['Status'] = 'Etat';
$strings['Print'] = 'Imprimer';
$strings['CloseWindow'] = 'Fermer';
$strings['Unknown server type'] = 'Type de serveur inconnu ...';
$strings['Showing messages'] = "Messages de %s à %s &nbsp;&nbsp; (%s total)\r\n";
$strings['View this message'] = 'Visualiser ce message';
$strings['Message Unavailable'] = 'Message non disponible';
$strings['My Quarantine'] = 'Ma Quarantaine';
$strings['Site Quarantine'] = 'Quarantaine Globale';
$strings['Message Processing'] = 'Message processing';
$strings['Quarantine Summary'] = 'Résumé de la quarantaine';
$strings['Site Quarantine Summary'] = 'Résumé de la quarantaine Globale';
$strings['Login'] = 'Identifiant';
$strings['spam(s)'] = 'spam(s)';
$strings['attachment(s)'] = 'pièce(s) jointe(s)';
$strings['pending release request(s)'] = 'requêtes de réémission en attente';
$strings['virus(es)'] = 'virus(es)';
$strings['bad header(s)'] = 'mauvais en-tête(s)';
$strings['You have to type some text'] = 'Vous devez entrer du texte';
$strings['Release'] = 'Réémission';
$strings['Release/Request release'] = 'Réémission/Demande de réémission';
$strings['Request release'] = 'Demande de réémission';
$strings['Delete'] = 'Supprimer';
$strings['Delete All'] = 'Supprimer tout';
$strings['Send report and go back'] = 'Envoyer le rapport et retourner en arrière';
$strings['Go back'] = "Retourner en arrière";
$strings['Select All'] = "Sélectionner tout";
$strings['Clear All'] = "Désélectionner tout";
$strings['Access Denied'] = "Accès interdit";
$strings['My Pending Requests'] = "Mes requêtes en attente";
$strings['Site Pending Requests'] = "Requêtes en attente globale";
$strings['Cancel Request'] = "Annule requête";
$strings['User is not allowed to login'] = "L'utilisateur n'est pas autorisé à se connecter";
$strings['Authentication successful'] = "Authentification réussie";
$strings['Authentication failed'] = "Authentification échouée";
$strings['LDAP connection failed'] = "LDAP/AD connexion échouée";
$strings['Logout successful'] = "Déconnexion réussie";
$strings['IMAP Authentication: no match'] = "Authentification IMAP: pas de correspondance";
$strings['Search for messages whose:'] = "Recherche de messages dont les champs:";
$strings['Content Type'] = "Type de contenu";
$strings['Clear search results'] = "Remise à zero des resultats";
$strings['contains'] = "contient";
$strings['doesn\'t contain'] = "ne contient pas";
$strings['equals'] = "est égal à";
$strings['doesn\'t equal'] = "n'est pas égal à";
$strings['All'] = "Tout type";
$strings['Spam'] = "Spam";
$strings['Banned'] = "Attachement interdit";
$strings['Bad Header'] = "Mauvais En-tête";
$strings['Bad Headers'] = "Mauvais En-têtes";
$strings['Pending Requests'] = 'Attendant Des Demandes';
$strings['Virus'] = "Virus";
$strings['Viruses'] = "Viruses";
$strings['last'] = "dernier";
$strings['first'] = "premier";
$strings['previous'] = "précédent";
$strings['There was an error executing your query'] = 'Une erreur s\'est produite lors de l\'exécution de la requête:';
$strings['There are no matching records.'] = "Pas d'entrée correspondante.";
$strings['Domain'] = 'Domaine';
$strings['Total'] = 'Total';
$strings['X-Amavis-Alert'] = 'X-Amavis-Alert';
$strings['Loading Summary...'] = 'Loading Summary...';
$strings['Retrieving Messages...'] = 'Retrieving Messages...';
?>
