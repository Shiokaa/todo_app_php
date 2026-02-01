<?php

require_once __DIR__ . '/../model/tasks.model.php';

$taskModel = new Task($db);

$id = $_GET['id'] ?? $_POST['id'] ?? NULL;
$task = $taskModel->GetByID($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? "";
    $text = $_POST['text'] ?? "";

    $taskModel->Update($id, $name, $text);

    header('Location: /tasks');
    exit;
}


include __DIR__ . "/../view/editTask.view.php";
?>