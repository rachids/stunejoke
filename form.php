<?php

require_once 'config/bdd.php';

if (!empty($_POST)) {
    // Requête d'insertion de joke pleine de trous de sécurité.
    $sql = "INSERT INTO jokes(title, content, author) VALUES ('{$_POST['titre']}', '{$_POST['joke']}', '{$_POST['pseudo']}')";

    // Exécution de la requête.
    $pdo->query($sql);

    echo "Votre blague est enregistrée.";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StuneJoke</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <div class="container bg-white mx-auto border-l border-r border-gray-300 h-full flex flex-col shadow-lg">
        <header class="h-24 bg-yellow-200 pt-3 pl-5">
            <h1 class="text-xl">
                StuneJoke
            </h1>
            <p>Le repaire à jokes.</p>
        </header>

        <section class="w-2/3 mx-auto my-3">
            <p>
                On n'est pas là (que) pour rigoler. Faites connaître à plus de 14 visiteurs annuels toute l'étendue de vos connaissances humoristiques
                en remplissant le formulaire suivant.
            </p>

            <p>Toute joke envoyée est soumise à approbation de l'administrateur.</p>
        </section>

        <section id="add-joke" class="mt-3 flex-1 flex flex-col w-2/4 mx-auto">
            <form class="border border-gray-300 rounded-md w-full mt-6 grid grid-cols-1 gap-y-6 sm:gap-x-8 bg-yellow-200" method="POST">

                <div class="p-3">
                    <label class="block text-sm font-medium text-warm-gray-900">Votre nom:</label>
                    <input type="text" class="py-3 px-4 block w-full border border-gray-600 shadow-sm text-warm-gray-900 focus:ring-yellow-500 focus:border-yellow-500 border-gray-600 rounded-md" name="pseudo" />
                </div>

                <div class="p-3">
                    <label class="block text-sm font-medium text-warm-gray-900">Titre de la joke:</label>
                    <input type="text" class="py-3 px-4 block w-full border border-gray-600 shadow-sm text-warm-gray-900 focus:ring-yellow-500 focus:border-yellow-500 border-gray-600 rounded-md" name="titre" />
                </div>

                <div class="p-3">
                    <label class="block text-sm font-medium text-warm-gray-900">Votre joke:</label>
                    <textarea class="py-3 px-4 block w-full border border-gray-600 shadow-sm text-warm-gray-900 focus:ring-yellow-500 focus:border-yellow-500 border-gray-600 rounded-md" name="joke"></textarea>
                </div>

                <div class="p-3 text-right">
                    <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-yellow-200 bg-gray-600 hover:bg-gray-300 hover:text-yellow-700 hover:shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-800 sm:w-auto">
                        Envoyer
                    </button>
                    <a href="index.php" class="text-yellow-600 hover:text-yellow-900 border rounded-md border-gray-600 px-6 py-3">
                        Retour aux jokes
                    </a>
                </div>

            </form>
        </section>

        <footer class="text-center italic text-gray-400 pb-3">
            par rachids - oh si c'est rigolo.
        </footer>
    </div>

</body>

</html>