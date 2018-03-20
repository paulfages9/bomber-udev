<?php
namespace App;

$title = 'Inscription';
$titreinscr = "Bienvenue sur la page d'inscription";
$titreinfo = "Information personnelles :";

include('inscription_template.php');

$nom = $_POST['nom'] ?? null;

$prenom = $_POST['prenom'] ?? null;

$age = $_POST['age'] ?? null;

$pseudo = $_POST['pseudo'] ?? null;

$email = $_POST['email'] ?? null;
$email2 = $_POST['email2'] ?? null;

$password = $_POST['password'] ?? null;
$password2 = $_POST['password2'] ?? null;


if (!is_null($password2) && !is_null($password)){
    $pwdEncrypt = passwordEncrypt($password, $password2);
}

if (!is_null($email2) && !is_null($email)){
    $mail = eMail($email,$email2);
}

if (!is_null($pseudo)){
    $pseu = comparePseudo($pseudo);
}

