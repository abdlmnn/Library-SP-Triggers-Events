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

// CONNECTION
$database = new DatabaseController();
$connect = $database->connect();
// CONNECTION

// ROUTER
$router = new Router($siteURL);
// ROUTER

// MODEL
$userModel = new Users($connect);
// MODEL

// CONTROLLER
$loginController = new LoginController($userModel);
$logoutController = new LogoutController();
// CONTROLLER
?>