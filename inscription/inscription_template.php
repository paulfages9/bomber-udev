<!DOCTYPE html>

<html lang = "fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href = "inscription.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">

    <!--titre -->
    <title> <?= $title ?> </title>

</head>

<body>
    <div class = "container">
        <div class ="row forminscr text-center">
            <h1 class = "forminscr"> <?= $titreinscr ?> </h1>
        </div>
        <div class = "row">
            <h2><?=$titreinfo ?></h2>
            <div class="form-group col-md-6 col-sm-6">
                <?php include("formulaire.php") ?>

                <button class = "bouton btn btn-success btn-block align-center"><b> Valider </b></button>
            </div>

            <div class="form-group col-md-6 col-sm-6">
                <img class="img-responsive imginscription" src="../medias/bomberinscription.jpg"/>
            </div>

        </div>
    </div>
</body>
</html>