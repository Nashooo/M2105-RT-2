<h1>Liste des variables de session</h1>
<?php
session_start();
foreach($_SESSION as $k=>$v){
    echo $k."=>".$v."<br>";
}
?>