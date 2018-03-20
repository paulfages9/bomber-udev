<?php

namespace App;

$pageTitle = 'Page 2';
$dateNow = date('d/m/Y');
echo "<p>La date est $dateNow</p>";
$pageContent = '<p>Vous êtes sur la page 2</p>';


include($dir.'page-2-template.php');

//$obj = new MaClasse();
//$obj -> propriéte
//$obj -> method()

$currentFile = __FILE__;
echo "<p>Nom du fichier : $currentFile</p>";

echo "<p>Nous sommes à la ligne".__LINE__;

//recupérer le chemin vers le repertoire QUI CONTIENT LE FICHIER COURANT
$dir=__DIR__;

//recupère lz chzmin vers le répertoire DEPUIS LEQUEL S'EXECUTE LE SCRIPT :
$dir = getcwd();


//extraire le nom du dossier ciblé par le fichier courant
$dirName = basename($dir);