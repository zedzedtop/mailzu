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
$days_full = array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado');
// The three letter abbreviation
$days_abbr = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
// The two letter abbreviation
$days_two  = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
// The one letter abbreviation
$days_letter = array('D', 'S', 'T', 'Q', 'U', 'S', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
// The three letter month name
$months_abbr = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

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
$strings['hours'] = 'horas';
$strings['minutes'] = 'minutos';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrador';
$strings['Welcome Back'] = 'Bem Vindo, %s';
$strings['Log Out'] = 'Sair';
$strings['Help'] = 'Ajuda';

$strings['Admin Email'] = 'Admin Email';

$strings['Default'] = 'Padrão';
$strings['Reset'] = 'Resetar';
$strings['Edit'] = 'Editar';
$strings['Delete'] = 'Deletar';
$strings['Cancel'] = 'Cancelar';
$strings['View'] = 'Ver';
$strings['Modify'] = 'Modificar';
$strings['Save'] = 'Salvar';
$strings['Back'] = 'Voltar';
$strings['BackMessageIndex'] = 'Voltar para Menssagens';
$strings['ToggleHeaders'] = 'Mostrar Cabeçalhos';
$strings['ViewOriginal'] = 'Ver Original';
$strings['Next'] = 'próxima';
$strings['Close Window'] = 'Fechar Janela';
$strings['Search'] = 'Pesquisar';
$strings['Clear'] = 'Limpar';

$strings['Days to Show'] = 'Dias para Mostrar';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Esconder';
$strings['Show Summary'] = 'Mastrar Agendamento';
$strings['Add Schedule'] = 'Adicionar Agendamento';
$strings['Edit Schedule'] = 'Editar Agendamento';
$strings['No'] = 'Não';
$strings['Yes'] = 'Sim';
$strings['Name'] = 'Nome';
$strings['First Name'] = 'Primeiro Nome';
$strings['Last Name'] = 'Último Nome';
$strings['Resource Name'] = 'Recurso';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Empresa';
$strings['Phone'] = 'Telefone';
$strings['Password'] = 'Senha';
$strings['Permissions'] = 'Permissões';
$strings['View information about'] = 'Ver Informações sobre %s %s';
$strings['Send email to'] = 'Enviar e-mail para %s %s';
$strings['Reset password for'] = 'Resetar senha para %s %s';
$strings['Edit permissions for'] = 'Editar permissões para %s %s';
$strings['Position'] = 'Posição';
$strings['Password (6 char min)'] = 'Senha (%s caracteres min.)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Redigitar Senha';

$strings['Date'] = 'Data';
$strings['Email Users'] = 'Email Users';
$strings['Subject'] = 'Assunto';
$strings['Message'] = 'Mensagem';
$strings['Send Email'] = 'Enviar E-mail';
$strings['problem sending email'] = 'Desculpa, ocorreu um erro ao enviar seu E-mail. Tente mais tarde.';
$strings['The email sent successfully.'] = 'E-mail enviado com sucesso.';
$strings['Email address'] = 'Endereço de E-mail';
$strings['Please Log In'] = 'Informações de Login';
$strings['Keep me logged in'] = 'Manter-se logado <br/>(requer cookies)';
$strings['Password'] = 'Senha';
$strings['Log In'] = 'Entrar';
$strings['Get online help'] = 'Ajuda online';
$strings['Language'] = 'Idioma';
$strings['(Default)'] = '(Padrão)';

$strings['Email Administrator'] = 'E-mail p/ Administrador';

$strings['N/A'] = 'N/A';
$strings['Summary'] = 'Sumário';

$strings['View stats for schedule'] = 'Ver status da Agenda:';
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

$strings['Per page'] = 'Por página:';
$strings['Page'] = 'Página:';

$strings['You are not logged in!'] = 'Você não esta logado!';

$strings['Setup'] = 'Setup';
$strings['Invalid User Name/Password.'] = 'Usuário/Senha inválidos.';

$strings['Valid username is required'] = 'Requerido um nome de usuário válido';

$strings['Close'] = 'Fechar';

$strings['Admin'] = 'Admin';

$strings['My Quick Links'] = 'Meus Links';

$strings['Go to first page'] = 'Ir para primeira página';
$strings['Go to last page'] = 'Ir para última página';
$strings['Sort by descending order'] = 'Ordem descendente';
$strings['Sort by ascending order'] = 'Ordem ascendente';
$strings['Spam Quarantine'] = 'Quarentena de Spam';
$strings['Message View'] = 'Visualizando Mensagem';
$strings['Attachment Quarantine'] = 'Quarentena de Anexos';
$strings['No such content type'] = 'Tipo de conteúdo não existe';
$strings['No message was selected'] = 'Nenhuma mensagem foi selecionada ...';
$strings['Unknown action type'] = 'Tipo de ação desconhecido ...';
$strings['A problem occured when trying to release the following messages'] = 'Ocorreu um problema ao tentar liberar as mensagens selecionadas';
$strings['A problem occured when trying to delete the following messages'] = 'Ocorreu um problema ao tentar deletar as mesagens selecionadas';
$strings['Please release the following messages'] = 'Liberar as seguintes mensagens';
$strings['To'] = 'Para';
$strings['From'] = 'De';
$strings['Subject'] = 'Assunto';
$strings['Date'] = 'Data';
$strings['Score'] = 'Pontos';
$strings['Mail ID'] = 'Mail ID';
$strings['Status'] = 'Status';
$strings['Print'] = 'Imprimir';
$strings['CloseWindow'] = 'Fechar';
$strings['Unknown server type'] = 'Tipo de servidor desconhecido ...';
$strings['Showing messages'] = "Mostrando mensagen %s até %s &nbsp;&nbsp; (%s no total)\r\n";
$strings['View this message'] = 'Ver esta Mensagem';
$strings['Message Unavailable'] = 'Mensagem Indisponível';
$strings['My Quarantine'] = 'Minha Quarentena';
$strings['Site Quarantine'] = 'Quarentena do Site';
$strings['Message Processing'] = 'Processando Mensagem';
$strings['Quarantine Summary'] = 'Sumário da Quarantena';
$strings['Login'] = 'Usuário';
$strings['spam(s)'] = 'spam(s)';
$strings['attachment(s)'] = 'bloqueio(s) por anexo(s)';
$strings['pending release request(s)'] = 'pedidos de liberação pendentes';
$strings['You have to type some text'] = 'Você deve digitar algum texto';
$strings['Release'] = 'Liberar';
$strings['Release/Request release'] = 'Liberar/Solicitar Liberação';
$strings['Request release'] = 'Solicitar Liberação';
$strings['Delete'] = 'Deletar';
$strings['Delete All'] = 'Deletar Todas';
$strings['Send report and go back'] = 'Enviar relatório e voltar';
$strings['Go back'] = "Voltar";
$strings['Select All'] = "Selecionar Todas";
$strings['Clear All'] = "Limpar Todas";
$strings['Access Denied'] = "Acesso Negado";
$strings['My Pending Requests'] = "Minhas Pendências<br />&nbsp;&nbsp;de Liberação";
$strings['Site Pending Requests'] = "Pendências de Liberação";
$strings['Cancel Request'] = "Cancelar Requisição";
$strings['User is not allowed to login'] = "Usuário sem permissão para entar";
$strings['Authentication successful'] = "Autenticação efetuada com sucesso";
$strings['Authentication failed'] = "Falha na Autenticação";
$strings['LDAP connection failed'] = "Falha na conexão com LDAP/AD";
$strings['Logout successful'] = "Logout efetuado com sucesso";
$strings['IMAP Authentication: no match'] = "Autenticação IMAP: não corresponde";
$strings['Search for messages whose:'] = "Procurar por mensagens:";
$strings['Content Type'] = "Tipo de Conteúdo";
$strings['Clear search results'] = "Limpar resultados da pesquisa";
$strings['contains'] = "contém";
$strings['doesn\'t contain'] = "não contém";
$strings['equals'] = "é igual";
$strings['doesn\'t equal'] = "não é igual";
$strings['All'] = "Todos";
$strings['Spam'] = "Spam";
$strings['Banned'] = "Anexo";
$strings['last'] = "ultima";
$strings['first'] = "primeira";
$strings['previous'] = "anterior";
$strings['There was an error executing your query'] = 'Ocoreu um erro executando sua pesquisa:';
$strings['There are no matching records.'] = 'Nenhum registro encontrado.';
$strings['Domain'] = 'Dominio';
$strings['X-Amavis-Alert'] = 'X-Amavis-Alert';
$strings['Loading Summary...'] = 'Loading Summary...';
$strings['Retrieving Messages...'] = 'Retrieving Messages...';
?>
