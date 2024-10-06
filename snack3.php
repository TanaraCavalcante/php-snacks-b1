 <!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [
        'Teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'Pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
    <style>
        div:first-child {
        background-color: red;
        }

        div:nth-child(2){
        background-color: green;
        }
    </style>
</head>
<body>
    
    <section>
        
            <?php foreach($db as $item => $list)  { ?>
                <div>
                    <h2><?= $item ?></h2>
                    <ul>
                        <?php foreach($list as $listItem) {?>
                        <li>
                            <span><?= $listItem["name"]?></span>
                            <span><?= $listItem["lastname"]?></span>
                        </li>
                        <?php }?>
                    </ul>
                </div> 
            <?php }?>
        
    </section>
</body>
</html>