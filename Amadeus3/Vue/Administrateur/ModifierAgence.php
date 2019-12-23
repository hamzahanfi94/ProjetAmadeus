<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        require_once '../../connexion.php';
        global $connexion;
        $id=$_GET['id_Agence'];
        $req="select * from agence where id_agence='$id'";
$res=$connexion->query($req);
$r=$res->fetch(PDO::FETCH_OBJ)
        ?>
        <form method="post" action="../../Controlleur/ModifierAgence.php">
            <input type="text"  name="id" value="<?php echo "$r->id_Agence"; ?>" hidden=""> <br> 

            Nom du L'agence : <input type="text" name="nom" value="<?php echo "$r->nom_Agence"; ?>"> <br> 
            Adresse du L'agence : <input type="text" name="adresse" value="<?php echo "$r->adresse_Agence"; ?>"> <br>
            <input type="submit" value="Modifier">
        </form>
        
    </body>
</html>
