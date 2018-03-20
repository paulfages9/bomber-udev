<?php

namespace App;

$dir = rtrim(str_replace('\\','/',__DIR__),'/').'/';

$page = $_GET['page'] ?? 'accueil';
$pageFile = $dir.'pages/'.$page.'.php';

if (is_file($pageFile))
{
    include($pageFile);
}
