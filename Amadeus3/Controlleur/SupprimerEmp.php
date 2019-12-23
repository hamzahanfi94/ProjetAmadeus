<?php
require_once  '../Modele/Employees.php';
if(isset($_POST['idEmp']))
{
    $delete=  employees::Supprimer_Emp($_POST['idEmp']);
     header('location:listerEmp.php');
}
