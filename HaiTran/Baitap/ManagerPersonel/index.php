<?php
session_start();
include_once "Class/UserManager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $usersJson = new FileJson("DataFileJson/Users.json");
    $users = $usersJson->readFileJson();
    foreach ($users as $index => $user)
        if ($user->username == $username && $user->password == $password) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("location: LoginLogout/Home.php");
        } else
            $message = "Wrong username or password! Please retype!";
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
            margin-left: 30%;
            padding: 10px;
        }

        b {
            size: 14px;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="post">
        <fieldset>
            <legend><b>Login</b></legend>
            <br>
            Username: <input type="text" name="username" placeholder="username"><br>
            Password: <input type="password" name="password"><br>
            <a href="LoginLogout/Home.php"><input type="submit" value="Login" name="login"></a>
            <a href="Register/Register.php"><input type="button" value="Register"></a>
        </fieldset>
    </form>
    <p><?php echo $message ?></p>
</div>

</body>
</html>