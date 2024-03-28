<?php
include("db_connect.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

	$query="SELECT * FROM sign WHERE  username='$username' && password='$password'	";
	$data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	echo "$total"; 
	if($total==1){
	echo "success";
	header('location:front1.html');
	
	}
	else{
		echo "failed";
		echo "<script>alert('Wrong password or username')</script>";
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
	<link rel="stylesheet" href="login.css">
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
   

			
	
	<div class="form-group">
	
		<input type="text" class="form-control" name="username" placeholder="USERNAME" required>
	</div>
	<div class="form-group">
		
	
		<input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
	</div>
	
	<br>

	<button id="btn"class="btn-btn-primary" type="submit" name="submit">LogIn</button>

			
	</form>

</body>
</html>