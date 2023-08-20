<?php

    include_once "../config/dbconnect.php";
    
    $i_id=$_POST['record'];
    $query="DELETE FROM `insurance_guide` WHERE `insurance_id`='$i_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo "Insurance Details Deleted Successfully";
    }
    else{
        echo "Not Able To Delete";
    }
    
?>