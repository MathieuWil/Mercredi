<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo 266</title>
</head>

<body>
    <form method="post" action="./controller/userController.php">
        <p>nom</p>
        <input type="text" name="nom">
        <p>prenom</p>
        <input type="text" name="prenom">
        <input type="hidden" name="action" value="ajouter">
        <input type="submit" name="valider" value="valider">
    </form>

</body>

</html>