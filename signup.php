<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password==$cpassword) && $exists==false){
    $sql="INSERT INTO  `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        $showAlert=true;
    }

  
}
  else{
    $showError="passsword do not match";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta charset="UTF-8">
<meta name="viewport"
content="width=devicde-width,initial-scale=1.0">
<title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<?php require 'partials/_nav.php'?>
<?php
if($showAlert){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Sucess!</strong> You account is now created and you can login.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>
<div class="container">
    <h1 class="text-center">sign up to our website</h1>

    <form action="/loginsystem/signup.php" method="POST">
  <div class="col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username"  name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="paassword" name="password">
  </div>
  <div class="col-md-6">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword"  name="cpassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password.</small></div>
  </div>
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>