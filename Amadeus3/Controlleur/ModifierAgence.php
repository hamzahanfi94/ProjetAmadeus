<?php
require_once '../Modele/Agence.php';
$ag=  Agence::UpdateOne($_POST["id"], $_POST["nom"], $_POST["adresse"]);
header("location:../Vue/Administrateur/EspaceAdmin.php")

?>
