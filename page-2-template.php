<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $pageTitle?></title>
</head>
<body>
<ul>
    <li>
        <a href="index.php?page=accueil">Accueil</a>
    </li>
</ul>
<div>
    <?= $pageContent?>
</div>

<!--pour qu'un form envoie un fichier => enctype="multipart/form-data"-->
<form method="post" action="index.php?page=login">
    <label for="login">Identifiant</label>
    <input type="text" name="login" id="login" required/>
    <br>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" required/>
    <br>
    <input type="submit" value="Connexion"/>
</form>

</body>
</html>