<?php
include_once '../../config/init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $copies = $_POST['copies'];
    $booksController->add($title, $author, $copies);
}
?>