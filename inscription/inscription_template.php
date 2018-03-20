<!DOCTYPE html>
<html lang = "fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href = "inscription.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Ewert" rel="stylesheet">
    <link rel="icon" href="../medias/bomb.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">

    <!--titre -->
    <title> <?= $title ?> </title>

</head>

<body class="bodyinscription">
    <div class="container-fluid">
        <div class ="row forminscr col-md-6 col-sm-6 col-lg-6 col-xs-10 col-md-push-3 col-sm-push-3 col-xs-push-1 text-center">
            <h1> <?= $titreinscr ?> </h1>
        </div>
    </div>
    <div class = "container-fluid">
        <div class = "row infor col-md-6 col-sm-6 col-lg-6 col-xs-10 col-md-push-3 col-xs-push-1 col-sm-push-3 center">
            <h2 class = "forminscription"> <?=$titreinfo ?> </h2>
            <div class="form-group">
                <form method="post" >
                    <!--partie où l'on entre nos informations personnels -->
                    <label class = "forinput" for="nom">Nom:</label>
                    <input name="nom" type="text" class="form-control" id="nom" required>

                    <label class = "forinput" for="prenom">Prénom:</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" required>

                    <label class = "forinput" for="age">Age:</label>
                    <input name="age" type="text" class="form-control" id="age" required>

                    <label class = "forinput" for="pseudo">Veuillez choisir un pseudo:</label>
                    <input name="pseudo" type="text" class="form-control" id="pseudo" required>

                    <label class = "forinput" for="email">Adresse Email:</label>
                    <input name="email" type="email" class="form-control" id="email" required>

                    <label class = "forinput" for="cemail">Confirmer votre adresse Email:</label>
                    <input name="email2" type="email" class="form-control" id="cemail" required>

                    <label class = "forinput" for="pwd">Saisissez votre mot de passe:</label>
                    <input name="password" type="password" class="form-control" id="pwd" required>

                    <label class = "forinput" for="cpwd">Confirmer votre mot de passe:</label>
                    <input name="password2" type="password" class="form-control" id="cpwd" required>

                    <div class="checkbox">
                        <label><input type="checkbox" value="" required>J'accepte les conditions d'utilisation et notre politique de confidentialité !</label>
                    </div>

                    <!--bouton validation-->
                    <button class = "bouton btn btn-primary btn-block align-center"> <b> Valider </b> </button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>