<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="display.css"> -->
</head>
<body>



<?php
include("db_connect.php");

error_reporting(0);    //hides all the errors
$query="SELECT * FROM food_form";
$data=mysqli_query($con,$query);


$total=mysqli_num_rows($data);
// echo "$total";   //prints the no of records in reservation table
 







if($total !=0){

    ?>
    <h1 align="center">YOUR ROOM ORDER</h1>
    <table border="1px " width="85%" cellspacing=5 align="center">
        <tr>
            <th>Orderno</th>
        <th>Foodname</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        
        <th>Address</th>
       
        <th>Quantity</th>
       
        </tr>
    

    <?php
//   $result=mysqli_fetch_assoc($data);  //this function stores all the values in an array format
  // echo $result;
// the below line prints the first record in reservation table
// echo "$result[Firstname]"." ". "$result[Lastname]"." ". "$result[Email]"." "."$result[Phone]" ." "."$result[Nation]" ." "."$result[Typesofrooms]" ." "."$result[Noofrooms]" ." ". "$result[Meat]"." "."$result[CheckIn]"." "."$result[CheckOut]";

    while(($result=mysqli_fetch_assoc($data))){
    echo "<tr>
        <td>$result[ordno]</td>
        <td>$result[Foodname]</td>
        <td>$result[Firstname]</td>
        <td>$result[Lastname]</td>
        <td>$result[Email]</td>
        <td>$result[Phone]</td>
        
        <td>$result[Address]</td>
        <td>$result[Quantity]</td>
     <td>   <button><a href='food_delete.php?id=$result[ordno]'><input type='submit' value='delete' onclick='return checkdelete()'></a></button></td>
        
    </tr>";
    }
}
else{
    echo "table has no records";
}

?>
</table>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delte this data?');
    }
</script>
</body>
</html>
