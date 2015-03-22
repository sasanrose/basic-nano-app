<?php
/*
 * NanoPHP web bootstrap
 *
 */

// Require composer autoloader
require("../vendor/autoload.php");

// Get main config file for the basic application
$config = require(__DIR__.'/../config/main.php');

// Create an application instance and start!
(new nanophp\Libraries\Application($config))->run();
