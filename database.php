<?php 
$hostName="localhost";
$dbUser="root";
$dbpassword="";
$dbName="jobs";
$conn = mysqli_connect($hostName,$dbUser,$dbpassword,$dbName);
 if(!$conn){
    die("something went wrong;");
 }
?>
