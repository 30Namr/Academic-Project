<?php

    include_once "../config/dbconnect.php";
    
    $b_id=$_POST['record'];
    $query="DELETE FROM `brand` WHERE `brand_id`='$b_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo "Brands Deleted Successfully";
    }
    else{
        echo "Not Able To Delete";
    }
    
?>