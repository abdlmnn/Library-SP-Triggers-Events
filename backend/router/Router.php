<?php
class Router{
    private $siteURL;
    public function __construct($siteURL){
        $this->siteURL = $siteURL;
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
}
?>