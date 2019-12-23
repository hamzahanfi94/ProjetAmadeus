<?php
require_once  '../connexion.php';
class admin{
 private $id_admin;
 private $login_admin;
 private $password_admin;
 
 function __construct($id_admin, $login_admin, $password_admin) {
     $this->id_admin = $id_admin;
     $this->login_admin = $login_admin;
     $this->password_admin = $password_admin;
     
 }
 function getId_admin() {
     return $this->id_admin;
 }

 function getLogin_admin() {
     return $this->login_admin;
 }

 function getPassword_admin() {
     return $this->password_admin;
 }

 function setId_admin($id_admin) {
     $this->id_admin = $id_admin;
 }

 function setLogin_admin($login_admin) {
     $this->login_admin = $login_admin;
 }

 function setPassword_admin($password_admin) {
     $this->password_admin = $password_admin;
 }


    public static function lister_Chef(){
     global $connexion;
     $sql="select * from chef_agence";
        $res=$connexion->query($sql);
        return $res;
     
 } 
 
 static function getAllAdmins()
 {
      global $connexion;
        $requete="select * from administrateur";
        $resultat=$connexion->query($requete);
        return $resultat;
 }
    
    
}
?>

