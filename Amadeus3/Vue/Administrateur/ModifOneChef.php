<?php
 session_start();
 if(! isset($_SESSION['IdAdmin']))
 {
     header('location:../Vue/index.php');
     
 }else
 {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="shortcut icon" href="../Design/images/ico.png">

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
                                        
				</ul>
                            
			</div>
        </div>
                <br><br>
              <div class="panel panel-default">
                                <div class="panel-body">
                                    
       
        <form method="POST" action="../Controlleur/UpdateOneEmp.php" class='form-horizontal'>
            <?php
            while ($data=$ch->fetch(PDO::FETCH_OBJ))
            {
            ?>
              <div class='form-group'>
                  <label for='idC' class='control-label col-sm-3'>  Identifiant :</label>
                  <div class='col-sm-5'>
           <input type="text" name="idC" value="<?php echo $data->id_emp; ?>" disabled  id='idC' class='form-control'>
           </div>
                  </div>
            
            <div class='form-group'>
                  <label for='nomC' class='control-label col-sm-3'>  Nom :</label>
                  <div class='col-sm-5'>
           <input type="text" name="nomC" value="<?php echo $data->nom_emp; ?>" disabled id='nomC' class='form-control'>
           </div>
                  </div>
            
             <div class='form-group'>
                  <label for='prenomC' class='control-label col-sm-3'> Prenom :</label>
                  <div class='col-sm-5'>
           <input type="text" name="prenomC" value="<?php echo $data->prenom_emp; ?>" disabled id='prenomC' class='form-control'>
           </div>
                  </div>
           
            <div class='form-group'>
                  <label for='mailC' class='control-label col-sm-3'>  E-mail :</label>
                  <div class='col-sm-5'>
           <input type="text" name="mailC" value="<?php echo $data->email_emp; ?>" id='mailC' class='form-control'>
            </div>
                  </div>
            
             <div class='form-group'>
                  <label for='typeC' class='control-label col-sm-3'>  Poste :</label>
                  <div class='col-sm-5'>
           <input type="text" name="typeC" value="<?php echo $data->type_emp; ?>" disabled id='typeC' class='form-control'>
           </div>
                  </div>
            
            <div class='form-group'>
                  <label for='logC' class='control-label col-sm-3'>   Login :</label>
                  <div class='col-sm-5'>
           <input type="text" name="logC" value="<?php echo $data->login_emp; ?>" id='logC' class='form-control'>
           </div>
                  </div>
            
            <div class='form-group'>
                  <label for='passC' class='control-label col-sm-3'> Password :</label>
                  <div class='col-sm-5'>
            <input type="text" name="passC" value="<?php echo $data->password_emp; ?>" id='passC' class='form-control'>
            </div>
                  </div>
            
            <div class='form-group'>
                  <label for='idAgeC' class='control-label col-sm-3'>  Agence Num :</label>
                  <div class='col-sm-5'>
           <input type="text" name="idAgeC" value="<?php echo $data->id_Agence; ?>" disabled id='idAgeC' class='form-control'>
            </div>
                  </div>
            <input type="submit" value="Enregistrer" class="btn btn-info col-sm-offset-3">
            <a  class="btn btn-danger view_data3" role="button"  id="<?php echo $data->id_emp; ?>">Supprimer</a>
            <a href="../Controlleur/listerChef.php" class="btn btn-info" role="button">Retourner</a>
              <?php   
            }
        ?>
            
            
            
            
            
            
            
            
        </form>
                                     </div></div>
	</div>


  <div id="MyModal_supp" class="modal fade" role="dialog">
                 <div class="modal-dialog">
                      <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title"><span class="glyphicon glyphicon-remove"></span>Supprimer ?</h4>
                     
                 </div>
                          <div class="modal-body" id="emp_supp">
                              
                          </div>
                          <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 
                          </div>
                 </div>
                     
                 </div>
                
            </div>
        
        
        
        <script src="../Design/jquery-3.1.1.js"></script>
<script src="../Design/Bootstrap/js/bootstrap.min.js"></script>
<script>
                      
            $(document).ready(function(){
                $('.view_data3').click(function(){
                var emp_id = $(this).attr("id");
                        $.ajax({
                     url:"../Controlleur/ModalSuppChef.php",
                    method:"post",
                    data:{emp_id:emp_id},
                    success:function(data){
                        $('#emp_supp').html(data);
                    $('#MyModal_supp').modal("show");

                    }
                    
                });
            });
            });
            
        </script>
       
    </body>
</html>
<?php
 }