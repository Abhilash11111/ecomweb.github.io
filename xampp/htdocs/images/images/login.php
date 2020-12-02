<?php
session_start();
if(isset($_SESSION["Username"]))
{
 header("location:domain.php");
}
?>
<html>
 <head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Webslesson Tutorial</title>
  <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  #box
  {
   width:100%;
   max-width:500px;
   border:1px solid #ccc;
   border-radius:15px;
   background-color: rgba(14, 12, 12, 0.63);
   margin:0 auto;
   color: white;
   padding:0 20px;
   box-sizing:border-box;
   height:270px;
  }
  body{
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  margin-top: 200px;
  font-family: cursive;
  background-image: url(image.9.jpg);
  background-size: cover;
}
  </style>
 </head>
 <body>
  <div class="container">
   <h2 style="color:black" align="center">Login Here</h2><br /><br />
   <div id="box">
    <br />
    <form method="post">
     <div class="form-group">
      <label>Username</label>
      <input type="text"  name="Username" id="Username" class="form-control" />
     </div>
     <div class="form-group">
      <label>Password</label>
      <input type="Password" name="Password" id="Password" class="form-control" />
     </div>
     <div class="form-group">
      <input  type="button" name="login" id="login" class="btn btn-success" value="Login" />
     </div>
     <a href="signup.php"><center>New User? Signup.</center></a>
     <div id="error"></div>
    </form>
    <br />
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#login').click(function(){
  var Username = $('#Username').val();
  var Password = $('#Password').val();
  if($.trim(Username).length > 0 && $.trim(Password).length > 0)
  {
   $.ajax({
    url:"validation.php",
    method:"POST",
    data:{Username:Username, Password:Password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      $("body").load("domain.php").hide().fadeIn(1500);
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      $("#box").effect("shake", options, 800);
      $('#login').val("Login");
      $('#error').html("<span class='text-danger'>Invalid Username or Password</span>");
     }
    }
   });
  }
  else
  {

  }
 });
});
</script>