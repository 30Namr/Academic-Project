<?php

    include_once "../config/dbconnect.php";
    
    $carimg_id=$_POST['record'];
    $query="DELETE FROM `car_image` WHERE `carimage_id`='$carimg_id'";
    
    $data=mysqli_query($conn,$query);

    if($data){
        echo "Car Images Deleted Successfully";
    }
    else{
        echo "Not Able To Delete";
    }
    
?>