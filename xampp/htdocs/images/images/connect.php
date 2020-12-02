<?php

session_start();
header('location:login.php');

$con= mysqli_connect('localhost','root');
if($con){
    echo"SignIn Successful";
}else{
    echo"SigIn Unsuccessful";
}

mysqli_select_db($con, 'test');

$Username = $_POST['Username'];
$Phone = $_POST['Phone'];
$email = $_POST['email'];
$Password = $_POST['Password'];


$q="select * from government where Username='$Username' && Phone='$Phone' && email='$email' && Password='$Password' ";

$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
    echo "Enter proper data";
}else{
    $qy="insert into government(Username,Phone,email,Password) values ('$Username','$Phone','$email','$Password')";
    mysqli_query($con,$qy);
}

?>