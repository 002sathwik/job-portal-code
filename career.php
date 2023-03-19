<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Career</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
  .banner{
    background: url(img1.jpg);
    background-size: cover;
    text-align: center;
    color: #fff;
    padding: 200px;
   }

  .main{
    font-size: 70px;
    font-weight: 500;
    color: whitesmoke;
    text-align: left;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  }
  .nxt{
   right: 20px;
    font-family: Arial, Helvetica, sans-serif;
  }
  .body{
    background-color: #61876E;
  }
 #footer{
   background-image: -webkit-linear-gradient(left,#1A120B,#3C2A21,#D5CEA3);
    color: white;
    text-align: center;
    padding: 1% 2%;
    font-size: 1rem;
    font-weight: bold;
  } 
#pricing{
  padding: 50px;
  text-align: center;
}
  .pricing{
  padding: 3% 2%;

}



</style>
</head>
<body>
   
<div class="banner">
<h class="main">"BEGIN SOMEWHERE"</h><br>
<p class="nxt"> VACANT JOBS  DOWN, RIGHT THERE ARE MATCHING YOUR SKILLS NOW**</p>
<a href="#down" class="btn btn-outline-light btn-lg downlode-button">APPLY</a>
</div>


<section id="pricing">

<h2>APPLY NOW!!!</h2>
<p>"CURRENT VACANT JOBS RIGHT NOW"</p>
 
<div class="row">
<?php 
   include ("connect.php");
   $sql ="SELECT *FROM  job";
   $result = mysqli_query($conn,$sql);

   while(   $row= mysqli_fetch_array($result)){
    ?>


<div class=" pricing col-lg-4 col-md-6">
<div class="card">
  <div class="card-header">
    <h3 style="text-transform: uppercase;"><?php echo $row["position"] ?></h3>
     </div>
    <div class="card-body">
      <h2>COMPANY NAME[<b><?php echo $row["cname"] ?></b>]</h2>
      <p> JOB DESCRIPTION[<b><?php echo $row["jdesc"] ?></b>]</p>
      <p> SKILLS REQUIRED[<b><?php echo $row["skills"] ?></b>]</p>
      <p> CTC OFFERED[<b><?php echo $row["ctc"] ?></b>]</p>
      <a href="apply.php"><button type="button" class="btn btn-outline-primary">APPLY</button></a>
</div>
</div> 
</div>   


 

<?php

}

?>

</section>

<footer id="footer">
   <p>© Copyright H sathwik</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
