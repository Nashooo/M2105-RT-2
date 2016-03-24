<?php

include './../functions.php';
if(array_key_exists("nom",$_POST))
{
    session_start();
    $_SESSION["user"]=$_POST["nom"];
    getHeader(false,"Exercice 1 validation");
    echo $_SESSION["user"];
}
?>