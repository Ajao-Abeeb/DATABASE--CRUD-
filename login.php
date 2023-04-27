<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "mgold";
$link = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $filter = "SELECT * FROM register WHERE First_Name = '$username' AND Surname = '$password'";
    $query = mysqli_query($link,$filter);
    if(mysqli_fetch_array($query)){
        // $mes = "Login Info Correct";
        // echo $mes;
        header('location: DATABASE (CRUD).php');
    }
    else{
        $mes = "Invalid Login Info";
        echo $mes;
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <label for="">Username</label>
    <input type="text" name="username" id="" placholder="Username">
    <label for="">Passwordd</label>
    <input type="password" name="password" id="" placholder="password">
    <input value="Login" type="submit" name="login"> 
    </form>
</body>
</html>