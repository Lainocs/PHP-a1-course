<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $users = [
        [
            'name' => 'Nicolas',
            'age' => 17,
        ],
        [
            'name' => 'Jean',
            'age' => 25,
        ],
        [
            'name' => 'Pierre',
            'age' => 30,
        ],
    ];

    foreach ($users as $user) { ?>
        <h1><?php echo $user['name'] ?></h1>

        <?php

        if ($user['age'] >= 18) { ?>
            <h2>Vous êtes majeur</h2>
        <?php
        } else { ?>
            <h2 style="color: red;">Vous êtes mineur</h2>
        <?php
        } 
    }

    ?>
</body>

</html>