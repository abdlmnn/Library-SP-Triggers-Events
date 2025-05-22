<?php
class LogoutController{
    private $router, $login;
    public function __construct($router){
        $this->router = $router;
        $this->login = $this->router->route('login');
    }
    public function logout(){
        session_unset();
        session_destroy();
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Logged out successfully',
            'login' => $this->login,
        ]);
    }
}
?>