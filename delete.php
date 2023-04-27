<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $database = "mgold";
 $link = mysqli_connect($host, $user, $pass, $database);

 $id = $_GET['idd']; 
 $delete = "DELETE FROM register WHERE id = '$id'";
 $execute = mysqli_query($link,$delete);
 if(mysqli_affected_rows($link)){
  $mes = "del" ;
  echo $mes;
 }
 else{
     $mes = "error";
     echo $mes;
 }
?>