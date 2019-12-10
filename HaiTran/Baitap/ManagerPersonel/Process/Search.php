<?php
session_start();
if (!isset($_SESSION["username"]))
    header("location: ../index.php");

include_once "../Class/EmployeeManager.php";
$employeeManager = new EmployeeManager("../DataFileJson/Employees.json");
$fileJson = new FileJson("../DataFileJson/SearchFile.json");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $keyword = $_GET["keyword"];
}
$resultSearch = $employeeManager->search($keyword);
$fileJson->putFileJson($resultSearch);
header("location: ../LoginLogout/Home.php?searched=true");
