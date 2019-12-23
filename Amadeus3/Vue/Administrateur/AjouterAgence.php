<?php
 session_start();
 if(! isset($_SESSION['IdAdmin']))
 {
     header('location:../index.php');
     
 }else
 {
?>
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
                                    <li><a href="EspaceAdmin.php">Home</a></li>
                                        <li><a href="AjouterChef.php" >Ajouter Chef Agence</a></li>
					<li class="active"><a href="#">Ajouter Agence</a></li>
					<li><a href="../../Controlleur/listerChef.php">Lister Chefs</a></li>
                                        <li><a href="../../Deconnexion.php">Log out</a></li>
                                        
				</ul>
                            
			</div>
                        
                        
			<!-- /tabs -->
		</div>
                <br><br>
              <div class="panel panel-default">
                                <div class="panel-body">
                                    
        <form method="post" action="../../Controlleur/AjouterAgence.php" class='form-horizontal'>
             <div class='form-group'>
                  <label for='nomA' class='control-label col-sm-3'> Nom du L'agence :</label>
                  <div class='col-sm-5'>
            <input type="text" name="nomA" placeholder='Nom du Lagence' id='nomA' class='form-control'>
             </div>
                  </div>
             <div class='form-group'>
                  <label for='adrA' class='control-label col-sm-3'> Adresse du L'agence :</label>
                  <div class='col-sm-5'>
             <input type="text" name="adrA" placeholder='Adresse du Lagence' id='adrA' class='form-control'>
              </div>
                  </div>
            <div class=" col-sm-offset-3">
<input type="submit" class="btn btn-success" value="Ajouter"/>
             </div>
        </form>
                                        </div></div>
	</div>



        
        
        
        <script src="../../Design/jquery-3.1.1.js"></script>
<script src="../../Design/Bootstrap/js/bootstrap.min.js"></script>
        
      
    </body>
</html>
<?php
 }