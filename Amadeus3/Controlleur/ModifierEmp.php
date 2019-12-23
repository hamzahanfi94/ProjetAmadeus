<?php
if( isset($_POST['nomEmp']) && isset($_POST['prenomEmp']) && isset($_POST['mailEmp'])  && isset($_POST['logEmp']) && isset($_POST['passEmp']))
{
     require_once '../Modele/Employees.php';
     $e=new employees($_POST['idEmp'], $_POST['nomEmp'], $_POST['prenomEmp'], $_POST['mailEmp'], $_POST['typeEmp'],$_POST['logEmp'], $_POST['passEmp'], $_POST['idAgc']);
     $e->updateEmp();
     header('location:listerEmp.php');
         
}
