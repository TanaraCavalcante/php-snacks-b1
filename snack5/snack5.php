<!-- Creare una funzione che controlli se una parola (o una frase) sia palindroma, senza usare funzioni built-in, e ritorni true se lo e', false altrimenti. Testarla attraverso una chiamata GET via form. -->

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
    <header class="mb-2 py-3 text-center">
        <h2>Palindrome!</h2>
    </header>
    <main class="container">
        <section>
            <form action="response.php" method="get">
                <div class="mb-2">
                    <input type="text" name="palindrome" class="form-control" aria-describedby="word-help">
                    <div id="word-help" class="form-text">Scrivi la tua parola per sapere se è palindroma.</div>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </section>
    </main>
</body>
</html>