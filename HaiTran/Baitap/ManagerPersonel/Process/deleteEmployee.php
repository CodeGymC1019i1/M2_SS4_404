<?php
session_start();
if (!isset($_SESSION["username"]))
    header("location: ../index.php");
include_once "../Class/EmployeeManager.php";
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $index = (int) $_GET["id"];
}

$employeeManager = new EmployeeManager("../DataFileJson/Employees.json");
$employeeManager->delete($index);
header("location:../LoginLogout/Home.php");

