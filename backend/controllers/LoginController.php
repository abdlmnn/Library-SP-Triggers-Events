<?php
class LoginController{
    private $userModel, $router;
    public function __construct($userModel, $router){
        $this->userModel = $userModel;
        $this->router = $router;
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

            if($_SESSION['user']['role'] == 'admin'){
                $this->router->redirect('index');
            }
        }else{
            JsonResponseController::jsonResponse([
                'success' => false,
                'message' => 'Invalid username or password',
            ]);
        }
    }
}
?>