<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="hotel";


    $con=mysqli_connect($server,$username,$password,$database);
    if($con){
        echo "succesfully connected";
    }
    else{
        die("Error".mysqli_connect_error());
    }
?>