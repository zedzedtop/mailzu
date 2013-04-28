<?php
/**
* Spanish (es) translation file.
* Based on phpScheduleIt translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*
* @author Samuel Tran <stran2005@users.sourceforge.net>
* @author Brian Wong <bwsource@users.sourceforge.net>
* @author Nicolas Peyrussie <peyrouz@users.sourceforge.net>
* @translator Ricardo Muñoz <rmunoz@warp.es>
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
$days_full = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves',
'Viernes', 'Sábado');
// The three letter abbreviation
$days_abbr = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
// The two letter abbreviation
$days_two  = array('Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa');
// The one letter abbreviation
$days_letter = array('D', 'L', 'M', 'X', 'J', 'V', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
// The three letter month name
$months_abbr = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

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
$dates['header'] = '%A, %d %B, %Y';

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
$strings['yyyy'] = 'aaaa';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrador';
$strings['Welcome Back'] = 'Bienvenido de nuevo, %s';
$strings['Log Out'] = 'Salir de sesión';
$strings['Help'] = 'Ayuda';

$strings['Admin Email'] = 'Correo administrador';

$strings['Default'] = 'Por defecto';
$strings['Reset'] = 'Reestablecer';
$strings['Edit'] = 'Editar';
$strings['Delete'] = 'Eliminar';
$strings['Cancel'] = 'Cancelar';
$strings['View'] = 'Ver';
$strings['Modify'] = 'Modificar';
$strings['Save'] = 'Guardar';
$strings['Back'] = 'Volver';
$strings['BackMessageIndex'] = 'Volver a mensajes';
$strings['ToggleHeaders'] = 'Mostrar cabeceras';
$strings['ViewOriginal'] = 'Ver original';
$strings['Next'] = 'Siguiente';
$strings['Close Window'] = 'Cerrar ventana';
$strings['Search'] = 'Buscar';
$strings['Clear'] = 'Limpiar';

$strings['Days to Show'] = 'Días a ver';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Oculto';
$strings['Show Summary'] = 'Mostrar resumen';
$strings['Add Schedule'] = 'Añadir calendario';
$strings['Edit Schedule'] = 'Editar calendario';
$strings['No'] = 'No';
$strings['Yes'] = 'Sí';
$strings['Name'] = 'Nombre';
$strings['First Name'] = 'Nombre';
$strings['Last Name'] = 'Apellidos';
$strings['Resource Name'] = 'Resource Name';
$strings['Email'] = 'Correo electrónico';
$strings['Institution'] = 'Institución';
$strings['Phone'] = 'Teléfono';
$strings['Password'] = 'Contraseña';
$strings['Permissions'] = 'Permisos';
$strings['View information about'] = 'Ver información sobre %s %s';
$strings['Send email to'] = 'Enviar correo a  %s %s';
$strings['Reset password for'] = 'Reestablecer contraseña a %s %s';
$strings['Edit permissions for'] = 'Editar permisos a %s %s';
$strings['Position'] = 'Posición';
$strings['Password (6 char min)'] = 'Contraseña (%s carácteres min.)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Introducir contraseña de nuevo';

$strings['Date'] = 'Fecha';
$strings['Email Users'] = 'Correo de usuarios';
$strings['Subject'] = 'Asunto';
$strings['Message'] = 'Mensaje';
$strings['Send Email'] = 'Enviar correo';
$strings['problem sending email'] = 'Lo sentimos, hay un problema enviando su correo. Por favor inténtelo mas tarde.';
$strings['The email sent successfully.'] = 'El correo se ha enviado correctamente.';
$strings['Email address'] = 'Dirección de correo';
$strings['Please Log In'] = 'Por favor inicie sesión';
$strings['Keep me logged in'] = 'Mantener sesión <br/>(requiere cookies)';
$strings['Password'] = 'Contraseña';
$strings['Log In'] = 'Iniciar sesión';
$strings['Get online help'] = 'Obtener ayuda';
$strings['Language'] = 'Lenguaje';
$strings['(Default)'] = '(Por defecto)';

$strings['Email Administrator'] = 'Correo al administrador';

$strings['N/A'] = 'N/A';
$strings['Summary'] = 'Resumen';

$strings['View stats for schedule'] = 'Ver estadísticas por calendario';
$strings['At A Glance'] = 'De un vistazo';
$strings['Total Users'] = 'Usuarios totales';
$strings['Total Resources'] = 'Recursos totales';
$strings['Total Reservations'] = 'Reservas totales';
$strings['Max Reservation'] = 'Reservas máximas';
$strings['Min Reservation'] = 'Reservas mínimas';
$strings['Avg Reservation'] = 'Reservas medias';
$strings['Most Active Resource'] = 'Recurso más activo';
$strings['Most Active User'] = 'Usuario más activo';
$strings['System Stats'] = 'Estadísticas del sistema';
$strings['phpScheduleIt version'] = 'Versión de phpScheduleIt';
$strings['Database backend'] = 'Sistema de base de datos';
$strings['Database name'] = 'Nombre de la base de datos';
$strings['PHP version'] = 'Versión de PHP';
$strings['Server OS'] = 'S.O. del servidor';
$strings['Server name'] = 'Nombre del servidor';
$strings['phpScheduleIt root directory'] = 'Directorio raíz de phpScheduleIt';
$strings['Using permissions'] = 'Usando permisos';
$strings['Using logging'] = 'Usando inicio de sesión';
$strings['Log file'] = 'Fichero de log';
$strings['Admin email address'] = 'Dirección de correo del administrador';
$strings['Tech email address'] = 'Dirección de correo de la asistencia técnica';
$strings['CC email addresses'] = 'Dirección de correo en CC';
$strings['Reservation start time'] = 'Hora de comienzo de la reserva';
$strings['Reservation end time'] = 'Hora de finalización de la reserva';
$strings['Days shown at a time'] = 'Días mostrados cada vez';
$strings['Reservations'] = 'Reservas';
$strings['Return to top'] = 'Volver arriba';
$strings['for'] = 'para';

$strings['Per page'] = 'Por página';
$strings['Page'] = 'Página';

$strings['You are not logged in!'] = '¡No ha iniciado sesión!';

$strings['Setup'] = 'Setup';
$strings['Invalid User Name/Password.'] = 'Usuario/Contraseña invalidas.';

$strings['Valid username is required'] = 'Usuario válido requerido.';

$strings['Close'] = 'Cerrar';

$strings['Admin'] = 'Administrar';

$strings['My Quick Links'] = 'Mis enlaces rápidos';

$strings['Go to first page'] = 'Ir a la primera página';
$strings['Go to last page'] = 'Ir a la última página';
$strings['Sort by descending order'] = 'Ordenar en sentido descendente';
$strings['Sort by ascending order'] = 'Ordenar en sentido ascendente';
$strings['Spam Quarantine'] = 'Spam en cuarentena';
$strings['Message View'] = 'Ver mensaje';
$strings['Attachment Quarantine'] = 'Cuarentena de adjuntos';
$strings['No such content type'] = 'No hay tal tipo de contenido ';
$strings['No message was selected'] = 'Ningún mensaje fue seleccionado ...';
$strings['Unknown action type'] = 'Tipo de acción desconocida ...';
$strings['A problem occured when trying to release the following messages'] = 'Ha ocurrido un problema al liberar los siguientes mensajes';
$strings['A problem occured when trying to delete the following messages'] = 'Ha ocurrido un problema al eliminar los siguientes mensajes';
$strings['Please release the following messages'] = 'Por favor, libere los siguiente mensajes';
$strings['To'] = 'Para';
$strings['From'] = 'De';
$strings['Subject'] = 'Asunto';
$strings['Date'] = 'Fecha';
$strings['Score'] = 'Puntuación';
$strings['Mail ID'] = 'ID Correo';
$strings['Status'] = 'Estado';
$strings['Print'] = 'Imprimir';
$strings['CloseWindow'] = 'Cerrar';
$strings['Unknown server type'] = 'Tipo de servidor desconocido ...';
$strings['Showing messages'] = "Mostrando los mensajes %s a %s &nbsp;&nbsp; (%s total)\r\n";
$strings['View this message'] = 'Ver este mensaje';
$strings['Message Unavailable'] = 'Mensaje no disponible';
$strings['My Quarantine'] = 'Mi cuarentena';
$strings['Site Quarantine'] = 'Cuarentena del sitio';
$strings['Message Processing'] = 'Procesando mensaje';
$strings['Quarantine Summary'] = 'Resumen de la cuarentena';
$strings['Site Quarantine Summary'] = 'Resumen de la cuarentena del sitio';
$strings['Login'] = 'Iniciar sesión';
$strings['spam(s)'] = 'spam(s)';
$strings['attachment(s)'] = 'adjunto(s)';
$strings['pending release request(s)'] = 'Peticion(es) de liberación pendientes';
$strings['virus(es)'] = 'virus';
$strings['bad header(s)'] = 'mal(os) jefe(s)';
$strings['You have to type some text'] = 'Tiene que escribir algo de texto';
$strings['Release'] = 'Liberar';
$strings['Release/Request release'] = 'Liberar/Pedir liberación';
$strings['Request release'] = 'Pedir liberar';
$strings['Delete'] = 'Eliminar';
$strings['Delete All'] = 'Eliminar todos';
$strings['Send report and go back'] = 'Enviar un informe y volver';
$strings['Go back'] = "Ir atrás";
$strings['Select All'] = "Seleccionar todos";
$strings['Clear All'] = "No seleccionar ninguno";
$strings['Access Denied'] = "Acceso denegado";
$strings['My Pending Requests'] = "Mis peticiones pendientes";
$strings['Site Pending Requests'] = "Peticion del sitio pendientes";
$strings['Cancel Request'] = "Cancelar petición";
$strings['User is not allowed to login'] = "Inicio de sesión de usuario no permitida.";
$strings['Authentication successful'] = "Autenticación correcta";
$strings['Authentication failed'] = "Autenticación fallida";
$strings['LDAP connection failed'] = "Conexión LDAP/AD fallida";
$strings['Logout successful'] = "Sesión cerrada correctamente";
$strings['IMAP Authentication: no match'] = "Autenticación IMAP: no concuerda";
$strings['Search for messages whose:'] = "Buscar por mensajes los cuales:";
$strings['Content Type'] = "Tipo de contenido";
$strings['Clear search results'] = "Limpiar resultados de la búsqueda";
$strings['contains'] = "contiene";
$strings['doesn\'t contain'] = "no contiene";
$strings['equals'] = "igual";
$strings['doesn\'t equal'] = "no igual";
$strings['All'] = "Todos";
$strings['Spam'] = "Spam";
$strings['Banned'] = "Prohibidos";
$strings['Virus'] = "Virus";
$strings['Viruses'] = 'Viruses';
$strings['Bad Header'] = "Mal Jefe";
$strings['Bad Headers'] = 'Malos Jefes';
$strings['Pending Requests'] = 'Peticiones de liberación';
$strings['last'] = "último";
$strings['first'] = "primero";
$strings['previous'] = "anterior";
$strings['There was an error executing your query'] = 'Ha habido un error ejecutando la petición';
$strings['There are no matching records.'] = 'No hay registros que concuerden con la búsqueda.';
$strings['Domain'] = 'Dominio';
$strings['Total'] = 'Total';
$strings['X-Amavis-Alert'] = 'X-Amavis-Alert';
$strings['Loading Summary...'] = 'Loading Summary...';
$strings['Retrieving Messages...'] = 'Retrieving Messages...';
?>
