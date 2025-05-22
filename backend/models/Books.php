<?php
class Books{
    private $conn, $books;
    public function __construct($connect){
        $this->conn = $connect;
        $this->books = [];
    }
    public function displayBooks(){
        $sql = "
            CALL GetAllBooks()
        ";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()){
            $this->books[] = $row;
        }
        return $this->books;
    }
    public function addBooks($title, $author, $copies){
        $sql = "
            CALL sp_add_book(
                '$title',
                '$author',
                '$copies'
            )
        ";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function updateBooks($book_id, $title, $author, $copies){
        $sql = "
            CALL UpdateBook(
                '$book_id',
                '$title',
                '$author',
                '$copies'
            )
        ";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function deleteBooks($book_id){
        $sql = "
            CALL DeleteBook(
                '$book_id'
            )
        ";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>