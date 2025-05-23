<?php
class BorrowRecords{
    private $conn, $borrow;
    public function __construct($connect){
        $this->conn = $connect;
        $this->borrow = [];
    }
    public function GetAllBorrow(){
        $sql = "
            CALL GetAllBorrow()
        ";
        $result = $this->conn->query($sql);
        return $result;
    }   
}
?>