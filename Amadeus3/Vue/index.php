<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
  <link rel="shortcut icon" href="../Design/images/ico.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../Design/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../Design/style.css" rel="stylesheet" type="text/css"/>

  <script src="../Design/jquery-3.1.1.js" type="text/javascript"></script>
  <script src="../Design/jquery-3.1.1.min.js" type="text/javascript"></script>
<script  src="../Design/jquery-3.1.1.min.map" type="text/javascript"></script>
  
 
  

</head>

<body >
    
    <div class="container"> 
            <br><br>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
          
                     <div class="panel panel-default">
                        <div class="panel-heading panel-primary">
                            <h3 class="panel-title text-center">Authentification</h3>
                        </div>
                         <div class="panel-body">
                             <form action="../Controlleur/TestConnexion.php" method="POST" class="form-horizontal" name="f1" >
                                 
                                 <div class="form-group col-sm-offset-2">
                         <div class="col-sm-10 col-sm-offset-2">           
                             <label for="Formnormal">Vous est :</label> 
                         
          </div>        <div class="form-group">  
                <div class="radio col-sm-10 col-sm-offset-2" id="mode">
                <label><input type="radio" name="grp"  value="emp" checked/> Un Employee</label>
                </div>
                <div class="radio col-sm-10 col-sm-offset-2" >
                <label><input type="radio" name="grp" value="adm" />Un Administrateur</label>
                 </div>
            </div>
          </div>
                                 
                                 
                                 
                                 
                                  <div class="form-group">
                                      <label for="logN" class="control-label col-sm-2" id="textlog">Login </label>
                 <div class="col-sm-9 input-group">
                      
                     <span class="input-group-addon">
                         <span class="glyphicon glyphicon-user"></span>
                     </span>
                     
                     <input class="form-control"   placeholder="Login Username" type="text" name="login" id="logN">
                  
                 </div>
                     <span id="ls" class="text-info col-sm-10 col-sm-offset-2 "></span>                 
            </div>
                                
                                 <div class="form-group">
                <label for="pasN" class="control-label col-sm-2" id="textpass">Mot de Passe</label>
                 <div class="col-sm-9 input-group">
                     <span class="input-group-addon">
                         <span class="glyphicon glyphicon-lock"></span>
                     </span>
                     <input  class="form-control"   placeholder="Login Password" type="password" name="pass" id="pasN">
                 </div>
                <span id="ps" class="text-info col-sm-10 col-sm-offset-2"></span>
            </div>
                                 <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        
            <input type="submit" value="Connexion" class="btn btn-default" OnClick="return validate()">
            
            </div>
                </div>
                                 
                             </form>
                         </div>
                         <div class="panel-footer text-center">Made By Hanfi Hamza</div>
                    
                    
                                
                            </div>
                        </div>
                    </div>
    </div>

    <script src="../Design/Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
           function validate()
           { var res= true;
               
               if(document.getElementById("logN").value == "")
               {document.getElementById("ls").innerText="\nEntrer Votre Login !";
                   
                   res = false;
               }else{document.getElementById("ls").innerText="";
                   }
               
               if(document.getElementById("pasN").value == "")
                   {document.getElementById("ps").innerText="\nEntrer Votre Mot de passe !";
                       
                  
                   res = false;
               }else{document.getElementById("ps").innerText="";
                   }
                   
             return res;}
         </script>
   
</body>
</html>
