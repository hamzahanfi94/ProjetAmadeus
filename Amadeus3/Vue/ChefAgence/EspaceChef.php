<?php
 session_start();
 if(! isset($_SESSION['IdChef']) && !isset($_SESSION['IdAgnc']))
 {
     header('location:../index.php');
     
 }else
 {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="AjouterEmp.php">Add Employee</a><br>
        <a href="../../Controlleur/listerEmp.php">Lister Employees</a><br>
        
        <a href="../../Deconnexion.php">Log out</a>
        <?php
       
        ?>
    </body>
</html>
<?php
 }
