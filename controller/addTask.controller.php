<?php

require_once __DIR__ . "/../model/tasks.model.php";

$taskModel = new Task($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? "";
    $text = $_POST['text'] ?? "";

    $taskModel->Create($name, $text);

    header('Location: /tasks');
    exit;
}

include __DIR__ . "/../view/addTask.view.php";
?>  