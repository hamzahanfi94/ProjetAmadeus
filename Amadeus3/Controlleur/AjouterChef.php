<?php
require_once '../Modele/Employees.php';
if(isset($_POST["nomC"]) && isset($_POST["prenomC"]) && isset($_POST["mailC"]) && isset($_POST["LogC"]) && isset($_POST["PassC"]) && isset($_POST["num"]))
{
$emp=new employees(NULL, $_POST["nomC"], $_POST["prenomC"],$_POST["mailC"],'chef',$_POST["LogC"],$_POST["PassC"],$_POST["num"]);
$res=$emp->Ajouter();
if($res)
{
    
    header('location:listerChef.php');
}else
{
   header('location:../Vue/Administrateur/AjouterChef.php'); 
}

}
?>
