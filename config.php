<?php
/* 
  WEF Admin                
  @Build 07.12.2022                     
  @Developer: Gustavo Henrique Ribeiro  
 */

  session_start();

  $app_name= 'WEF Admin';

  define('APP_NAME_URL', 'wefadmin');

$app_token= "a8RyjGZnxf94"; //Não pode conter caracteres especiais

/*----------------------------------------*
 *  # CAMINHO DO SERVER PARA O SISTEMA
 *--------------------------------------*/ 
if ( !defined('BASEURL') )	define('BASEURL', '/wefadmin/');

if ( !defined('URLSERVER') ) define('URLSERVER', __DIR__ . '/wefadmin/' );

/*----------------------------------------*
 *  # CONEXÃO MYSQL LOCALHOST
 *--------------------------------------*/ 
 /*
 define('DB_NAME', 'u904669542_wefadmin');
 define('DB_USER', 'u904669542_wefadmin');
 define('DB_PASS', 'g@8RxDyy');
 define('DB_HOST', 'localhost');
 */

define('DB_NAME', 'u904669542_wefadmin');
define('DB_USER', 'root');
define('DB_PASS', 'usbw');
define('DB_HOST', 'localhost');


/*----------------------------------------*
 *  #TIMEZONE
 *--------------------------------------*/ 
date_default_timezone_set('America/Sao_Paulo');