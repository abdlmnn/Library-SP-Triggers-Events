<?php
class LoginController{
    private $userModel;
    public function __construct($userModel){
        $this->userModel = $userModel;
    }
    public function authenticate($username, $password){
        $user = $this->userModel->login($username, $password);
        if($user){
            $_SESSION['user'] = [
                'id' => $user['user_id'],
                'username' => $user['username'],
                'role' => $user['role']
            ];
            JsonResponseController::jsonResponse([
                'success' => true,
                'message' => 'Login successful',
                'role' => $_SESSION['user']['role'],
            ]);
        }else{
            JsonResponseController::jsonResponse([
                'success' => false,
                'message' => 'Invalid username or password',
            ]);
        }
    }
}
?>