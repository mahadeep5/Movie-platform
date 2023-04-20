<?php
session_start();

if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
  header("location:login.php");
  exit;
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
    <title>Wel come - <?php  $_SESSION['username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body{
        background-image: url('play-page/sit2.jpg');
       }
      </style>
  </head>
  <body>
<?php require 'partials/_nav.php'?>
<div class="container my-3">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome!-<?php echo $_SESSION['username']?>!</h4>
  <p>Hey how are you doing?welcome to Movie Store.you are logged in as <?php echo $_SESSION['username']?>.Aww yeah, you successfully Enter the Website.The website offers services in kannada,English& hindhi languages for all movies.once a user
visits the site ,how long it takes to browse and download. The movies depends on the time and
users interests the user pays.</p>
      </h4>
  <p class="mb-0">Enter the website using this link <a href="/loginsystem/index.php">using this link.</a></p>

  
<p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php">using this link.</a></p>
<p class="mb-0">Whenever you need to, be view the how many times user visit the page.<a href="/loginsystem/visit.php">using this link.</a></p> 
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>