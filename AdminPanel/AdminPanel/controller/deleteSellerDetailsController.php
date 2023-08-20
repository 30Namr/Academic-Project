<?php

    include_once "../config/dbconnect.php";
    
    $sell_id=$_POST['record'];
    $query="DELETE FROM `sell_your_car` WHERE `seller_id`='$sell_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Seller Details Deleted Successfully";
    }
    else{
        echo"Not Able To Delete";
    }
    
?>