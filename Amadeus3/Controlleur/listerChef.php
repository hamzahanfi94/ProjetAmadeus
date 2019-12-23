<?php
require_once '../Modele/Employees.php';
$chef=  employees::getAllChef();
include '../Vue/Administrateur/ListerChef.php';

