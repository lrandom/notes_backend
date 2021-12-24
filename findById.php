<?php
header("Content-Type: application/json; charset=utf-8");
require_once './DB.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = new DB();
    try {
        $obj = $db->findById($id);
        http_response_code(200);
        echo json_encode($obj);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_decode(array('status' => 'fail'));
    }
}
