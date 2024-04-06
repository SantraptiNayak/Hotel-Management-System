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
    <link rel="stylesheet" href="re.css" >
  </head>
  <body>




    <header>
      <div class="company-logo"><span><a href="http://localhost/db_pro/front.html"><img src="cafe-crepe_main-logo-white.png" alt="cafe" class="cafe-img">Cafe Crepe</a></span></div> 
      <nav class="navbar">
        <ul class="nav-items">
          <li class="nav-item"><a href="http://localhost/db_pro/front1.html" class="nav-link">HOME</a></li>
          <!-- <li class="nav-item"><a href="signup/index.html" class="nav-link">SignUp</a></li> -->
          <!-- <li class="nav-item"><a href="#" class="nav-link">SHOP</a></li> -->
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
        <h1 id="title" class="text-center" ><Strong><i>Reservation</i> </Strong></h1>
        <p id="description" class="description text-center"><strong>Please make your reservation from our services.</strong> </p>
      <!-- </header> -->
      <form id="survey-form" method="POST" action="#">
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
        </div>
        <div class="form-group">
          <label>Select your nationality :</label>
          <select id="dropdown" name="nation" class="form-control" required>
            <option disabled selected value>Select nationality</option>
            <option value="domestic">India</option>
            <option value="international">International</option>
          </select>
        </div>
        <div class="form-group">
          <p>Types of rooms</p>
          <select id="dropdown" name="troom" class="form-control" required>
            <option disabled selected value>Select room type</option>
            <option value="Superior">Superior Room</option>
            <option value="Deluxe">Deluxe Room</option>
            <option value="Guest">Guest House</option>
            <option value="Single">Single Room</option>
          </select>
        </div>
        <div class="form-group">
          <p>Bedding Type</p>
          <select id="dropdown" name="bed" class="form-control" required>
            <option disabled selected value>Select bed type</option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
          </select>
        </div>
        <div class="form-group">
          <p>No of rooms</p>
          <select id="dropdown" name="nroom" class="form-control" required>
            <option disabled selected value>Select room type</option>
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
          <p>Meat Plan</p>
          <select id="dropdown" name="meat" class="form-control" required>
            <option disabled selected value>Select room type</option>
            <option value="Room only">Room Only</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Half Board">Half Board</option>
            <option value="Full Board">Full Board</option>
          </select>
        </div>
        <div class="form-group">
          <label>Check-In</label>
          <input name="cin" type="date" class="form-control">

      </div>
      <div class="form-group">
        <label>Check-Out</label>
        <input name="cout" type="date" class="form-control">

    </div>
        <div class="form-group">
        <input type="submit"name="register" class="btn btn-info" value="submit" id="refreshpage">
        </div>
      </form>
    </div>
  </body>


</html>

<?php

$fname= $lname= $email=$phone=$nation=$troom=$bed=$nroom=$meat=$cin=$cout='';
      if(isset($_POST['register'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $nation=$_POST['nation'];
        $troom=$_POST['troom'];
        $bed=$_POST['bed'];
        $nroom=$_POST['nroom'];
        $meat=$_POST['meat'];
        $cin=$_POST['cin'];
        $cout=$_POST['cout'];
     
        $query="INSERT INTO reservation(Firstname,Lastname,Email,Phone,Nation,Roomtype,Bed,Noofrooms,Meat,CheckIn,CheckOut) VALUES( '$fname', '$lname','$email','$phone','$nation','$troom','$bed','$nroom' ,'$meat','$cin', '$cout')";
      $data=mysqli_query($con,$query);
      if($data){
        echo "<script>alert('Your room is booked')</script>";
        echo "recorde updated";
        echo "<meta http-equiv = 'refresh' content = '0; url = http://localhost/db_pro/display_records/display.php' />";
      }
      else{
        echo"failed";
      }
    }
      
?>

