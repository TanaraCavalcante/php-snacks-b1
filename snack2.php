

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
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="number" name="age" placeholder="Age">
        <button>submit</button>
        <button>reset</button>
    </form>

    <h3>
    <?php
    // if(str_contains($_GET["email"], "@",".") && is_numeric($_GET["age"])){
    //     echo "Acesso Riuscito";
    // }else{
    //     echo "Acesso Negato!";
    // }
    ?>
    </h3>
 </section>
</body>
</html>