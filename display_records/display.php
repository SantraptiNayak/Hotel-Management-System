<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    



<?php
include("db_connect.php");

error_reporting(0);    //hides all the errors
$query="SELECT * FROM reservation";
$data=mysqli_query($con,$query);


$total=mysqli_num_rows($data);
// echo "$total";   //prints the no of records in reservation table
 







if($total !=0){

    ?>
    <h1 align="center">YOUR ROOM ORDER</h1>
    <table border="1px " width="85%" cellspacing=5 align="center">
        <tr>
            <th>ReservationNO</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Nation</th>
        <th>Roomtype</th>
        <th>Bed</th>
        <th>Noofrooms</th>
        <th>Meat</th>
        <th>CheckIn</th>
        <th>CheckOut</th>
        <th>Operations</th>
        </tr>
    

    <?php
//   $result=mysqli_fetch_assoc($data);  //this function stores all the values in an array format
  // echo $result;
// the below line prints the first record in reservation table
// echo "$result[Firstname]"." ". "$result[Lastname]"." ". "$result[Email]"." "."$result[Phone]" ." "."$result[Nation]" ." "."$result[Typesofrooms]" ." "."$result[Noofrooms]" ." ". "$result[Meat]"." "."$result[CheckIn]"." "."$result[CheckOut]";

    while(($result=mysqli_fetch_assoc($data))){
    echo "<tr>
        <td>$result[RENO]</td>
        <td>$result[Firstname]</td>
        <td>$result[Lastname]</td>
        <td>$result[Email]</td>
        <td>$result[Phone]</td>
        <td>$result[Nation]</td>
        <td>$result[Roomtype]</td>
        <td>$result[Bed]</td>
        <td>$result[Noofrooms]</td>
        <td>$result[Meat]</td>
        <td>$result[CheckIn]</td>
        <td>$result[CheckOut]</td>
        <td><button><a href='update.php?id=$result[RENO]'><input type='submit' value='update'></a></button>
        <button><a href='delete.php?id=$result[RENO]'><input type='submit' value='delete' onclick='return checkdelete()'></a></button></td>
        
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
