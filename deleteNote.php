<?php
header("Content-Type: application/json; charset=utf-8");
require_once './DB.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $db = new DB();
    $check = $db->deleteNote($id);
    if ($check) {
        http_response_code(200);
        echo json_encode(array('status' => 'success'));
    } else {
        http_response_code(500);
        echo json_decode(array('status' => 'fail'));
    }
}