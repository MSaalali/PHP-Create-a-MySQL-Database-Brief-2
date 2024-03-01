<?php

$servername = "localhost";
$username = "root";
$password = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $dbname = $_POST["dbname"];
try {
    $mydb = new PDO("mysql:host=$servername", $username, $password);
    $mydb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE $dbname";
    $mydb->exec($sql);
    echo "Database successfully created";
} catch(PDOException) {
    echo "Error" ;
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>brief1</title>
</head>
<body>
<h2>
 PHP Create a MySQL Database
 </h2>
 <form  method="POST">

  <input type="text" name="dbname" >
    <input type="submit" name="submit" value= "submit" >
   

 </form>
</body>
</html>

<style>
 body{
 position: relative;
 background-color: rgb(197, 186, 200);
 background-repeat: no-repeat;
 height: 100vh;
 display: flex;
 justify-content: center;
 align-items:center;
 flex-direction:column;
 }
 h2{
 
 }
 input{
  background-color:#eeeeee;
  border-radius:50px;
  height: 50px;
  width:160px;
 }
</style>
<?php 
?>