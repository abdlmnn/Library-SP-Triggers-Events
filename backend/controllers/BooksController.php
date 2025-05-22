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
    public function update($book_id, $title, $author, $copies){
        $this->bookModel->updateBooks($book_id, $title, $author, $copies);
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Updated book successful',
        ]);
    }
    public function delete($book_id){
        $this->bookModel->deleteBooks($book_id);
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Deleted book successful',
        ]);
    }
}
?>