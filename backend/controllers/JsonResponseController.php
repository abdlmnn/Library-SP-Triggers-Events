<?php
class JsonResponseController{
    public static function jsonResponse(array $data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
//hi
?>
