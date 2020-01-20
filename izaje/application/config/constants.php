<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

//define('SERVER_AP', '192.168.0.13');
//define('DOMINIO', 'localhost');
//define('DOMINIO', 'localhost/evolucionmedia/microchip_v2/alumnos');
define('DOMINIO', 'localhost/GLOBALSUPPLIER/www/izaje');
//define('DOMINIO', 'microchip.edu.pe/alumnos');
//define('SITIO_WEB', 'suministro-ci');

/*define('URL_CSS', 'https://'.DOMINIO.'/assets/css/');
define('URL_JS', 'https://'.DOMINIO.'/assets/js/');
define('URL_FONTS', 'https://'.DOMINIO.'/assets/fonts/');
define('URL_IMAGES', 'https://'.DOMINIO.'/assets/images/');
define('URL_PLUGINS', 'https://'.DOMINIO.'/assets/plugins/');
define('URL_PAGES', 'https://'.DOMINIO.'/assets/pages/');
define('URL_INICIO', 'https://'.DOMINIO.'/');*/

define('URL_CSS', 'http://'.DOMINIO.'/assets/css/');
define('URL_JS', 'http://'.DOMINIO.'/assets/js/');
define('URL_FONTS', 'http://'.DOMINIO.'/assets/fonts/');
define('URL_IMAGES', 'http://'.DOMINIO.'/assets/images/');
define('URL_PLUGINS', 'http://'.DOMINIO.'/assets/plugins/');
define('URL_PAGES', 'http://'.DOMINIO.'/assets/pages/');
define('URL_INICIO', 'http://'.DOMINIO.'/');

//define('URL_MAINDAS', 'http://'.SERVER_AP.'/pytsorteo-ci/dashboard/'); 

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */