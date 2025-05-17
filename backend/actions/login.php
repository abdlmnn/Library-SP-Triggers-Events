<?php
include_once '../../config/init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $loginController->authenticate($username, $password);
}
?>