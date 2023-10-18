<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo 266</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form method="post" action="./controller/userController.php">
        <p>nom</p>
        <input type="text" name="nom">
        <p>prenom</p>
        <input type="text" name="prenom"> 
        <input type="hidden" name="action" value="ajouter"><br><br>
        <input type="submit" name="valider" value="valider" id="sub">
    </form>

</body>

</html>