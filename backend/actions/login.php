<?php
include_once '../../config/init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $loginController->authenticate(
        $_POST['username'], 
        $_POST['password']
    );
}
?>