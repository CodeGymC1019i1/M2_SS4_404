<?php

session_start();
if (!isset($_SESSION["username"]))
    header("location: ../index.php");

include_once "../Class/Employee.php";
include_once "../Class/EmployeeManager.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $index= (int) $_GET["id"];
}

$employeeManager = new EmployeeManager("../DataFileJson/Employees.json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index = (int) $_GET["index"];
    $employee = new Employee();


    $employee->setFirstName($_POST["firstname"]);
    $employee->setLastName($_POST["lastname"]);
    $employee->setBirthDay($_POST["birthday"]);
    $employee->setAddress($_POST["address"]);
    $employee->setPosition($_POST["position"]);

    var_dump($index);
    $employeeManager->edit($index, $employee);
}
$fileJson = new FileJson("../DataFileJson/Employees.json");
$arr = $fileJson->readFileJson();

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
            <h1>Edit Employee</h1>
            <tr>
                <td>First name: </td>
                <td><input type="text" name="firstname" value="<?php echo $arr[$index]->firstName ?>"></td>
            </tr>

            <tr>
                <td>Last name: </td>
                <td><input type="text" name="lastname" value="<?php echo $arr[$index]->lastName ?>"></td>
            </tr>

            <tr>
                <td>Birth day: </td>
                <td><input type="date" name="birthday" value="<?php echo $arr[$index]->birthDay?>"></td>
            </tr>

            <tr>
                <td>Address: </td>
                <td><input type="text" name="address" value="<?php echo $arr[$index]->address?>"></td>
            </tr>

            <tr>
                <td>Position: </td>
                <td><input type="text" name="position" value="<?php echo $arr[$index]->position?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
                <td><button><a href="../LoginLogout/Home.php">Back</a></button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>