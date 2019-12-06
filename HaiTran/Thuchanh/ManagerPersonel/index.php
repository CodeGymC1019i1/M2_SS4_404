<?php
include_once "EmployeeManager.php";
include_once "Employee.php";

$employeesManager = new EmployeeManager();

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
        div {
            position: absolute;
            margin-left: 30%;
            border: #808080 solid 1px;
            width: 30%;
            padding: 10px;
        }
        table{
            width: 100%;
        }
        td{
            border-bottom: 1px solid #808080;
        }
        b{
            color:
        }
    </style>
</head>
<body>
<div>
    <button><a href="DisplayAddEmployee.php">Add</a></button>
    <table>
        <caption><b>List Employees<b></caption><br>
        <?php

        $listEmployees = $employeesManager->readFileJson();
        for($i = 0; $i < count($listEmployees); $i++):
            ?>
        <tr>
            <td><?php echo $listEmployees[$i]->firstName.' '.$listEmployees[$i]->lastName; ?></td>
            <td>
                <button><a href="DisplayEditEmployee.php?id=<?php echo $i; ?>">Edit</a></button>
                <button><a href="deleteEmployee.php?id=<?php echo $i; ?>">Delete</a></button>
            </td>
        </tr>
        <?php endfor;?>
    </table>
</div>
</body>
</html>