
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration From</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body{
        background-image: url('bg1.jpg');
        background-size: cover;
        padding: 20px;
      }
    
   .continer{
          float: right;
          width:500px;
          height: 500px;
          padding: 50px;
          background-color: whitesmoke;
          color: black;
        border-color: black;

      }
      .from_group{
        margin-bottom: 40px;
        border-color: black;
      }

      .text{
        text-align: center;
      }
    </style>
  </head>
  <body>
  <div class = "continer">
    <?php 
  if(isset($_POST["submit"])){
    $fullName=$_POST["fullname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordRepeat=$_POST["repeat_password"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    
    if(empty($fullName) OR empty($email) OR empty( $password) OR empty( $passwordRepeat)  ) {
        array_push($errors,"All The Fields Are Required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       array_push($errors,"Email Is Not Valid");
    }
    if(strlen($password)<8){
      array_push($errors,"Password Must Be Least 8 Chareters Long");
    }
    if($password!== $passwordRepeat){
      array_push($errors,"Password Does Not Match");
    }
    
    require_once "database.php";
    $sql="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if($rowCount>0){
      array_push($errors,"Email Already Exists!");
    
    }
  
    if(count($errors)>0){
      foreach($errors as $error){
        echo"<div class='alert alert-danger'>$error</div>";
      }
    }else{
     
      $sql ="INSERT INTO user( full_name, email, password) VALUES(?,?,?)";
      $stmt = mysqli_stmt_init($conn);
     $prepareStmt= mysqli_stmt_prepare($stmt,$sql);
     if( $prepareStmt){
      mysqli_stmt_bind_param($stmt,"sss",$fullName,$email,$passwordHash);
      mysqli_stmt_execute($stmt);
      echo"<div class='alert alert-succes'>Registered successfully</div>";
      }else{
        die("something went wrong");
      }
    }

  }
    ?>
  <form  action="register.php" method="POST">
  <div class=" form-group mb-3">
  <h1 class="text">SIGN UP</h1>
    <input type="text" class="form-control" name="fullname" placeholder="Full Name">
  </div>

  <div class=" from-group mb-3">
    <input type="email" class="form-control"  name="email" placeholder="Email">
  </div>

  <div class="from-group mb-3">
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>

  <div class=" form-group mb-3">
   <input type="password" class="form-control" name="repeat_password"placeholder="Repeat Password">
  </div>

 <div class="from-btn">
  <input type="submit" class="btn btn-primary"value="Register" name="submit">
 </div>

 <br> Aleardy Registred ? <a href="login.php">LOGIN</a>
  </form>

  </div>
   
  </body>
</html>