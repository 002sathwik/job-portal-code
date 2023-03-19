<?php include 'header.php'?>

<div class="content">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate NAME</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
  <?php 
$hostName="localhost";
$dbUser="root";
$dbpassword="";
$dbName="jobs";
$conn = mysqli_connect($hostName,$dbUser,$dbpassword,$dbName);
 if(!$conn){
    die("something went wrong;");
 }

   $sql ="SELECT *FROM  candidate";
   $result = mysqli_query($conn,$sql);

   while(   $row= mysqli_fetch_array($result)){
    ?>
    <tr>
      <td> <?php echo $row["id"] ?></td>
      <td> <?php echo $row["pname"] ?></td>
      <td> <?php echo $row["position"] ?></td>
      <td> <?php echo $row["year"] ?></td>
      <?php

}

?>
   </tbody>
</table>
</div>
</body>
</html>

