<?php
require_once  '../connexion.php';
class employees{
    private $id_emp;
    private $nom_emp;
    private $prenom_emp;
    private $email_emp;
    private $type_emp;
    private $login_emp;
    private $password_emp;
    private $id_Agence;
   
    function __construct($id_emp, $nom_emp, $prenom_emp, $email_emp, $type_emp, $login_emp, $password_emp, $id_Agence) {
        $this->id_emp = $id_emp;
        $this->nom_emp = $nom_emp;
        $this->prenom_emp = $prenom_emp;
        $this->email_emp = $email_emp;
        $this->type_emp = $type_emp;
        $this->login_emp = $login_emp;
        $this->password_emp = $password_emp;
        $this->id_Agence = $id_Agence;
    }
    function getId_emp() {
        return $this->id_emp;
    }

    function getNom_emp() {
        return $this->nom_emp;
    }

    function getPrenom_emp() {
        return $this->prenom_emp;
    }

    function getEmail_emp() {
        return $this->email_emp;
    }

    function getType_emp() {
        return $this->type_emp;
    }

    function getLogin_emp() {
        return $this->login_emp;
    }

    function getPassword_emp() {
        return $this->password_emp;
    }

    function getId_Agence() {
        return $this->id_Agence;
    }

    function setId_emp($id_emp) {
        $this->id_emp = $id_emp;
    }

    function setNom_emp($nom_emp) {
        $this->nom_emp = $nom_emp;
    }

    function setPrenom_emp($prenom_emp) {
        $this->prenom_emp = $prenom_emp;
    }

    function setEmail_emp($email_emp) {
        $this->email_emp = $email_emp;
    }

    function setType_emp($type_emp) {
        $this->type_emp = $type_emp;
    }

    function setLogin_emp($login_emp) {
        $this->login_emp = $login_emp;
    }

    function setPassword_emp($password_emp) {
        $this->password_emp = $password_emp;
    }

    function setId_Agence($id_Agence) {
        $this->id_Agence = $id_Agence;
    }

        
        public function Ajouter()
            {
          global $connexion;
         
        $sql="insert into employees values(NULL,'$this->nom_emp','$this->prenom_emp','$this->email_emp','$this->type_emp','$this->login_emp','$this->password_emp','$this->id_Agence')";
        $res=$connexion->exec($sql);
        return $res;
            }

    public function ajouter_employees()
    {
        global $connexion;
        $sql="insert into employees values(NULL,'$this->nom_emp','$this->prenom_emp','$this->email_emp','emp','$this->login_emp','$this->password_emp')";
        $res=$connexion->exec($sql);
        return $res;
    }
    
static function Supprimer_Emp($id)
    {   global $connexion ;    
        $req1="delete from employees where id_emp = '$id'";
        $res = $connexion->exec($req1); 
return ($res);
    }
    
    static function UpdateChef($id, $email ,$login,$password ) {
        global $connexion;
        $sql="update employees set email_emp = '$email' , login_emp = '$login' , password_emp = '$password' where id_emp = '$id'";
        $res=$connexion->exec($sql);
        return $res;
    }
    
    static function getAll()
    {
        global $connexion;
        $requete="select * from employees";
        $resultat=$connexion->query($requete);
        return $resultat;
    }
    
    static function getCoWorkers($id)
    {
        global $connexion;
        $requete="select * from employees where id_Agence = '$id'";
        $resultat=$connexion->query($requete);
        return $resultat;
    }
    
    static function getAllChef()
    {
        global $connexion;
        $requete="select * from employees where type_emp = 'chef'";
        $resultat=$connexion->query($requete);
        return $resultat;
    }
    
    public static function getChef($id)
    {
        global $connexion;
        $requete="select * from employees where id_emp = '$id'";
        $resultat=$connexion->query($requete);
        return $resultat;
    }
    
    function updateEmp()
    {
       global $connexion;
        $sql="update employees set nom_emp = '$this->nom_emp' , prenom_emp = '$this->prenom_emp' , email_emp = '$this->email_emp' , type_emp = '$this->type_emp' , login_emp = '$this->login_emp' , password_emp = '$this->password_emp' where id_emp = '$this->id_emp'";
        $res=$connexion->exec($sql);
        return $res; 
    }
}
