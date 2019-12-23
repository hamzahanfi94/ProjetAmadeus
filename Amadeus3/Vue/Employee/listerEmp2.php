<?php
 session_start();
 if(! isset($_SESSION['IdEmp']) && !isset($_SESSION['IdAgnc']))
 {
     header('location:../index.php');
     
 }else
 {
?>
<html>
    <head>

        <title>Lister employees</title>
       <link rel="shortcut icon" href="../Design/images/ico.png">
  <meta charset="utf-8">
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
            <th>id Agence</th>
         <?php
         while ($ligne=$emp->fetch(PDO::FETCH_OBJ))
         {
             echo "<tr>";
             echo "<td>".$ligne->id_emp."</td>";
             echo "<td>".$ligne->nom_emp."</td>";
             echo "<td>".$ligne->prenom_emp."</td>";
             echo "<td>".$ligne->email_emp."</td>";
             echo "<td>".$ligne->type_emp."</td>";
             echo "<td>".$ligne->id_Agence."</td>";
             echo "</tr>";
             
         }
         ?>
        </table>
                         </div>
                             </div>
                         <div class="panel-footer text-center"><a href="../Deconnexion.php">Deconnexion</a>
</div>
                    
                    
                                
                            </div>
                        </div>
                    </div>
    </div>

    </body>
</html>
<?php
}