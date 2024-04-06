<?php
include("db_connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    if($password==$cpassword){
            $sql="INSERT INTO sign VALUES('$username','$password','$cpassword')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo "<script>alert('Your account has been created')</script>";
                echo "inserted succesfully";
                echo "<meta http-equiv = 'refresh' content = '0; url = http://localhost/db_pro/login.php' />";
            }
            else{
                echo "unsucess";
                echo "<script>alert('password doesnt match')</script>";
            }
          
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Cafe<span>Crepe</span></div>
		</div>
		<br>
        <form action="#" method="POST">
		<div class="login">
       

                <form action="#" method="POST"> 
        
        <div class="form-group">
        
            <input type="text" class="form-control" name="username" placeholder="USERNAME" required>
        </div>
        <div class="form-group">
        
            <input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
        </div>
        <div class="form-group">
           
            <input type="password" class="form-control" name="cpassword" placeholder="CONFIRM PASSWORD" required>
        </div>
        
        Already have an account? <a href="login.php" class="account">LogIn</a> <br>
        <button class="btn-btn-primary" type="submit">signup</button>

				
        </form>
</body>
</html>