<?php
/**
* English (en) help translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Brian Wong <bwsource@users.sourceforge.net>
* @translator Paolo Cravero <pcravero@as2594.net>
* @version 01-08-05
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
  <h3><a name="top" id="top"></a>Introduzione a MailZu</h3>
  <p><a href="http://mailzu.net" target="_blank">http://mailzu.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Introduzione</a></b></li>
          <ul>
            <li><a href="#logging_in">Autenticazione</a></li>
            <li><a href="#language">Scelta della lingua</a></li>
            <li><a href="#getting_support">Come richiedere assistenza</a></li>
          </ul>
          <li><a href="#using_mailzu"><b>Utilizzo di MailZu</b></a></li>
          <ul>
            <li><a href="#quick_links">Menu</a></li>
            <li><a href="#msg_summary">Statistiche Quarantena</a></li>
            <li><a href="#msg_index">Quarantena</a></li>
            <li><a href="#search">Funzioni di Ricerca</a></li>
            <li><a href="#msg_view">Visualizzazione Messaggio</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Introduzione</h4>
        <p>In cima ad ogni pagina viene mostrato un messaggio di benvenuto e la data odierna.
Se l'utente visualizzato nel messaggio di benvenuto non &egrave; corretto, cliccare
&quot;Esci&quot; per rimuovere eventuali cookie residui ed <a href="#logging_in">autenticarsi</a> con le
proprie credenziali.
	Il link &quot;Aiuto&quot; apre una pagina di aiuto in un'altra finestra. Se disponibile,
il link &quot;Scrivi all'Amministratore&quot; inizia la composizione di un email da inviare all'
amministratore del sistema.
          </p>
          <p align="right"><a href="#top">Torna su</a></p>
        <h5><a name="logging_in" id="logging_in"></a>Autenticazione</h5>
        <p>L'autenticazione avviene tramite login e password. Il login pu&ograve;
essere l'indirizzo email completo ('utente@dominio.it') o solo il proprio nome utente ('login'),
in funzione delle impostazioni del proprio sistema. La modalit&agrave; corretta di accesso deve
essere comunicata dall'Amministratore/Assistenza.<BR>Con l'opzione &quot;Ricorda le credenziali&quot;
il sistema utilizza i cookie per identificare l'utente ad ogni accesso futuro, senza richiedere
pi&ugrave; login e password. <i>Utilizzare questa opzione solo se la postazione non &egrave;
condivisa con altri utenti!</i><br>Dopo l'autenticazione appare la <a href="#message_summary">pagina principale</a>.</p>
        <p align="right"><a href="#top">Torna su</a></p>
        <h5><a name="language" id="language"></a>Scelta della Lingua</h5>
        <p>Nella pagina di login si pu&ograve; scegliere la lingua con cui navigare nella
	propria quarantena. Solamente le lingue impostate dall'amministratore saranno
	indicate come disponibili. Con la scelta della lingua i messaggi di MailZu
	appariranno tradotti. Non verranno invece tradotti i messaggi email eventualmente
	presenti in quarantena.<BR>
	Per cambiare la lingua &egrave; necessario uscire e rientrare da MailZu.</p>
        <p align="right"><a href="#top">Torna su</a></p>        
        <h5><a name="getting_support" id="getting_support"></a>Come richiedere assistenza
          </h5>
        <p>Per ricevere assistenza sull'utilizzo della quarantena delegata si prega di
	contattare il servizio di Assistenza o l'Amministratore. Se disponibile si
	pu&ograve; inviare una email all'Amministratore tramite il link del menu di sinistra.
          <p>
        <p align="right"><a href="#top">Torna su</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_mailzu" id="using_mailzu"></a>Utilizzo di MailZu</h4>
        <p>MailZu &egrave; una interfaccia Web per gestire la quarantena personale in sistemi
	antispam. I messaggi bloccati in quarantena sono tipicamente spam o contengono
	degli allegati non permessi.
        <p align="right"><a href="#top">Torna su</a></p>
        <h5><a name="quick_links" id="quick_links"></a>Menu</h5>
        <p>Il Menu riporta i link alle funzioni principali di questa applicazione.
	Il primo, &quot;Statistiche Quarantena&quot; visualizza un riassunto del contenuto
	della propria quarantena.
	  </p>
	<p> &quot;Quarantena&quot; mostra l'elenco dei messaggi individuati come spam e/o
	con allegati non permessi.</p>
        <p>&quot;Scrivi all'Amministratore&quot; (se disponibile) &egrave; un modo rapido
	per entrare in contatto con l'Assistenza (per posta elettronica).</p>
        <p>&quot;Aiuto&quot; apre questo documento.</p>
        <p>L'ultimo link, &quot;Esci&quot;, chiude la sessione corrente e riporta la navigazione
	alla pagina di login.</p>
        <p align="right"><a href="#top">Torna su</a></p>
        <h5><a name="msg_summary" id="message_summary"></a>Statistiche Quarantena</h5>
	<p>Le statistiche della propria quarantena compaiono nella prima pagina dopo il login.
	Forniscono un panorama sul numero e tipo di messaggi in quarantena.
        <p align="right"><a href="#top">Torna su</a></p>
        <h5><a name="msg_index" id="msg_index"></a>Quarantena</h5>
        <p> La pagina di quarantena mostra l'elenco dei messaggi presenti in quarantena.
	Per ogni email bloccato il riassunto mostra il mittente, l'oggetto, la data e il
	punteggio.</p>
        <p>Con un click sul titolo delle colonne &egrave; possibile cambiare l'ordinamento
	della visualizzazione. Con un secondo click sullo stesso titolo si inverte l'ordine.</p>
	<p>L'interfaccia propone pi&ugrave; pulsanti per la gestione dei messaggi visualizzati.
	L'azione &quot;Sblocca&quot; rimuove i messaggi dalla quarantena e li consegna al
	destinatario come se non fossero stati intercettati. La funzione &quot;Cancella&quot;
	elimina definitivamente un messaggio dalla quarantena, senza consegnarlo al destinatario.
	Queste funzioni vengono applicate solo ai messaggi spuntati. La funzione &quot;Cancella
	Tutti&quot; ignora le eventuali spunte ed elimina tutti i messaggi dalla quarantena.</p>
	<p>Dall'elenco delle richieste in sospeso &egrave; possibile annullare una richiesta cliccando
	su 'Cancella la Richiesta'. In questo modo il messaggio verr&agrave; rimosso dalla coda in
	attesa di revisione da parte dell'Amministratore.
	</p>
        <p align="right"><a href="#top">Torna su</a></p>
        <h5><a name="search" id="search"></a>Funzioni di ricerca</h5>
        <p>La funzione di ricerca permette di impostare un filtro nella visualizzazione dei messaggi.
	&Egrave; possibile specificare il mittente, l'oggetto o il tipo di messaggio (spam o non
	permesso). La ricerca non distingue tra maiuscole e minuscole.</p>
        <p align="right"><a href="#top">Torna su</a></p> 
	<h5><a name="msg_view" id="msg_view"></a>Messaggio</h5>
        <p>La vista Messaggio mostra una anteprima del messaggio trattenuto in quarantena per determinare
	se si tratta effettivamente di spam. Questa pagina consente di visualizzare tutte le intestazioni
	(&quot;Intestazioni Si/no&quot;) e il &quot;Messaggio Originale&quot;.
The Message View allows you to see the contents of the message to help
	</p>
        <p align="right"><a href="#top">Torna su</a></p>        <p align="right">&nbsp;</p>

        <hr width="95%" size="1" noshade="noshade" />
      </td>
    </tr>
  </table>
</div>
