<?php

require_once __DIR__ . '/../model/tasks.model.php';

$taskModel = new Task($db);

$id = $_GET['id'];
$taskModel->Delete($id);

header('Location: /tasks');

?>