<?php
include("db_connect.php");
$showalert=false;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SurveyForm</title>
    <link rel="stylesheet" href="food_form.css" >
  </head>
  <body>




    <header>
      <div class="company-logo"><span><a href="http://localhost/db_pro/front.html"><img src="cafe-crepe_main-logo-white.png" alt="cafe" class="cafe-img">Cafe Crepe</a></span></div> 
      <nav class="navbar">
        <ul class="nav-items">
          <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
          <!-- <li class="nav-item"><a href="signup/index.html" class="nav-link">SignUp</a></li> -->
          <li class="nav-item"><a href="http://localhost/db_pro/room_booking/room.html" class="nav-link">SHOP</a></li>
          <!-- <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li> -->
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="bx bx-menu"></i>
        <i class="bx bx-x"></i>
      </div>
    </header>
   
   

    <div class="container">
      <!-- <header class="header"> -->
        <h1 id="title" class="text-center" ><Strong><i>CafeCrepe Food Services</i> </Strong></h1>
        <p id="description" class="description text-center"><strong>Please make your Orders from our services.</strong> </p>
      <!-- </header> -->
      <form id="survey-form" method="POST" action="#">
        <div class="form-group">
          <label id="name-label" for="fname">Food Name</label>
          <input type="text" name="foodname" id="name" class="form-control" placeholder="Enter your first name" required />
        </div>
        <div class="form-group">
          <label id="name-label" for="fname">First Name</label>
          <input type="text" name="fname" id="name" class="form-control" placeholder="Enter your first name" required />
        </div>
        <div class="form-group">
          <label id="name-label" for="lname">Last Name</label>
          <input type="text" name="lname" id="name" class="form-control" placeholder="Enter your last name" required />
        </div>
        <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" required />
        </div>
        <div class="form-group">
          <label id="number-label" for="phone">Phone Number</label>
          <input type="text" name="phone" id="number" class="form-control" placeholder="Enter Phone Number" required />
        <div class="form-group">
          <label id="name-label" for="lname">Address</label>
          <input type="text" name="address" id="name" class="form-control" placeholder="Enter your Address" required />
        </div>
       
        <div class="form-group">
          <p>Quantity</p>
          <select id="dropdown" name="quantity" class="form-control" required>
            <option disabled selected value>Quantity</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
      
       
        <div class="form-group">
        <input type="submit"name="register" class="btn btn-info" value="submit" id="refreshpage">
        </div>
      </form>
    </div>
  </body>


</html>

<?php

$foodname=$fname= $lname= $email=$phone=$address=$quantity='';
      if(isset($_POST['register'])){
        $foodname=$_POST['foodname'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $quantity=$_POST['quantity'];
        
       
      
     
        $query="INSERT INTO Food_form(Foodname,Firstname,Lastname,Email,Phone,Address,Quantity) VALUES( '$foodname','$fname', '$lname','$email','$phone','$address','$quantity' )";
      $data=mysqli_query($con,$query);
      if($data){
        echo "<script>alert('Your Order has been placed')</script>";
        echo "recorde updated";
        echo "<meta http-equiv = 'refresh' content = '0; url = http://localhost/db_pro/display_records/food_display.php' />";
      }
      else{
        echo"failed";
      }
    }
      
?>

