<?php
require_once  '../Modele/Agence.php';


$ag=  Agence::Supprimer_Agence($_GET[id_Agence]);
header("location:../Vue/Administrateur/EspaceAdmin.php")


?>
