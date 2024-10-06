<!-- Snack 4A:
Stampare in pagina, senza particolare stilizzazione il nome di ogni classe e sotto ognuna, i dati di ogni studente/studentessa presente nella relativa classe.
Snack 4B:
Filtrare il nostro array e mostrare, sempre suddivisi per classe, esclusivamente gli studenti e le studentesse con voto medio sufficiente.
Snack 4C:
Commentiamo il filtro del punto 4B (lasciatelo nel codice, in modo che possiamo comunque vederlo) e aggiungiamo un minimo di stile a piacere. Inseriamo quindi un form in cui l’utente possa inserire un input con il voto medio massimo, e filtriamo in base ad esso solo gli studenti che abbiano una media esclusivamente inferiore al voto inserito.
Snack 4D:
Aggiungiamo un input che consenta l’inserimento del linguaggio di programmazione preferito, e filtriamo in base ad esso solo gli studenti che abbiano quel linguaggio come preferito. -->

<?php
$classi = [
    "Classe 1A" => [
        [
            "id" => 1,
            "nome" => "Marco",
            "cognome" => "Rossi",
            "anni" => 23,
            "voto_medio" => 8.5,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 2,
            "nome" => "Luca",
            "cognome" => "Verdi",
            "anni" => 27,
            "voto_medio" => 3.5,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 3,
            "nome" => "Giulia",
            "cognome" => "Bianchi",
            "anni" => 23,
            "voto_medio" => 5.5,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 4,
            "nome" => "Sofia",
            "cognome" => "Russo",
            "anni" => 27,
            "voto_medio" => 8.0,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 5,
            "nome" => "Andrea",
            "cognome" => "Ferrari",
            "anni" => 22,
            "voto_medio" => 7.5,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 2A" => [
        [
            "id" => 27,
            "nome" => "Francesca",
            "cognome" => "Ricci",
            "anni" => 27,
            "voto_medio" => 9.0,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 22,
            "nome" => "Matteo",
            "cognome" => "Moretti",
            "anni" => 23,
            "voto_medio" => 4.3,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 30,
            "nome" => "Alessandro",
            "cognome" => "Lombardi",
            "anni" => 27,
            "voto_medio" => 5.4,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 33,
            "nome" => "Elena",
            "cognome" => "Conti",
            "anni" => 22,
            "voto_medio" => 8.4,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 20,
            "nome" => "Valeria",
            "cognome" => "Gallo",
            "anni" => 27,
            "voto_medio" => 9.5,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 3A" => [
        [
            "id" => 31,
            "nome" => "Simone",
            "cognome" => "Fabbri",
            "anni" => 22,
            "voto_medio" => 6.9,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 32,
            "nome" => "Chiara",
            "cognome" => "Riva",
            "anni" => 27,
            "voto_medio" => 5.3,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 33,
            "nome" => "Lorenzo",
            "cognome" => "Orlando",
            "anni" => 22,
            "voto_medio" => 8.2,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 34,
            "nome" => "Marta",
            "cognome" => "Martini",
            "anni" => 22,
            "voto_medio" => 4.8,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 35,
            "nome" => "Giovanni",
            "cognome" => "Giuliani",
            "anni" => 27,
            "voto_medio" => 8.1,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 4A" => [
        [
            "id" => 46,
            "nome" => "Silvia",
            "cognome" => "De Luca",
            "anni" => 30,
            "voto_medio" => 4.2,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 47,
            "nome" => "Federico",
            "cognome" => "Costa",
            "anni" => 30,
            "voto_medio" => 5.1,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 48,
            "nome" => "Michele",
            "cognome" => "Cattaneo",
            "anni" => 22,
            "voto_medio" => 3.7,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 49,
            "nome" => "Anna",
            "cognome" => "Serra",
            "anni" => 30,
            "voto_medio" => 8.6,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 50,
            "nome" => "Antonio",
            "cognome" => "Cervi",
            "anni" => 30,
            "voto_medio" => 4.0,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 5A" => [
        [
            "id" => 61,
            "nome" => "Davide",
            "cognome" => "Ferrero",
            "anni" => 33,
            "voto_medio" => 8.7,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 62,
            "nome" => "Sara",
            "cognome" => "Leoni",
            "anni" => 33,
            "voto_medio" => 4.1,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 63,
            "nome" => "Daniele",
            "cognome" => "Bertoni",
            "anni" => 33,
            "voto_medio" => 4.4,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 64,
            "nome" => "Giada",
            "cognome" => "Ragusa",
            "anni" => 30,
            "voto_medio" => 5.0,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 65,
            "nome" => "Claudio",
            "cognome" => "Lanza",
            "anni" => 30,
            "voto_medio" => 6.7,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
];
?>

<?php
// Variàveis:
$voto = $_GET["voto"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 04</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="py-3">
        <h1>HighSchool</h1>
    </header>
    <main class="container">
        <form action="snack4.php" method="get" class="mb-3">
            <div class="mb-3">
                <label for="max-voto" class="form-label">Maximum vote</label>
                <input type="number" name="voto" class="form-control" id="max-voto" aria-describedby="voto-help">
                <div id="voto-help" class="form-text">Filter students by entering the maximum vote desired.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
        <section> 
            <?php foreach($classi as $classe => $studentsList) {?>
                <div class="card mb-3 p-3" style="width: 18rem;">
                    <h2 class="card-title text-center mb-4"><?= $classe?></h2>
                    <ul class="list-unstyled">
                        <?php foreach($studentsList as $singleStudent){ ?>
                            <?php if($singleStudent["voto_medio"] <= $voto) { ?>
                            <li>
                                <h4 class="card-subtitle text-body-secondary mb-2">Student: <?= $singleStudent["id"]?></h4>
                                <span><b>Name:</b> <?= $singleStudent["nome"]?></span>
                                <span><?= $singleStudent["cognome"]?></span>
                                <p class="mb-0"><b>Age:</b> <?= $singleStudent["anni"]?></p>
                                <p class="mb-0"><b>Average vote: </b><?= $singleStudent["voto_medio"]?></p>
                                <p class="mb-4"><b>Favorite language: </b><?= $singleStudent["linguaggio_preferito"]?></p>
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>