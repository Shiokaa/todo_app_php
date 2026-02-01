<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo APP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-full flex flex-col justify-center items-center bg-gray-300">
<main class="h-full w-full lg:w-[50%] flex flex-col items-center justify-center mx-auto">
    <div class="flex items-center justify-between w-full p-4 mb-8">
        <h1 class="text-2xl lg:text-4xl">Ajouter une tâche</h1>
        <a href="/tasks">
            <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#043296" class="cursor-pointer">
                <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
            </svg>
        </a>
    </div>

    <form action="/addTask" method="POST" class="w-full p-4 flex flex-col gap-6">
        <div class="flex flex-col gap-2">
            <label for="name" class="text-lg font-medium text-gray-700">Titre de la tâche</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                required
                placeholder="Ex: Acheter du pain..." 
                class="w-full p-3 bg-white border-b-2 border-gray-300 focus:border-[#043296] outline-none transition-colors text-lg"
            >
        </div>

        <div class="flex flex-col gap-2">
            <label for="text" class="text-lg font-medium text-gray-700">Description</label>
            <textarea 
                name="text" 
                id="text" 
                rows="4"
                placeholder="Détails de la tâche..." 
                class="w-full p-3 bg-white border-b-2 border-gray-300 focus:border-[#043296] outline-none transition-colors text-lg resize-none"
            ></textarea>
        </div>

        <button 
            type="submit" 
            class="w-full mt-4 bg-[#00c93c] hover:bg-[#00a832] text-white font-bold py-4 rounded-xl shadow-lg transform active:scale-95 transition-all text-xl"
        >
            Enregistrer la tâche
        </button>
    </form>
</main>
</body>
</html>