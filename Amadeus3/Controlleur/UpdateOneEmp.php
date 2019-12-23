<?php
if(isset($_POST['mailC']) &&  isset($_POST['logC']) && isset($_POST['passC']) )
{
    require_once '../Modele/Employees.php';
    session_start();
$id=$_SESSION['id'];
session_commit();
    $res=  employees::UpdateChef($id, $_POST['mailC'], $_POST['logC'], $_POST['passC']);
    if($res)
    {
        header('location:listerChef.php');
    }
    
}
 else {
     header('location:listerChef.php');
 }

