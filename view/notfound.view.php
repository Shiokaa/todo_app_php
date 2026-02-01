<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo APP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-full flex flex-col justify-center items-center bg-gray-300">
    <main class="h-full w-full lg:w-[50%] flex flex-col items-center justify-center text-center px-4">
    <h1 class="text-9xl font-bold text-[#043296]">404</h1>
    
    <div class="mt-4">
        <h2 class="text-2xl lg:text-3xl font-semibold text-gray-800">Oups ! Cette tâche n'existe pas.</h2>
        <p class="text-gray-600 mt-2">La page que vous recherchez semble avoir été supprimée ou déplacée.</p>
    </div>

    <a href="/tasks" class="mt-8 flex items-center gap-2 bg-[#043296] text-white px-6 py-3 rounded-xl shadow-lg hover:bg-blue-800 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor">
            <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
        </svg>
        Retour à la liste
    </a>
</main>
</body>
</html>