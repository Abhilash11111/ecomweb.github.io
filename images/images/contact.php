<!DOCTYPE html>
<html>
    <head>
        <title> Contact Form Design </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>

    </head>
    <body>
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
    
        <div class="contact-title">
            <h1 style="color: black"><center>Any Queries??</center></h1>
            <h2 style="color: black"><center>We are always ready to serve you!</center></h2>
        </div>
        <div class="contact-form">
            <form id="contact-form" method="post" action="contact-form-handler.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>
            
            <input type="submit" class="form-control submit" value="SEND MESSAGE">
            </form> 
        </div> 
<?xml version="1.0" encoding="UTF-8"?>
<note>
  
  <heading><center>Reminder:</center></heading><br>
  <body> <center>Don't forget to leave a comment!</center> </body>
</note>   
    </body>
</html>    