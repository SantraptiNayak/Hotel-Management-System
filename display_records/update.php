<?php
include("db_connect.php");
$id=$_GET['id'];

$query="SELECT * FROM reservation WHERE RENO='$id'";
$data=mysqli_query($con,$query);


$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UpdateForm</title>
    <link rel="stylesheet" href="update.css" >
  </head>
  <body>




    <header>
      <div class="company-logo"><span><a href="index.html"><img src="cafe-crepe_main-logo-white.png" alt="cafe" class="cafe-img">Cafe Crepe</a></span></div> 
      <nav class="navbar">
        <ul class="nav-items">
          <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
          <li class="nav-item"><a href="signup/index.html" class="nav-link">SignUp</a></li>
          <li class="nav-item"><a href="#" class="nav-link">SHOP</a></li>
          <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="bx bx-menu"></i>
        <i class="bx bx-x"></i>
      </div>
    </header>
   
   

    <div class="container">
      <!-- <header class="header"> -->
        <h1 id="title" class="text-center" ><Strong><i>Update Reservation</i> </Strong></h1>
        <p id="description" class="description text-center"><strong>Please make your reservation from our services.</strong> </p>
      <!-- </header> -->
      <form id="survey-form" method="POST" action="#">
        <div class="form-group">
          <label id="name-label" for="fname">First Name</label>
          <input type="text" name="fname" value="<?php echo $result['Firstname']  ?>" id="name" class="form-control" placeholder="Enter your first name" required />
        </div>
        <div class="form-group">
          <label id="name-label" for="lname">Last Name</label>
          <input type="text" name="lname" id="name" value="<?php echo $result['Lastname']  ?>"class="form-control" placeholder="Enter your last name" required />
        </div>
        <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input type="email" name="email" id="email" value="<?php echo $result['Email']  ?>" class="form-control" placeholder="Enter your Email" required />
        </div>
        <div class="form-group">
          <label id="number-label" for="phone">Phone Number</label>
          <input type="number" name="phone" id="number" value="<?php echo $result['Phone']  ?>" class="form-control" placeholder="Enter Phone Number" />
        </div>
        <div class="form-group">
          <label>Select your nationality :</label>
          <select id="dropdown" name="nation" value="<?php echo $result['Nation']  ?>"class="form-control" required>
            <option disabled selected value>Select nationality</option>
            <option value="domestic"
            <?php
                if($result['Nation']=='domestic'){
                            echo "selected";
                }
              ?>>India</option>
            <option value="international"
            <?php
                if($result['Nation']=='international'){
                            echo "selected";
                }
              ?>>International</option>
          </select>
        </div>
        <div class="form-group">
          <p>Types of rooms</p>
          <select id="dropdown" name="troom" class="form-control" required>
            <option disabled selected value>Select room type</option>
            <option value="Superior"
              <?php
                if($result['Roomtype']=='Superior'){
                            echo "selected";
                }
              ?>
            >
            Superior Room</option>
            <option value="Deluxe"<?php
                if($result['Roomtype']=='Deluxe'){
                            echo "selected";
                }
              ?>>Deluxe Room</option>
            <option value="Guest"<?php
                if($result['Roomtype']=='Guest'){
                            echo "selected";
                }
              ?>>Guest House</option>
            <option value="Single"<?php
                if($result['Roomtype']=='Single'){
                            echo "selected";
                }
              ?>>Single Room</option>
          </select>
        </div>
        <div class="form-group">
          <p>Bedding Type</p>
          <select id="dropdown" name="bed"  class="form-control" required>
            <option disabled selected value>Select bed type</option>
            <option value="Single"
            <?php
                if($result['Bed']=='Single'){
                            echo "selected";
                }
              ?>>Single</option>
            <option value="Double"
            <?php
                if($result['Bed']=='Double'){
                            echo "selected";
                }
              ?>>Double</option>
            <option value="Triple"
            <?php
                if($result['Roomtype']=='Triple'){
                            echo "selected";
                }
              ?>>Triple</option>
            <option value="Quad"
            <?php
                if($result['Roomtype']=='Quad'){
                            echo "selected";
                }
              ?>>Quad</option>
          </select>
        </div>
        <div class="form-group">
          <p>No of rooms</p>
          <select id="dropdown" name="nroom"  class="form-control" required>
            <option disabled selected value>Select room type</option>
            <option value="1"
            <?php
                if($result['Noofrooms']=='1'){
                            echo "selected";
                }
              ?>>1</option>
            <option value="2"
            <?php
                if($result['Noofrooms']=='2'){
                            echo "selected";
                }
              ?>>2</option>
            <option value="3"
            <?php
                if($result['Noofrooms']=='3'){
                            echo "selected";
                }
              ?>>3</option>
            <option value="4"<?php
                if($result['Noofrooms']=='4'){
                            echo "selected";
                }
              ?>>4</option>
            <option value="5"
            <?php
                if($result['Noofrooms']=='5'){
                            echo "selected";
                }
              ?>>5</option>
            <option value="6"
            <?php
                if($result['Noofrooms']=='6'){
                            echo "selected";
                }
              ?>>6</option>
            <option value="7"
            <?php
                if($result['Noofrooms']=='7'){
                            echo "selected";
                }
              ?>>7</option>
            <option value="8"<?php
                if($result['Noofrooms']=='8'){
                            echo "selected";
                }
              ?>>8</option>
            <option value="9"
            <?php
                if($result['Noofrooms']=='9'){
                            echo "selected";
                }
              ?>>9</option>
            <option value="10"
            <?php
                if($result['Noofrooms']=='10'){
                            echo "selected";
                }
              ?>>10</option>
          </select>
        </div>
        <div class="form-group">
          <p>Meat Plan</p>
          <select id="dropdown" name="meat" class="form-control" required>
            <option disabled selected value>Select room type</option>
            <option value="Room only"
            <?php
                if($result['Meat']=='Room only'){
                            echo "selected";
                }
              ?>>Room Only</option>
            <option value="Breakfast"
            <?php
                if($result['Meat']=='Breakfast'){
                            echo "selected";
                }
              ?>>Breakfast</option>
            <option value="Half Board"
            <?php
                if($result['Meat']=='Half Board'){
                            echo "selected";
                }
              ?>>Half Board</option>
            <option value="Full Board"<?php
                if($result['Meat']=='Full Board'){
                            echo "selected";
                }
              ?>>Full Board</option>
          </select>
        </div>
        <div class="form-group">
          <label>Check-In</label>
          <input name="cin" type="date" value="<?php echo $result['CheckIn']  ?>" class="form-control">

      </div>
      <div class="form-group">
        <label>Check-Out</label>
        <input name="cout" type="date"  value="<?php echo $result['CheckOut']  ?>"class="form-control">

    </div>
        <div class="form-group">
          <input type="submit"name="update" class="btn btn-info" value="Update" id="refreshpage">
        </div>
      </form>
    </div>
  </body>

  
</html>

<?php

$fname= $lname= $email=$phone=$nation=$troom=$bed=$nroom=$meat=$cin=$cout='';
      if(isset($_POST['update'])){
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
     
        $query="UPDATE reservation set Firstname='$fname',Lastname='$lname',Email='$email',Phone='$phone',Nation='$nation',Roomtype='$troom',Bed='$bed',Noofrooms='$nroom',Meat='$meat',CheckIn='$cin',CheckOut='$cout' WHERE RENO='$id'";
      $data=mysqli_query($con,$query);
      if($data){
        echo "<script>alert('Record Updated')</script>";
        echo "recorde updated";
        echo "<meta http-equiv = 'refresh' content = '0; url = http://localhost/db_pro/display_records/display.php' />";
       
      }
      else{
        echo"failed";
      }
    }
      
?>

