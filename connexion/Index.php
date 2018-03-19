<!DOCTYPE html>
<html lang="en">
<head>
    <title>U'Bomber</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSS Perso -->
    <link rel="stylesheet" href="css/connect.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include("pageHeader.php"); ?>

<div class="container">

    <div class="col-md-4 col-sm-push-4">
        <div class="panel panel-default transparencePanel">
            <div class="panel-body text-center">
                <form>

                    <div class="input-group marginTop">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="pseudo" type="text" class="form-control input-sm" name="Pseudo" placeholder="Pseudo">
                    </div>

                    <div class="input-group marginTop">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control input-sm" name="password" placeholder="Password">
                    </div>

                </form>

                <button type="button" class="btn btn-primary marginTop">Connexion</button>
                <button type="button" class="btn btn-primary marginTop">Inscription</button>

            </div>

            <div class="panel-footer text-center transparencePanel">
                <button type="button" class="btn btn-default">Démarer sans se connecter</button>
            </div>

        </div>
    </div>
</div>

</body>

<?php include("pageFooter.php"); ?>

</html>