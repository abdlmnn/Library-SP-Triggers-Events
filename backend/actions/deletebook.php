<?php
include_once '../../config/init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $booksController->delete(
        $_POST['book_id']
    );
}
?>