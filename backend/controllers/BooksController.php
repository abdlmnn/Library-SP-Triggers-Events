<?php
class BooksController{
    private $bookModel;
    public function __construct($bookModel){
        $this->bookModel = $bookModel;
    }
    public function display(){
        $books = $this->bookModel->displayBooks();
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Fetching books successful',
            'books' => $books,
        ]);
    }
    public function add($title, $author, $copies){
        $this->bookModel->addBooks($title, $author, $copies);
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Added book successful',
        ]);
    }
}
?>