<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
               <link rel="shortcut icon" href="../Design/images/ico.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../Design/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../Design/style.css" rel="stylesheet" type="text/css"/>

  <script src="../Design/jquery-3.1.1.js" type="text/javascript"></script>
  <script src="../Design/jquery-3.1.1.min.js" type="text/javascript"></script>
<script  src="../Design/jquery-3.1.1.min.map" type="text/javascript"></script>
       
    </head>
    <body>
        
                
                  <div class="container"> 
            <br><br>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
          
                     <div class="panel panel-default">
                        <div class="panel-heading panel-primary">
                            <h3 class="panel-title text-center">Listes des Employees</h3>
                        </div>
                         <div class="panel-body">
                             <div class="table-responsive">

        <table  class='table' >
            <th>id</th>
            <th>nom</th>
           <th>Prenom</th>
           <th>Email</th>
            <th>Type</th>
           <th>Login</th>
           <th>Mot de pas</th>
            <th>id Agence</th>
         
           <?php
           
require_once  '../../connexion.php';
global $connexion;
$id=$_GET["id_emp"];

$req="select id_Agence from employees where id_emp='$id'";
$res=$connexion->query($req);
$r=$res->fetch(PDO::FETCH_OBJ);
$ag=$r->id_Agence;

$req="select * from employees where id_Agence='$ag'";
$res=$connexion->query($req);
while ($r=$res->fetch(PDO::FETCH_OBJ)){
            echo "<tr> <td>$r->id_emp</td>"; 
           echo " <td>$r->nom_emp</td>";
            echo "<td>$r->prenom_emp</td>";
          echo "<td>$r->email_emp</td>";
           echo "<td>$r->type_emp</td>";
          echo "<td>$r->login_emp</td>";
          echo "<td>$r->password_emp</td>";
           echo "<td>$r->id_Agence</td>";
           echo '<td><a " href="../../Controlleur/SupprimerChef.php?id_emp='.$r->id_emp.'">supprimer</a></td>';
           //echo '<td><a " href="ModifierChef.php?id_emp='.$r->id_emp.'">modifier</a></td>';

             echo "</tr>";
}
            ?>
               </table>
                         </div>
                             </div>

                         <div class="panel-footer text-center"><a href="../Deconnexion.php">Deconnexion</a>
</div>
                    
                                                        <a href="#" class="btn btn-info" role="button">Ajouter</a>

                                
                            </div>
                        </div>
                    </div>
    </div>
    </body>
</html>
         
  
