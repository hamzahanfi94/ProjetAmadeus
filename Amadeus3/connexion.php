<?php
try{
    $bd='mysql:host=localhost;dbname=gestion_amadeus';
    $user='root';
    $pas='';
    $connexion=new PDO($bd,$user,$pas);
 
} 
catch (Exception $ex) {
    echo "connexion impossible!!!".$ex->getMessage();
}



