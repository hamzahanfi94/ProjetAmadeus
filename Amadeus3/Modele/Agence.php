<?php
require_once  '../connexion.php';
class agence {
    private $id_Agence;
    private $nom_Agence;
    private $adresse_Agence;
  
    function __construct($id_Agence, $nom_Agence, $adresse_Agence) {
        $this->id_Agence = $id_Agence;
        $this->nom_Agence = $nom_Agence;
        $this->adresse_Agence = $adresse_Agence;
    }
  
    function getId_Agence() {
        return $this->id_Agence;
    }

    function getNom_Agence() {
        return $this->nom_Agence;
    }

    function getAdresse_Agence() {
        return $this->adresse_Agence;
    }

    function setId_Agence($id_Agence) {
        $this->id_Agence = $id_Agence;
    }

    function setNom_Agence($nom_Agence) {
        $this->nom_Agence = $nom_Agence;
    }

    function setAdresse_Agence($adresse_Agence) {
        $this->adresse_Agence = $adresse_Agence;
    }
      public function ajouter_Agence()
    {
        global $connexion;
        $sql="insert into agence values(NULL,'$this->nom_Agence','$this->adresse_Agence')";
        $res=$connexion->exec($sql);
        return $res;
    }
    static function Supprimer_Agence($id)
    {   global $connexion ;    
        $req1="delete from agence where id_Agence='$id'";
        $res = $connexion->exec($req1); 
		return ($res);
    }
    
    /*
    static function Supprimer($login)
    {   global $connexion ;    
        $req1="DELETE FROM migrations WHERE Mail='$login'";
        $res = $connexion->exec($req1); 
		return ($res);
   */
  public static function lister_un_Agence($id){
     global $connexion;
     $sql="select * from agence WHERE id_Agence='$id'";
     $res=$connexion->query($sql);
     return $res;
     
 }
 public static function lister_Agence(){
     global $connexion;
     $sql="select * from agence";
        $res=$connexion->query($sql);
        return $res;
     
 }
static function UpdateOne($id,$nom, $adr) {
        global $connexion;
        $sql="update agence set nom_Agence = '$nom' , adresse_Agence= '$adr' where id_Agence= '$id'";
        $res=$connexion->exec($sql);
        return $res;
    }
    
}
?>

