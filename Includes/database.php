<?php
 $dbHost = "localhost";
 $dbUser = "root";
 $dbPass = "";
 $dbName = "first";

 $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
 if(!$conn){
    die("Database Connection failed");
 }
 ?>