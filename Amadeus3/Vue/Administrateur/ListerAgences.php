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
        <title></title>
    </head>
    <body>
        <table border="2">
            <th>Id</th>
            <th>Name</th>
            <th>Adresse</th>
            <?php
            while ($ligne=$agence->fetch(PDO::FETCH_OBJ))
            {
                echo "<tr>";
                echo "<td>".$ligne->id_Agence."</td>";
                echo "<td>".$ligne->nom_Agence."</td>";
                echo "<td>".$ligne->adresse_Agence."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <a href="../Vue/Administrateur/EspaceAdmin.php"><button>Retourner au menu principale</button></a>
    </body>
</html>
<?php
 }
