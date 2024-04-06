<?php
include('db_connect.php');
$id=$_GET['id'];
$query="DELETE FROM food_form WHERE ordno='$id'";
$data=mysqli_query($con,$query);
if($data){
    echo "<script>alert('record deleted')</script>";
    echo "<meta http-equiv = 'refresh' content = '0; url = http://localhost/db_pro/display_records/food_display.php' />";
       
}
else{
    echo "failed to delete";
}

?>