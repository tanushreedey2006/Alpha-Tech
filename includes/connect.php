<?php
global $conn;
$conn= mysqli_connect("localhost","root","","hackathon");

if(!$conn){
    die("Failed to connect database".mysqli_connect_error());
}

?>
