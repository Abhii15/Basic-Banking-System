<?php 

$servername="localhost:8111";
$username="root";
$password="1502";
$db="sparksbank";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
