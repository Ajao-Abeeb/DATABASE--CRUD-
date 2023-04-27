<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "mgold";
$link = mysqli_connect($host, $user, $pass, $database);
 $sql = "SELECT * FROM register";
 $query = mysqli_query($link , $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
       <th>ID</th>
       <th>surname</th>
       <th>firstname</th>
       <th>othername</th>
       <th>subject</th>
       <th>score</th>
    </tr>
    <?php
       while($row = mysqli_fetch_array($query)){
    ?>

    <tr>
        <td> <?php echo $row[0] ?></td>
        <td> <?php  echo $row[1] ?></td>
        <td> <?php  echo $row[2] ?></td>
        <td> <?php  echo $row[3]  ?></td>
        <td> <?php  echo $row[4] ?></td>
        <td> <?php  echo $row[5] ?></td>
        <td> <a href="delete.php?idd=<?php echo $row[0];?>">delete</a> </td>
         <?php

    }
    ?>
    </tr>
    </table> 
</body>
</html>