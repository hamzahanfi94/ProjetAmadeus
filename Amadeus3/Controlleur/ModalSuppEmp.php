<?php
if(isset($_POST['emp_id']))
{
  require_once '../Modele/Employees.php';  
    $id=$_POST['emp_id'];
    $e=  employees::getChef($id);
    $resultat="";
    while ($row=$e->fetch(PDO::FETCH_OBJ))
    {
        
        
        $resultat.="<form action='../Controlleur/SupprimerEmp.php' method='post'>";
        $resultat.="<input type='hidden' name='idEmp'  value='".$id."' />";
        
        $resultat.="<div class='form-group'>";
        $resultat.="<label><span class='glyphicon glyphicon-alert'></span>Etes-Vous certain de vouloir supprimer ?</label>";
         $resultat.="<div class='col-sm-6'>";
        $resultat.="<input type='submit' name='ok' value='Supprimer' class='btn btn-primary' />";
         $resultat.="</div></div>";
         $resultat.="<br>";
         $resultat.="</form>";
    }    
     echo $resultat;
}

