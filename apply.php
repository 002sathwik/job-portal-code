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
  .pricing{
    text-align: center;
    font-size: 20px;
    font-weight:200;
    padding-top: 20px;
  }
  .text{
    font-size: 50px;
    font-weight: 600;
    font-family: 'Arial Narrow Bold', sans-serif;
  }
.textt{
  font-size: 20px;
  font-weight: bold;
}

  .row{
   padding: 100px;
   text-align: center;
   padding: 3% 2% 3%;
   box-shadow: #61876E;
  }

  #footer{
   background-image: -webkit-linear-gradient(left,#1A120B,#3C2A21,#D5CEA3);
    color: white;
    text-align: center;
    padding: 1% 2%;
    font-size: 1rem;
    font-weight: bold;
  } 
  .continer{
           background-color:whitesmoke;
           width: 90%;
           left: 50%;
           margin-top:1rem;
           margin-bottom: 1rem;
           margin-left:1em;
           margin-right: 1em;
           padding: 20px;
           box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
                       0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
                  
       }
      .text{
        text-align: center;
      }
      .back{
        text-align: center;
        padding-top: 1%;
        padding-bottom: 1%;
      }
     
</style>
</head>
<body>
   
<div class="banner">
<h class="main">"BEGIN SOMEWHERE"</h><br>
<p class="nxt"> VACANT JOBS  DOWN, RIGHT THERE ARE MATCHING YOUR SKILLS NOW**</p>
<a href="#forms" class="btn btn-outline-light btn-lg downlode-button">APPLY</a>
</div>

<div class="form text"> FILL OUR APPLICATOIN FORM </div>

<div class = "continer">
<?php
$hostName="localhost";
$dbUser="root";
$dbpassword="";
$dbName="jobs";
$conn = mysqli_connect($hostName,$dbUser,$dbpassword,$dbName);
 if(!$conn){
    die("something went wrong;");
 }

if(isset($_POST["submit"])){
    $name = $_POST["pname"];
    $position= $_POST["position"];
    $year = $_POST["year"];
    
    
    $errors = array();
    
    if(empty($name) OR empty($position) OR empty( $year)  ) {
        array_push($errors,"All The Fields Are Required");
    }else{
    $sql="INSERT INTO candidate ( pname , position, year) VALUES('$name','$position','$year')";
   if( mysqli_query($conn,$sql)){
    echo "Applied";
   }else{
    die("Something Went Wrong");
   }
}
}
?> 
   <form  action="apply.php" method="POST">
  <div class=" form-group mb-3">
    <input type="text" class="form-control" name="pname" placeholder="Full Name">
  </div>
  <div class="from-group mb-3">
    <input type="text" class="form-control"  name="position" placeholder="position">
  </div>

  <div class=" form-group mb-3">
   <input type="text" class="form-control" name="year" placeholder="Year passout">
  </div>

 <div class="from-btn">
  <input type="submit" class="btn btn-primary"value="apply" name="submit">
 </div>
</form>
</div>
 <div class="back">
    <h1></h1>
<a href="career.php" class="btn btn-outline-dark btn-lg downlode-button">   back</a>
</div>
</section>
<footer id="footer">
   <p>© Copyright H sathwik</p>
</footer>
</body>
</html>