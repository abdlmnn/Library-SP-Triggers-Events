<?php
include_once '../../config/init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $booksController->add(
        $_POST['title'], 
        $_POST['author'], 
        $_POST['copies']
    );
}
?>