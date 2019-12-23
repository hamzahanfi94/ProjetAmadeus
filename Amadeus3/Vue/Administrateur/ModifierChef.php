<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
       
        <title></title>
    </head>
    <body>
        
       <?php
        require_once '../../connexion.php';
        global $connexion;
        $id=$_GET['id_emp'];
$req="select * from employees where id_emp='$id'";
$res=$connexion->query($req);
$r=$res->fetch(PDO::FETCH_OBJ);
       
        ?>
        <form method="post" action="../../Controlleur/ModifierChef.php">
            <input type="text"  name="id" value="<?php echo "$r->id_emp"; ?>" hidden=""> <br> 
            Nom du Chef : <input type="text" name="nom" value="<?php echo "$r->nom_emp"; ?>"> <br> 
            Prenom du Chef : <input type="text" name="prenom" value="<?php echo "$r->prenom_emp"; ?>"> <br>
            Email du chef : <input type="text" name="email" value="<?php echo "$r->email_emp"; ?>"> <br> 
            <input type="text" name="type"  hidden="" value="<?php echo "$r->type_emp"; ?>"> <br>
            Login du chef : <input type="text" name="login"  value="<?php echo "$r->login_emp"; ?>"> <br> 
           Mot de pass du chef : <input type="text" name="password" value="<?php echo "$r->password_emp"; ?>"> <br>
           id de l'agence : <select name="num" >
            <option>
                  <?php
                    include '../../connexion.php';
                    global $connexion ;
             $req="select * from agence ";
            $res=$connexion->query($req);
while ($r=$res->fetch(PDO::FETCH_OBJ))
    echo " <option> $r->id_Agence </option>";    
                             ?>
   
        
              
                                   
                                </select>     <br>

           <input type="submit" value="Modifier">
        </form>
        
        
    </body>
</html>
