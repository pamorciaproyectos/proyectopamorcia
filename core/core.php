<?php
/*
EL NUCLEO DE LA APLICACION
*/

#Contantes de conexión
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pamorciaproyectos');

#Contantes de la aplicacion
define('HTML_DIR', 'html/');
define('CORE_DIR', 'core/');
define('APP_TITLE', 'PamorciaProyectos');
define('APP_URL', 'http://localhost/proyectos/proyectopamorcia/');

#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');

 ?>
