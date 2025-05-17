<?php
class DatabaseController{
    public $conn;
    public function __construct(){
        $this->conn = new mysqli(
            hostname,
            username, 
            password, 
            database
        );
        if($this->conn->connect_error){
            die('Connection Failed: '. $this->conn->connect_error);
        }else{
            // echo 'Connection Database is successful';
        }
    }
    public function connect(){
        return $this->conn;
    }
}
?>