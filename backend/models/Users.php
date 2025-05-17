<?php
class Users{
    private $conn;
    public function __construct($connect){
        $this->conn = $connect;
    }
    public function login($username, $password){
        $sql = "
            CALL sp_check_login('$username', '$password')
        ";
        $result = $this->conn->query($sql);
        if($result){
            $user = $result->fetch_assoc();
            if ($user && !empty($user['user_id'])) {
                return $user;
            }
        }
        return false;
    }
}
?>