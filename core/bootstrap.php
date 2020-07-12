<?php
// Define paths
define('CORE', dirname(__FILE__));
define('HTDOCS', dirname(CORE));

// Automatically load files from library folder
foreach (glob(CORE . '/library/*.php') as $Class) {
    require $Class;
}

use App\Database;
use Chirp\Cryptor;

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Prepare database connection for usage
$database = new Database();

// Prepare encryption functions for usage
$encryption_key = 'CKXH2U1RPY3EFD70TAS1ZG4N8WQBOVI6AMJ5';
$cryptor = new Cryptor($encryption_key);