<?php
header("Content-Type: application/json; charset=utf-8");
require_once './DB.php';
if (isset($_POST['content']) && isset($_POST['title']) && isset($_POST['id'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];
    $id = $_POST['id'];
    $db = new DB();
    $check = $db->updateNote($id, $title, $content);
    if ($check) {
        http_response_code(200);
        echo json_encode(array('status' => 'success'));
    } else {
        http_response_code(500);
        echo json_decode(array('status' => 'fail'));
    }
}