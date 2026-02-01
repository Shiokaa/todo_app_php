<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo APP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-full flex flex-col justify-center items-center bg-gray-300">

     <main class="h-full w-full lg:w-[50%] flex flex-col items-center justify-center">
        <div class="flex items-center justify-between w-full p-4">
            <h1 class="text-2xl lg:text-4xl font-bold">Mes tâches </h1>
            <a href="/addTask"><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#00c93c" class="cursor-pointer"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></a>
        </div>
        <ul class="w-full p-4 flex flex-col gap-12">
    <?php foreach($allTasks as $task): ?>
        <li class="flex items-center justify-between">
            <div class="w-full flex flex-col gap-2">
                <h2 class="text-lg lg:text-xl font-semibold"><?= htmlspecialchars($task['name']) ?></h2>
                <p class="text-gray-700"><?= htmlspecialchars($task['text']) ?></p>
            </div>
            
            <div class="flex flex-col gap-4 md:flex-row items-center">
                <a href="/deleteTask?id=<?= $task['id'] ?>" onclick="return confirm('Supprimer cette tâche ?')">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ff0000" class="cursor-pointer">
                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                    </svg>
                </a>

                <a href="/editTask?id=<?= $task['id']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#043296" class="cursor-pointer">
                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                    </svg>
                </a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
    </main>
</body>
</html>