<?php 

require_once __DIR__ . '/../model/tasks.model.php';

$taskModel = new Task($db);

$allTasks = $taskModel->getAll();

include __DIR__ . "/../view/tasks.view.php";
?>