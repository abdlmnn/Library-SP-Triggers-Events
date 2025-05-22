<?php
class Router{
    private $siteURL, $routes;
    public function __construct($siteURL){
        $this->siteURL = $siteURL;
        $this->routes = [
            'login' => $this->siteURL.'login.php',
            'index' => $this->siteURL.'index.php',       
            'dashboard' => $this->siteURL.'dashboard.php',
        ];
    }
    public function redirect($page){
        header("Location: ".$this->siteURL.$page.'.php');
        exit();
    }
    public function redirect_message($page, $message){
        $_SESSION['message'] = $message;
        header("Location: ".$this->siteURL.$page.'.php');
        exit();
    }
    public function route($name) {
        return $this->routes[$name];
    }
}
?>