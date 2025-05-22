<?php
class LoginController{
    private $userModel, $router, $admin, $student;
    public function __construct($userModel, $router){
        $this->userModel = $userModel;
        $this->router = $router;
        $this->admin = $this->router->route('index');
        $this->student = $this->router->route('dashboard');
    }
    public function authenticate($username, $password){
        $user = $this->userModel->login($username, $password);
        if($user){
            $_SESSION['user'] = [
                'id' => $user['user_id'],
                'username' => $user['username'],
                'role' => $user['role']
            ];
            if($_SESSION['user']['role'] === 'admin'){
                $dashboard = $this->admin;
            }else if($_SESSION['user']['role'] === 'student'){
                $dashboard = $this->student;
            }
            JsonResponseController::jsonResponse([
                'success' => true,
                'message' => 'Login successful',
                'dashboard' => $dashboard,
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