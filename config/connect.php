<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'library'; 
$siteURL = 'http://localhost/Library-SP-Triggers-Events/';

define('hostname', $host);
define('username', $user);
define('password', $password);
define('database', $database);
define('siteURL', $siteURL);

include_once './backend/controllers/DatabaseController.php';
$connection = new DatabaseController();

include_once './backend/router/Router.php';
$router = new Router($siteURL);

?>