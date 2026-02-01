<?php 

    require_once __DIR__ . "/config/db.php";

    $db = Db::getInstance();

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($uri){
        case '/tasks':
            require_once __DIR__ . '/controller/tasks.controller.php';
            break;
        case '/addTask':
            require_once __DIR__ . '/controller/addTask.controller.php';
            break;
        case'/editTask':
            require_once __DIR__ . '/controller/editTask.controller.php';
            break;
        case '/deleteTask':
            require_once __DIR__ . '/controller/deleteTask.controller.php';
            break;
        default :
            http_response_code(404);
            require_once __DIR__ . '/controller/notfound.controller.php';
            break;
    }

?>

