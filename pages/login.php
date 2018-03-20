<?php

namespace App;

$pageTitle = 'Connexion';
$pageContent = '<p>Vous êtes sur la page de connexion </p>';

include ($dir.'page-2-template.php');

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if(!is_null($login) && !is_null($password))
{
    $encrypted = functions\passwordEncrypt($password);
}