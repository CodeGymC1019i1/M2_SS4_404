<?php

include_once "EmployeeManager.php";
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $index = (int) $_GET["id"];
}

$employeeManager = new EmployeeManager();
$employeeManager->deleteEmployee($index);
header("location:index.php");

