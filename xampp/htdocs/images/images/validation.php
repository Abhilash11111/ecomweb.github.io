<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");
if(isset($_POST["Username"]) && isset($_POST["Password"]))
{
 $Username = mysqli_real_escape_string($connect, $_POST["Username"]);
 $Password = mysqli_real_escape_string($connect, $_POST["Password"]);
 $sql = "SELECT * FROM government WHERE Username = '".$Username."' AND Password = '".$Password."'";
 $result = mysqli_query($connect, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
  $data = mysqli_fetch_array($result);
  $_SESSION["Username"] = $data["Username"];
  echo $data["Username"];
 }
}
?>