<?php
header("Content-Type: application/json; charset=utf-8");
require_once './DB.php';
$db = new DB();
try {
    $list = $db->getAllNotes();
    http_response_code(200);
    echo json_encode($list);
} catch (Exception $e) {
    http_response_code(500);
    echo json_decode(array('status' => 'fail'));
}
