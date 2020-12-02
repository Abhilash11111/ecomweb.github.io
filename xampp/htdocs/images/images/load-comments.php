<?php 
    include 'dbh.php';
    $commentnewcount=$_POST['commentnewcount'];
    $sql="select * from comments LIMIT $commentnewcount";
    $result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<p>";
            echo $row['name'];
            echo "<br>";
            echo $row['message'];
            echo "</p>";
        }
    }else{
        echo "there are no comments";}
?>

