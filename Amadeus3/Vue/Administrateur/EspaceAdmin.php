<?php
 session_start();
 if(! isset($_SESSION['IdAdmin']))
 {
     header('location:../index.php');
     
 }else
 {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="shortcut icon" href="../Design/images/ico.png">
          <link href="../../Design/style.css" rel="stylesheet" type="text/css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../Design/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../Design/StyleEspaceAdmin.css" rel="stylesheet" type="text/css"/>
  <script src="../../Design/jquery-3.1.1.js" type="text/javascript"></script>
  <script src="../../Design/jquery-3.1.1.min.js" type="text/javascript"></script>
<script  src="../../Design/jquery-3.1.1.min.map" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
      
       
        
        
        <div class="container">
    <div class="row">
		<div class="col-xs-12">
		   <br><br>
			<!-- tabs -->
			
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                                        <li><a href="AjouterChef.php" >Ajouter Chef Agence</a></li>
					<li><a href="AjouterAgence.php" >Ajouter Agence</a></li>
					<li><a href="../../Controlleur/listerChef.php">Lister Chefs</a></li>
                                        <li><a href="../../Deconnexion.php">Log out</a></li>
				</ul>
                         <br><br>
                        <div class="well"> <h4>Bienvenu Administrateur</h4></div>
			</div>
			<!-- /tabs -->
		</div>
	</div>



        
        
        
        <script src="../../Design/jquery-3.1.1.js"></script>
<script src="../../Design/Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
 }