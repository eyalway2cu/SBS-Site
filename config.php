<?php

/**
 * Site Configuration File
 *
 * This file overrides properties defined in main configuration
 * file for Caracal located in `units/config.php`.
 */

// document standard
define('_STANDARD', 'html5');
define('_TIMEZONE', 'America/New_York');

define('DEBUG', 1);
// define('SQL_DEBUG', 1);

// default session options
$session_type = Session::TYPE_BROWSER;

// database
$db_use = true;
$db_type = DatabaseType::MYSQL;
$db_config = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => 'caracal',
		'name' => 'web_engine'
	);

// configure code generation
$cache_enabled = false;
$optimize_code = false;
$url_rewrite = false;

?>
