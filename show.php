<?php

require_once 'config/bdd.php';

$id = $_GET['id'];

$query = $pdo->query('SELECT * FROM jokes WHERE id = '. $id);
$joke = $query->fetch(PDO::FETCH_ASSOC);

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

    <div class="md:container md:mx-auto bg-white border-l border-r border-gray-300 h-full flex flex-col shadow-lg pb-6">
        <header class="h-24 pt-3 pl-5 bg-yellow-200 bg-no-repeat bg-right" style="background-image: url('header-logo.svg');">
            <h1 class="text-xl">
                StuneJoke
            </h1>
            <p>Le repaire à jokes.</p>
        </header>

        <section class="w-2/3 mx-auto my-3">
            Rions dans la gourmandise. Cette espace vous propose un moment de détente et de potentielle franche rigolade à travers ses 3 jokes. <br />
            Offrez vous ici de l'amour et du rire en proposant votre joke <a href="form.php" class="text-yellow-600 hover:text-yellow-900">ici</a>.
        </section>

        <section id="jokes-list" class="mt-3 flex-1 flex flex-col md:w-2/4 md:mx-auto w-auto mx-3">
            <div class="joke border border-gray-300 w-full pt-3 px-3 rounded-md mt-3">
                <div class="font-bold">
                    <?= $joke['title']; ?>
                </div>
                <div class="pt-2 pl-2">
                    <?= nl2br($joke['content']); ?>
                </div>
                <div class="text-right text-sm italic">
                    Par <?= $joke['author']; ?> - <?= $joke['created_at']; ?>
                </div>
            </div>
        </section>
    </div>


    <footer class="text-center italic text-gray-600 py-6">
        par rachids - oh si, c'est rigolo.
    </footer>
</body>

</html>