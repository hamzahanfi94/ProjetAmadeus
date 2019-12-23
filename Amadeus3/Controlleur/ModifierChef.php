<?php
if(isset($_POST['mdif']))
{
    require_once '../Modele/Employees.php';
    $ch= employees::getChef($_POST['mdif']);
    session_start();
    $_SESSION['id']=$_POST['mdif'];
    session_commit();
    include_once '../Vue/Administrateur/ModifOneChef.php';
}  else {
    header('location:listerChef.php');
}
?>
