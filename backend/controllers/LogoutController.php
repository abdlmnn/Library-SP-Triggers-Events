<?php
class LogoutController{
    private $router;
    public function __construct($router){
        $this->router = $router;
    }
    public function logout(){
        session_unset();
        session_destroy();
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Logged out successfully',
        ]);
        $this->router->redirect('login');
    }
}
?>