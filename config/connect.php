<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'library'; 
$siteURL = 'http://localhost/Library-SP-Triggers-Events/frontend/';

define('hostname', $host);
define('username', $user);
define('password', $password);
define('database', $database);
define('siteURL', $siteURL);

// AUTOLOAD
include_once __DIR__.'/../backend/utils/autoload.php';
// AUTOLOAD

// CONNECTIONS DATABASE
$connection = new DatabaseController();
// CONNECTIONS DATABASE

// ROUTER
$router = new Router($siteURL);
// ROUTER


?>