<?php

error_reporting(E_ALL); //motor de exepciones usa E_all
ini_set('ignore_repeated_errors', TRUE); //siempre usa verdadero
ini_set('display_errors', FALSE); //pantalla de exepcion, usa false solo en produccion
ini_set('log_errors', TRUE); //motor de registros de archivos de exepcion
ini_set("error_log", "./php-error.log"); //los errores se envian al archivo que especificamos
error_log("hola de aplicacion web");

require_once 'libs/database.php';
require_once 'classes/errormessages.php';
require_once 'classes/successmessages.php';
require_once 'libs/controller.php';
require_once 'libs/model.php';
require_once 'libs/view.php';
require_once 'libs/app.php';

require_once 'config/config.php';

$app = new app();