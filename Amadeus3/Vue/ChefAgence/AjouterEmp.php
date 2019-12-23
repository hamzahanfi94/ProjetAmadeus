<html>
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
                                   
                                        <li><a href="../../Deconnexion.php"> Deconnexion</a></li>
                                        
				</ul>
                            
			</div>
                        
                        
			<!-- /tabs -->
		</div>
                <br><br>
              <div class="panel panel-default">
                  <div class="panel-heading panel-primary">
                            <h3 class="panel-title text-center">Ajout D'un Employee</h3>
                        </div>
                                <div class="panel-body">
                                    
                                    <form method="post" action="../../Controlleur/AjouterEmp.php" class='form-horizontal'>
                              
              <div class='form-group'>
                  <label for='nomC' class='control-label col-sm-3'>Nom du l'employe:</label>
                  <div class='col-sm-5'>
                       <input type='text' name='nom' placeholder='Nom du l employe' id='nomC' class='form-control'>
              </div>
                  </div>
                               
            <div class='form-group'>
                  <label for='prenomC' class='control-label col-sm-3'> Prenom du l'employe :</label>
                  <div class='col-sm-5'>
                        <input type='text' name='prenom' placeholder='Prenom du l employe' id='prenomC' class='form-control'>
              </div>
                  </div>
           
              <div class='form-group'>
                  <label for='mailC' class='control-label col-sm-3'>   Email du l'employe :</label>
                  <div class='col-sm-5'>
                       <input type='text' name='email' placeholder='Mail du l employe' id='mailC' class='form-control'>
              </div>
                  </div>
           
             <div class='form-group'>
                  <label for='LogC' class='control-label col-sm-3'>  Login du l'employe  :</label>
                  <div class='col-sm-5'>
                       <input type='text' name='login' placeholder='Login du l employe' id='LogC' class='form-control'>
              </div>
                  </div>
            
             <div class='form-group'>
                  <label for='PassC' class='control-label col-sm-3'>  Mode de passe du l'employe  :</label>
            <div class='col-sm-5'>
                       <input type='password' name='pass' placeholder='Password du l employe' id='PassC' class='form-control'>
              </div>
                  </div>
                  
         <div class=" col-sm-offset-3">
<input type="submit" class="btn btn-success" value="Ajouter"/>
</form>
             </div>
                       </div>
                                        
                  </div>
           

  
                                </div></div>
	</div>



        
        
        
        <script src="../../Design/jquery-3.1.1.js"></script>
<script src="../../Design/Bootstrap/js/bootstrap.min.js"></script>
        
        
        
      
    </body>
</html>

</html>
