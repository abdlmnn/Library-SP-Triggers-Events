<?php
class Router{
    private $siteURL, $routes;
    public function __construct($siteURL){
        $this->siteURL = $siteURL;
        $this->routes = [
            'login' => $this->siteURL.'login.php', 
            // 'login' => $this->siteURL.'index.php', 
            'admin-dashboard' => $this->siteURL.'dashboard.php', 
            'student-dashboard' => $this->siteURL.'student.php', 
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