<?php
// Version
define('VERSION', '2.3.0.2.3');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}

//VirtualQMOD
require_once('../vqmod/vqmod.php');
$vqmod = new VQMod();

// VQMODDED Startup
require_once($vqmod->modCheck(DIR_SYSTEM . 'startup.php'));

start('admin');