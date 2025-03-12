<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Formulaire PHP</title>
</head>
<body>
    <header class="bg-blue-950 text-white text-center p-4">
        <h1 class="text-2xl">Formulaire de Contact</h1>
    </header>
    <form action="src\php\traitement.php" method="post" class="w-1/2 mx-auto mt-4">
        <div class="mb-4">
            <label for="nom" class="block">Nom :</label>
            <input type="text" name="nom" id="nom" class="w-full p-2 border border-gray-300"><br><br>
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email :</label>
            <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300"><br><br>
      
        </div>
        <div class="mb-4">
            <label for="message" class="block">Message :</label>
            <textarea name="message" id="message" class="w-full p-2 border border-gray-300"></textarea><br><br>
        </div>
        <input type="submit" value="Envoyer" class="bg-blue-950++ text-white p-2">
    </form>
    <footer class="bg-blue-950 text-white text-center p-4 mt-4">
        <p>&copy; 2025</p>
    </footer>
</body>
</html>
