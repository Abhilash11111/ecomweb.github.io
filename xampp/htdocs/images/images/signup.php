<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="container">
    <div class="SignIn-box">
    <form action="connect.php" method="post">
        <h1>SignIn</h1>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="Username" value="">
        </div>
        <div class="textbox">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <input type="text" placeholder="Phone" name="Phone" value="">
        </div>
        <div class="textbox">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <input type="email" placeholder="email" name="email" value="">
        </div>
        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="Password" value="">
        </div>
    <input  class="btn" type="submit" value="Sign In">
    </form>
    <a href="login.php"><center>Already a user? Login.</center></a>

    </div>
</div>
  </body>
</html>
