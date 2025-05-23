<?php
class AuthMiddleware{
    private $router;
    public function __construct($router){
        $this->router = $router;
    }
    public function checkAuth(){
        !isset($_SESSION['user']) ? $this->router->redirect('login') : null;
    }
}
?>