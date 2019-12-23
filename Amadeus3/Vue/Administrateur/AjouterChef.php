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
                                        <li class="active"><a href="#" >Ajouter Chef Agence</a></li>
					<li><a href="AjouterAgence.php">Ajouter Agence</a></li>
					<li><a href="../../Controlleur/listerChef.php">Lister Chefs</a></li>
                                        <li><a href="../../Deconnexion.php">Log out</a></li>
                                        
				</ul>
                            
			</div>
                        
                        
			<!-- /tabs -->
		</div>
                <br><br>
              <div class="panel panel-default">
                                <div class="panel-body">
                                    
                            <form method="post" action="../../Controlleur/AjouterChef.php" class='form-horizontal'>
                              
              <div class='form-group'>
                  <label for='nomC' class='control-label col-sm-3'>Nom du Chef :</label>
                  <div class='col-sm-5'>
                       <input type='text' name='nomC' placeholder='Nom du Chef' id='nomC' class='form-control'>
              </div>
                  </div>
                               
            <div class='form-group'>
                  <label for='prenomC' class='control-label col-sm-3'> Prenom du Chef :</label>
                  <div class='col-sm-5'>
                        <input type='text' name='prenomC' placeholder='Prenom du Chef' id='prenomC' class='form-control'>
              </div>
                  </div>
           
              <div class='form-group'>
                  <label for='mailC' class='control-label col-sm-3'>  Email du Chef :</label>
                  <div class='col-sm-5'>
                       <input type='text' name='mailC' placeholder='Mail du Chef' id='mailC' class='form-control'>
              </div>
                  </div>
           
             <div class='form-group'>
                  <label for='LogC' class='control-label col-sm-3'>  Login du Chef :</label>
                  <div class='col-sm-5'>
                       <input type='text' name='LogC' placeholder='Login du Chef' id='LogC' class='form-control'>
              </div>
                  </div>
            
             <div class='form-group'>
                  <label for='PassC' class='control-label col-sm-3'>  Mode de passe du Chef :</label>
            <div class='col-sm-5'>
                       <input type='password' name='PassC' placeholder='Password du Chef' id='PassC' class='form-control'>
              </div>
                  </div>
                  <div class="form-group">
                       <label for="sel1" class='control-label col-sm-3'>Choisir Agence:</label>
                         <div class='col-sm-5'>
       <select name="num" class="form-control" id="sel1">
            <option>
                  <?php
                    include '../../connexion.php';
                    global $connexion ;
             $req="select * from agence ";
            $res=$connexion->query($req);
while ($r=$res->fetch(PDO::FETCH_OBJ))
    echo " <option value='".$r->id_Agence."'>". $r->id_Agence ."</option>";    
                             ?>   
                                </select>  
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
