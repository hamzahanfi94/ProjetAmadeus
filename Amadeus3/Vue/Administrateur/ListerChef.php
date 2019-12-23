<?php
 session_start();
 if(! isset($_SESSION['IdAdmin']))
 {
     header('location:../Vue/index.php');
     
 }else
 {
?>
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="shortcut icon" href="../Design/images/ico.png">
          <link href="../Design/style.css" rel="stylesheet" type="text/css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../Design/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../Design/StyleEspaceAdmin.css" rel="stylesheet" type="text/css"/>
  <script src="../Design/jquery-3.1.1.js" type="text/javascript"></script>
  <script src="../Design/jquery-3.1.1.min.js" type="text/javascript"></script>
<script  src="../Design/jquery-3.1.1.min.map" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
         <div class="container">
    <div class="row">
		<div class="col-xs-12">
		    <br><br>
                    <!-- tabs -->
			
				<ul class="nav nav-tabs">
                                    <li><a href="../Vue/Administrateur/EspaceAdmin.php">Home</a></li>
                                        <li><a href="../Vue/Administrateur/AjouterChef.php" >Ajouter Chef Agence</a></li>
					<li><a href="../Vue/Administrateur/AjouterAgence.php">Ajouter Agence</a></li>
					<li class="active"><a href="#">Lister Chefs</a></li>
                                        <li><a href="../Deconnexion.php">Log out</a></li>
                                        
				</ul>
                            
			</div>
                        
                        
			<!-- /tabs -->
		</div>
                <br><br>
              <div class="panel panel-default">
                                <div class="panel-body">
                                    
       
       <form method='POST' action='../Controlleur/ModifierChef.php' class='form-horizontal'>
       <div class="table-responsive">
  <table class="table table-hover table-bordered">
            <th>id</th>
            <th>nom</th>
           <th>Prenom</th>
           <th>Email</th>
           <th>Type</th>
           <th>Login</th>
           <th>Mot de pas</th>
           <th>id Agence</th>
           <th>Choisir si tu veut Modifier</th>
         
           <?php
          
           
while ($r=$chef->fetch(PDO::FETCH_OBJ)){
            echo "<tr> <td>$r->id_emp</td>"; 
           echo " <td>$r->nom_emp</td>";
            echo "<td>$r->prenom_emp</td>";
          echo "<td>$r->email_emp</td>";
           echo "<td>$r->type_emp</td>";
          echo "<td>$r->login_emp</td>";
          echo "<td>$r->password_emp</td>";
           echo "<td>$r->id_Agence</td>";
           echo "<td><input type='radio' name='mdif' value='".$r->id_emp."'></td>";

             echo "</tr>";
}

            ?>
        </table>
           </div>
           <a href="../Vue/Administrateur/AjouterChef.php" class="btn btn-info" role="button">Ajouter Chef</a>
           <a href="../Vue/Administrateur/EspaceAdmin.php" class="btn btn-info" role="button">Retourner au menu principale</a>
         <input type="submit" value="Modifier" class="btn btn-info">
    </form>
                                    </div></div>
	</div>



        
        
        
        <script src="../Design/jquery-3.1.1.js"></script>
<script src="../Design/Bootstrap/js/bootstrap.min.js"></script>
        
      
    </body>
</html>
<?php
 }

