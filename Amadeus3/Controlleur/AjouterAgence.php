<?php
require_once   '../Modele/Agence.php';
if(isset($_POST["nomA"]) && isset($_POST["adrA"]))
{

$ag=new agence(NULL, $_POST["nomA"], $_POST["adrA"]);
$res=$ag->ajouter_Agence();
 header('location:listerAgences.php');
}
 else {
    header('location:../Vue/Administrateur/AjouterAgence.php');
}
?>
