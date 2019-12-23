<?php


if(isset($_POST['emp_id']))
{
  require_once '../Modele/Employees.php';  
    $id=$_POST['emp_id'];
    $e=  employees::getChef($id);
    $resultat="";
    while ($row=$e->fetch(PDO::FETCH_OBJ))
    {
        
        
        $resultat.="<form action='../Controlleur/ModifierEmp.php' method='post'>";
        $resultat.="<table class='table table-user-information'>";
        $resultat.="<tr>";
        $resultat.="<td>Id :</td>";
        $resultat.="<td><span>".$row->id_emp."</span></td>";
        $resultat.="<td><input type='hidden' name='idEmp'  value='".$row->id_emp."' /></td>";
        $resultat.="</tr><tr><td>Nom :</td><td><input type='text' name='nomEmp' class='form-control' value='".$row->nom_emp."' /></td>";
        $resultat.="</tr><tr><td>Prenom :</td><td><input type='text' name='prenomEmp' class='form-control' value='".$row->prenom_emp."' /></td>";
        $resultat.="</tr><tr><td>E-mail :</td><td><input type='text' name='mailEmp' class='form-control' value='".$row->email_emp."' /></td>";
        $resultat.="</tr><tr><td>Type :</td><td><input type='text' name='typeEmp' class='form-control' readonly value='".$row->type_emp."' /></td>";
        $resultat.="</tr><tr><td>Login :</td><td><input type='text' name='logEmp' class='form-control' value='".$row->login_emp."' /></td>";
        $resultat.="</tr><tr><td>Password :</td><td><input type='text' name='passEmp' class='form-control' value='".$row->password_emp."' /></td>";
        $resultat.="<td><input type='hidden' name='idAgc' value='".$row->id_Agence."' /></td>";
        $resultat.="</tr><tr><td><input type='submit' name='ok' value='Enregistrer' class='btn btn-info' /></td>";
        $resultat.="</tr></table></form>";
    }    
     echo $resultat;
}
