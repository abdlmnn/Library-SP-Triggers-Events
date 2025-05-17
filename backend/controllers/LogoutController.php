<?php
class LogoutController{
    public function logout(){
        session_unset();
        session_destroy();
        JsonResponseController::jsonResponse([
            'success' => true,
            'message' => 'Logged out successfully',
        ]);
    }
}
?>