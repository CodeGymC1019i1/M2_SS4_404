<?php

include_once "Employee.php";
include_once "EmployeeManager.php";

$employeeManager = new EmployeeManager();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee = new Employee();
    $employee->setFirstName($_POST["firstname"]);
    $employee->setLastName($_POST["lastname"]);
    $employee->setBirthDay($_POST["birthday"]);
    $employee->setAddress($_POST["address"]);
    $employee->setPosition($_POST["position"]);

    $employeeManager->addEmployee($employee);
    var_dump($employeeManager);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            position: absolute;
            margin-left: 30%;
            border: #808080 solid 1px;
            width: 30%;
            padding: 10px;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="post">
        <table>
            <h1>Add Employee</h1>
            <tr>
                <td>First name: </td>
                <td><input type="text" name="firstname"></td>
            </tr>

            <tr>
                <td>Last name: </td>
                <td><input type="text" name="lastname"></td>
            </tr>

            <tr>
                <td>Birth day: </td>
                <td><input type="date" name="birthday"></td>
            </tr>

            <tr>
                <td>Address: </td>
                <td><input type="text" name="address"></td>
            </tr>

            <tr>
                <td>Position: </td>
                <td><input type="text" name="position"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add"></td>
                <td><button><a href="index.php">Back</a></button></td>
            </tr>
        </table>
    <?php ?>
    </form>
</div>
</body>
</html>