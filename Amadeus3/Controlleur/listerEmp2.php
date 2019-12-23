<?php
require_once '../Modele/Employees.php';
session_start();
$emp=  employees::getCoWorkers($_SESSION['IdAgnc']);
session_commit();
include '../Vue/Employee/listerEmp2.php';

