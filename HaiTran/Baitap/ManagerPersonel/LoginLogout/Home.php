<?php
session_start();
if (!isset($_SESSION["username"]))
    header("location: ../index.php");
include_once "../Class/EmployeeManager.php";
include_once "../Class/Employee.php";

$fileJsonSearch = new FileJson("../DataFileJson/SearchFile.json");
$fileJsonEmployee = new FileJson("../DataFileJson/Employees.json");

if ($_SERVER["REQUEST_METHOD"] == "GET")
    if (empty($_GET["searched"])) {
        $list = $fileJsonEmployee->readFileJson();
        $fileJsonSearch->putFileJson($list);
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
        div {
            position: absolute;
            margin-left: 10%;
            border: #808080 solid 1px;
            width: 80%;
            padding: 10px;
        }
        table{
            width: 100%;
        }
        td{
            border-bottom: 1px solid #808080;
            padding: 20px;
        }
        th{
            text-align: left;
            size: 14px;
            padding: 20px;
        }
        caption{
            size: 20px;
        }
    </style>
</head>
<body>
<div>
    <a href="../Process/DisplayAddEmployee.php"><button>Add</button></a>
    <a href="LogOut.php"><button>Log out</button></a>
    <form action="../Process/Search.php" method="get">
    <input type="text" name="keyword" ><input type="submit" value="Search">
    </form>
    <table>
        <caption><b>List Employees<b></caption><br>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Position</th>
        </tr>
        <?php

        $employees = $fileJsonSearch->readFileJson();
        for($i = 0; $i < count($employees); $i++):
            ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $employees[$i]->firstName.' '.$employees[$i]->lastName; ?></td>
            <td><?php echo $employees[$i]->birthDay;?></td>
            <td><?php echo $employees[$i]->address;?></td>
            <td><?php echo $employees[$i]->position;?></td>
            <?php if ($_SESSION["username"] == "admin" && $_SESSION["password"] == "admin"):  ?>
            <td>
                <a href="../Process/DisplayEditEmployee.php?id=<?php echo $i; ?>"><button>Edit</button></a>
                <a href="../Process/deleteEmployee.php?id=<?php echo $i; ?>"><button>Delete</button></a>
            </td>
            <?php endif; ?>
        </tr>
        <?php endfor;?>
    </table>
</div>
</body>
</html>
