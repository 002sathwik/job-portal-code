<?php
$dbhost="localhost";
$dbUser="root";
$dbpass="";
$dbName="jobs";
$conn = mysqli_connect($dbhost,$dbUser,$dbpass,$dbName);
if(!$conn){
    die("Something Went Wrong");
}
?>