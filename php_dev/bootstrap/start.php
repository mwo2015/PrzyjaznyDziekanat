<?php
use Juniper\App;
// This is starting file that initialize aplication


// load all dependencies (from composer Autoload file)
require_once '../vendor/autoload.php';



//Loading Config files:
$database 	= require_once '../app/config/database.php';
$logger 	= require_once '../app/config/logger.php';
$debug		= require_once '../app/config/debug.php';

// Configuring via App static container
App::initializeDebug($debug);
App::initializeLogger($logger);
App::initializeDatabase($database);


// Initialize routing
require_once '../app/route.php';


