<?php
include("connect.php");
if(isset($_POST["create"])){
    $cname = $_POST["cname"];
    $position= $_POST["position"];
    $jdesc = $_POST["jdesc"];
    $skills = $_POST["skills"];
    $ctc = $_POST["ctc"];
    $sql="INSERT INTO job(cname, position, jdesc, skills ,ctc) VALUES('$cname',' $position', '$jdesc','$skills','$ctc')";
   if( mysqli_query($conn,$sql)){
    echo "Rechord Inserted";
    header("location: index.php");
   }else{
    die("Something Went Wrong");
   }
}
?>