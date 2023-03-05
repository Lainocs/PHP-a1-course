<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proccess.php" method="POST">
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo">

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">

        <label for="message">Message :</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>