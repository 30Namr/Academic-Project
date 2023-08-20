<?php

    include_once "../config/dbconnect.php";
    
    $car_id=$_POST['record'];
    $query="DELETE FROM `car_stock` WHERE `car_id`='$car_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Car Items Deleted Successfully";
    }
    else{
        echo"Not Able To Delete";
    }
    
?>