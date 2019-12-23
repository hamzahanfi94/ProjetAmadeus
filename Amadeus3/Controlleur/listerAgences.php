<?php
require_once   '../Modele/Agence.php';
$agence=  agence::lister_Agence();
include '../Vue/Administrateur/ListerAgences.php';