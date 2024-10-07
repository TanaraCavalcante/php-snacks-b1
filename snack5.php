<!-- Creare una funzione che controlli se una parola (o una frase) sia palindroma, senza usare funzioni built-in, e ritorni true se lo e', false altrimenti. Testarla attraverso una chiamata GET via form. -->

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is palindrome?</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <section>
            <form action="snack5.php" method="get">
                <div class="mb-3">
                    <label for="word" class="form-label">Maximum vote</label>
                    <input type="number" name="voto" class="form-control" id="word" aria-describedby="voto-help">
                    <div id="voto-help" class="form-text">Filter students by entering the maximum vote desired.</div>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </section>
    </main>
</body>
</html>