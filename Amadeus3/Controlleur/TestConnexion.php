<?php
if(isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['grp']))
{
    $b=FALSE;
    if($_POST['grp']== 'emp')
    {
                require_once '../Modele/Employees.php';
                $emp=  employees::getAll();
                while ($ligne=$emp->fetch(PDO::FETCH_OBJ))
                {
                    if($ligne->login_emp == $_POST['login'] && $ligne->password_emp == $_POST['pass'])
                    {
                        if($ligne->type_emp == "chef")
                        {
                            session_start();
                            $_SESSION['IdChef']=$ligne->id_emp;
                            $_SESSION['IdAgnc']=$ligne->id_Agence;
                            $b=TRUE;
                            header('location:listerEmp.php');
                        }  else {
                            session_start();
                            $_SESSION['IdEmp']=$ligne->id_emp;
                            $_SESSION['IdAgnc']=$ligne->id_Agence;
                            $b=TRUE;
                            header('location:listerEmp2.php');
                        }
                        
                    }
                }
        
    }  else {
        require_once '../Modele/Admin.php';
        $adm=  admin::getAllAdmins();
        while ($ligne=$adm->fetch(PDO::FETCH_OBJ))
        {
            if($ligne->login_admin == $_POST['login'] && $ligne->password_admin == $_POST['pass'])
            {
                $b=TRUE;
                session_start();
                $_SESSION['IdAdmin']=$ligne->id_admin;
               
                header('location:../Vue/Administrateur/EspaceAdmin.php');
              
            }
        }
    }
    
    if($b==FALSE)
    {
        header('location:../Vue/index.php');
    }
    
}

