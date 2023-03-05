<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'connexion.php';

    $requete = $database->prepare('SELECT * FROM articles ORDER BY date DESC');
    $requete->execute();

    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultat as $article) {
        echo '<h1>' . $article['title'] . '</h1>';
        echo '<p>' . $article['content'] . '</p>';
        echo '<p>' . $article['date'] . '</p>';
        echo '<a href="supprimer.php?id=' . $article['id'] . '">Supprimer</a>';
    }
    ?>
</body>
</html>