<!DOCTYPE html>
<html>
<head>
    <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
</head>
<body>
<?php
   //home.php
   session_start();
   if(!isset($_SESSION["Username"]))
   {
    header("location: login.php");
   }
   else{
    echo '<p align="center"><a href="logout.php">Logout</a></p>';
   }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">E-commerce website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<section class="my-5">
    <div class="py-2">
        <h2 class="text-center" style="color:#4caf50">Choose Your Domain</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
            <div class="card">
              <img class="card-img-top" src="image.11.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">products</h4>
                <a href="https://www.shoppersstop.com" class="btn btn-primary">View</a>
              </div>
            </div>
            
            
            
</section>




</body>
</html>