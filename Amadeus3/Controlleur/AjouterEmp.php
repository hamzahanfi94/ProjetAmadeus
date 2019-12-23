<?php
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["pass"]))
{
    require_once '../Modele/Employees.php';  
    session_start();
    $ida=$_SESSION['IdAgnc'];
    $emp=new employees(NULL, $_POST["nom"], $_POST["prenom"],$_POST["email"],'emp',$_POST["login"],$_POST["pass"],$ida);
    $res=$emp->Ajouter();
    if ($res)
    {
         header('location:listerEmp.php');
    }
}

