<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "mgold";
$link = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST['submit'])){
    $fn = $_POST['fname'];
    $sn = $_POST['sname'];
    $on = $_POST['oname'];
    $subj = $_POST['subject'];
    $scor = $_POST['scor'];
    $query = "INSERT into register(First_Name,Surname,Other_Name,Subject1,Score)";
    $query .= " VALUES('$fn', '$sn', '$on', '$subj', '$scor')";
    $sav = mysqli_query($link, $query);
    if(mysqli_affected_rows($link)){
        $message = "Recored Submitted";
        echo $message;
    }
    else{
        $message = "Server Issue";
        echo $message;
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
<form action="" method="post">
<label for="">First Name</label>
<input type="text" name="fname" id="" placeholder="FirstName">
<label for="">Surname</label>
<input type="text" name="sname" id="" placeholder="Surname">
<label for="">Other Name</label>
<input type="text" name="oname" id="" placeholder="Other Name">
<label for="">Subject</label>
<input type="text" name="subject" id="" placeholder="Subject">
<label for="">Score</label>
<input type="text" name="scor" id="" placeholder="Score">
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>