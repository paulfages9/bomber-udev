<?php
namespace App;

function passwordEncrypt (string $password, string $password2) :string
{
    if ($password == $password2){
        return password_hash($password, \PASSWORD_BCRYPT);
    }
}

function eMail (string $email, string $email2) :string
{
    if ($email == $email2){
        return filter_var($email2,FILTER_VALIDATE_EMAIL);
    }
}

function comparePseudo (string $pseudo) :string
{

}