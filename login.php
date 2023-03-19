<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration From</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
         body{
        background-image: url('bg2.jpg');
        background-size: cover;
      }
    
     
      form{
        float: left;
           background-color: whitesmoke;
           margin-top:5rem;
           margin-left:30em;
           margin-right: 10em;
           padding: 30px;
           box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
                       0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
          border-radius: 3em;

      }
      .text{
        text-align: center;
      }
 
    </style>
  </head>
  <body>
  <div class = "continer">
    <?php
    if(isset($_POST["login"])){
      $email=$_POST["email"];
      $password=$_POST["password"];
      require_once "database.php";
      $sql ="SELECT * FROM user WHERE email='$email'";
      $result = mysqli_query($conn,$sql);
      $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
      if($user){
          if(password_verify($password,$user["password"])){
            header("location: index.php");
            die();
          }
        
      }else{
        echo"<div class='alert alert-danger'>Email Does Not Match</div>";
      }
    }
     ?>
   
  <form  action ="login.php"method="POST">
  <div class=" mb-3">
     <h1 class="text">LOGIN </h1>
    <label for="exampleInputEmail1" class="form-label">EMAIL ADDRESS</label>
    <input type="email" class="form-control"  name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input type="password" class="form-control"  name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <p style="text-align: center;">New User?<br>Create Account<a href="register.php"> Sign Up </a></p>
</form>
  </div>
   
  </body>
</html>