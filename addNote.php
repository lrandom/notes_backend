<?php
header("Content-Type: application/json; charset=utf-8");
require_once './DB.php';
if (isset($_POST['content']) && isset($_POST['title'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];
    $db = new DB();
    $check = $db->addNote($title, $content);
    if ($check) {
        http_response_code(200);
        echo json_encode(array('status' => 'success'));
    } else {
        http_response_code(500);
        echo json_decode(array('status' => 'fail'));
    }
}