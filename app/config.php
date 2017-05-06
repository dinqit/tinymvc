<?php
/* Definitions for our application */ 
define('DS','/');//DIRECTORY_SEPARATOR
define('APP','mvc');

/* Definitions of paths needed for our application to work */
define('WEB','public'.DS);
define('PROJECT',$_SERVER['DOCUMENT_ROOT'].APP.DS.'app'.DS);
define('PUBLIC_',$_SERVER['DOCUMENT_ROOT'].APP.DS.WEB);
define('LIB',PROJECT.'lib'.DS);
define('LAYOUTS',PUBLIC_.'templates'.DS);
define('HTTP_HOST',$_SERVER['HTTP_HOST']);
define('WWW_URI','http://'.HTTP_HOST.DS.APP.DS);
define('MODELS',PROJECT.'models'.DS);
define('VIEWS',PROJECT.'views'.DS);
// smarty section
define('SMARTY_DIR', LIB.'Smarty'.DS);
define('SMARTY_TEMPLATES_C','templates_c'.DS);
define('SMARTY_TEMPLATES','templates'.DS);
define('SMARTY_CACHE_DIR','cache'.DS);
define('SMARTY_CONFIG_DIR',PROJECT.'lib'.DS.'config'.DS);
define('SMARTY_PLUGINS_DIR',SMARTY_DIR.'plugins'.DS);
// PHPmailer section
define('PHPMAILER_DIR', LIB.'PHPMailer'.DS);
define('PHPMAILER_LANGUAGE_DIR', LIB.'PHPMailer'.DS.'language'.DS);
define('CSS',WWW_URI.WEB.'css'.DS);
define('JS',WWW_URI.WEB.'js'.DS);
define('IMAGES',WWW_URI.WEB.'images'.DS);
/** 
* Some requirements to ease our applications 
* from working.
*/
require_once(LIB.'utils.php');
require_once(LIB.'connect.php');
require_once(LIB.'Session.php');
require_once(LIB.'databaseObject.php');
?>