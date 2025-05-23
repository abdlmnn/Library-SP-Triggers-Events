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

// MIDDLEWARE
$middleware = new AuthMiddleware($router);
// MIDDLEWARE

// MODEL
$userModel = new Users($connect);
$bookModel = new Books($connect);
$borrowModel = new BorrowRecords($connect);
// MODEL

// CONTROLLER
$loginController = new LoginController($userModel, $router);
$logoutController = new LogoutController($router);
$booksController = new BooksController($bookModel);
$borrowController = new BorrowController($borrowModel);
// CONTROLLER
?>