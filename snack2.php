<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

 <section>
    <form action="snack2.php" method="GET">
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email">
    </form>
 </section>
</body>
</html>