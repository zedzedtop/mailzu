<?php
/**
* French (fr) help translation file.
*  
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @version 12/15/2005
* @package Languages
*
* Copyright (C) 2003 - 2007 MailZu
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all the help file for MailZu.  Please save the translated
//  file as '2 letter language code'.help.php.  For example, en.help.php.
// 
// To make MailZu help available in another language, simply translate this
//  file into your language.  If there is no direct translation, please provide the
//  closest translation.
//
// This will be included in the body of the help file.
//
// Please keep the HTML formatting unless you need to change it.  Also, please try
//  to keep the HTML XHTML 1.0 Transitional complaint.
///////////////////////////////////////////////////////////
?>
<div align="center"> 
  <h3><a name="top" id="top"></a>Introduction</h3>
  <p><a href="http://mailzu.net" target="_blank">http://mailzu.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Préliminaires</a></b></li>
          <ul>
            <li><a href="#logging_in">Connexion</a></li>
            <li><a href="#language">Choisir ma langue</a></li>
            <li><a href="#getting_support">Obtenir de l'aide</a></li>
          </ul>
          <li><a href="#using_mailzu"><b>Utilisation de MailZu</b></a></li>
          <ul>
            <li><a href="#quick_links">Mes liens rapides</a></li>
            <li><a href="#msg_summary">Résumé de la Quarantaine</a></li>
            <li><a href="#msg_index">Liste des Messages</a></li>
            <li><a href="#search">Recherche des Messages</a></li>
            <li><a href="#msg_view">Affichage des Messages</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Préliminaires</h4>
        <p> En haut de chaque page vous trouverez un message de bienvenue et la date du jour.
          Si votre identification n'est pas affichée dans le message de bienvenue, cliquez sur &quot;Quitter 
          &quot; pour supprimer les cookies de l'utilisateur précédent et <a href="#logging_in">se 
          connecter</a> avec votre identifiant. 
          Cliquer sur le lien &quot;Aide&quot; fait apparaître une fenêtre d'aide. Cliquer sur
          le lien &quot;Envoi d'un message électronique à l'administrateur&quot; permet de composer un message adressé à
           l'administrateur système.</p>
          <p align="right"><a href="#top">Retour en haut</a></p>
        <h5><a name="logging_in" id="logging_in"></a>Se connecter</h5>
        <p>Pour se connecter, l'utilisateur doit fournir son identifiant et mot de passe. L'identifiant
	  peut être votre adresse électronique ('utilisateur@exemple.fr') ou simplement
	  votre nom de compte ('utilisateur'). L'administrateur devrait vous informer du type
	  d'identifiant à utiliser. Selectionner l'option &quot;Maintenir ma connexion&quot; permet d'utiliser 
          des cookies pour vous identifier à chaque fois que vous retournez à la page de connexion, vous évitant 
          de vous connecter à nouveau. <i>Vous devriez utiliser cette option si 
          vous êtes la seule personne utilisant MailZu sur votre poste de travail.</i> Après 
          la connexion, vous serez redirigé vers la <a href="#message_summary">
          Résumé de la quarantaine</a>.</p>
        <p align="right"><a href="#top">Retour en haut</a></p>
        <h5><a name="language" id="language"></a>Choisir ma langue</h5>
        <p>Sur la page de connexion, il y a un menu déroulant avec toutes les langues
          qui sont disponibles.
          S'il vous plaît, choisissez la langue que vous préférez et tout le texte dans MailZu
          sera traduit. Cela ne traduira pas le texte qui est inclus dans les messages
	  électronique; seulement le texte de l'interface sera traduit. Vous aurez besoin de vous 
	  déconnecter pour choisir une langue différente.</p>
        <p align="right"><a href="#top">Retour en haut</a></p>        
        <h5><a name="getting_support" id="getting_support"></a>Obtenir
          de l'aide</h5>
        <p>Si vous avez besoin d'assistance pour afficher vos messages en quarantaine ou quelqu'autre
	  problème, n'hésitez pas à utiliser le lien &quot;Envoi d'un message électronique à
           l'administrateur&quot; situé sur <a href="#quick_links">Mes liens rapides</a>.</p>
        <p align="right"><a href="#top">Retour en haut</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_mailzu" id="using_mailzu"></a>Utilisez MailZu</h4>
        <p>MailZu permet à l'utilisateur d'afficher ses messages en quarantaine organisés par type de messages. 
	   Les principaux types de messages qui seront mis en quarantaine sont ceux qui sont considérés 
	   comme spam, ou qui contiennent un attachement interdit.
        <p align="right"><a href="#top">Retour en haut</a></p>
        <h5><a name="quick_links" id="quick_links"></a>Mes liens rapides</h5>
        <p>Ce menu vous donne accès aux différentes raccourcis de l'application.
	  Le premier lien &quot;Résumé de la Quarantaine&quot; vous donnera un aperçu de votre quarantaine.</p>
	<p> &quot;Ma Quarantaine&quot; vous conduira à l'index
          vos messages non sollicités et attachements interdits.</p>
        <p>&quot;Envoi d'un message électronique à l'administrateur'&quot; est un moyen rapide pour contacter
	  votre support technique si vous avez besoin d'aide.</p>
        <p>&quot;Aide&quot; vous donne accès à ce document.</p>
        <p>Le dernier lien, &quot;Quitter&quot; vous déconnectera de votre session courante
          et vous renverra à la page de connexion.</p>
        <p align="right"><a href="#top">Retour en haut</a></p>
        <h5><a name="msg_summary" id="msg_summary"></a>Résumé de la Quarantaine</h5>
	<p> Le Résumé de la Quarantaine est la première page après la connexion. Il affiche le nombre de messages
	  dans votre quarantaine par type.
        <p align="right"><a href="#top">Retour en haut</a></p>
        <h5><a name="msg_index" id="msg_index"></a>Index des Messages</h5>
        <p> L'index des Messages affiche tous les messages électroniques mises en quarantaine. 
	  Pour chaque message mise en quarantaine, l'index affiche l'émetteur, l'object, et la date. En fonction
	  de la quarantaine inspectée, l'index peut afficher plus d'information.</p>
        <p>Pour trier votre index par un champ particulier, cliquer sur le nom du champ. Cliquer sur le nom du champ
	   à nouveau inversera le sens du tri.</p> 
	<p>Plusieurs boutons sont à votre disposition pour traiter les messages affichés dans l'index. Le bouton 
	  'Réémission/Demande de réémission' retire le message de l'index et ré-émet le message comme s'il n'a jamais 
   	  été mis en quarantaine. Le bouton 'Supprimer' retire seulement le message de l'index. 
	  Ces boutons agissent sur le ou les messages sélectionnés à l'aide des cases de sélection. 
	  Le bouton 'Supprimer tout' ne tient pas compte des cases sélectionnées et retire tous les messages de la
	  quarantaine sélectionnée.</p>
	<p>Quand vous visualisez vos requêtes en attente, vous pouvez annuler une requête en cliquant sur 
	   'Annule requête'. Le message ne sera plus dans la file d'attente de l'administrateur pour re-émission.
	</p>
        <p align="right"><a href="#top">Retour en haut</a></p>
        <h5><a name="search" id="search"></a>Recherche de message</h5>
        <p>Utiliser la fonction de recherche est un moyen rapide de trouver un message que vous pensez avoir été
	   mise en quarantaine. Vous pouvez chercher un message en spécifiant l'émetteur, ou
	   l'objet, or les deux. La recherche ne tient pas compte des majuscules.</p>
        <p align="right"><a href="#top">Retour en haut</a></p> 
	<h5><a name="msg_view" id="msg_view"></a>Voir le message</h5>
        <p>Cela vous permet de voir le contenu du message vous aidant ainsi à déterminer
	   si le message est legitime. La visualisation vous offre d'autres options telles que
	   l'affichage du message original en mode texte ou l'affichage d'en-têtes additionels.
	</p>
        <p align="right"><a href="#top">Retour en haut</a></p>        <p align="right">&nbsp;</p>

        <hr width="95%" size="1" noshade="noshade" />
      </td>
    </tr>
  </table>
</div>
