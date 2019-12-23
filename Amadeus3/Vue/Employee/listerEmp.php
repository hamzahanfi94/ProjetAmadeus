<?php
 session_start();
 if(! isset($_SESSION['IdChef']) && !isset($_SESSION['IdAgnc']))
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
      <script type="text/javascript" src="../Design/jquery-3.1.1.js"></script>
       <script type="text/javascript" src="../Design/jquery-3.1.1.min.js"></script>
       <script type="text/javascript" src="../Design/jquery-3.1.1.min.map"></script>

  
        
  
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
                              <a href="../Vue/chefAgence/AjouterEmp.php" class="btn btn-primary btn-lg btn-block" role="button">Ajouter</a>
                                 <br>
                                 
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
             echo "";
             echo "<td class='text-center'><p data-placement='top' data-toggle='tooltip' title='Modifier'>"
             . "<button type='button' name='view' value='Modif' id='".$ligne->id_emp."' class='btn btn-info btn-xs view_data2'>"
             . "<span class='glyphicon glyphicon-edit'></span>Modif</button></p></td>"
             . "<td class='text-center'><p data-placement='top' data-toggle='tooltip' title='Supprimer'>"
             . "<button type='button' name='view' value='Supp' id='".$ligne->id_emp."' class='btn btn-danger btn-xs view_data3'>"
             . "<span class='glyphicon glyphicon-remove'></span>Supp</button></p></td>"

             ;

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
             <div id="MyModal_modif" class="modal fade" role="dialog">
                 <div class="modal-dialog">
                      <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span>Modifier</h4>
                     
                 </div>
                          <div class="modal-body" id="emp_modif">
                              
                          </div>
                          <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 
                          </div>
                 </div>
                     
                 </div>
                
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
    </div>
<script src="../Design/jquery-3.1.1.js"></script>
<script src="../Design/Bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.view_data2').click(function(){
                var emp_id = $(this).attr("id");
                        $.ajax({
                     url:"../Controlleur/ModalModifEmp.php",
                    method:"post",
                    data:{emp_id:emp_id},
                    success:function(data){
                        $('#emp_modif').html(data);
                    $('#MyModal_modif').modal("show");

                    }
                    
                });
            });
            });
            
            
            $(document).ready(function(){
                $('.view_data3').click(function(){
                var emp_id = $(this).attr("id");
                        $.ajax({
                     url:"../Controlleur/ModalSuppEmp.php",
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