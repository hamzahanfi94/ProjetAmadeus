<?php
require_once '../Modele/Employees.php';
session_start();
$id=$_SESSION['id'];
$res=  employees::Supprimer_Emp($id);
header('location:listerChef.php');

