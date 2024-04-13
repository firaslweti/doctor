<?php
$conn = mysqli_connect("localhost" , "root" , "" , "doctor");
if(mysqli_errno($conn)){
    echo "connect your database" ; 
}
?>