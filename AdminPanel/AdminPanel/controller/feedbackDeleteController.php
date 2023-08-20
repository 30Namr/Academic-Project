<?php

    include_once "../config/dbconnect.php";
    
    $f_id=$_POST['record'];
    $query="DELETE FROM `feedback` WHERE `feedback_id`='$f_id'";
    
    $data=mysqli_query($conn,$query);

    if($data){
        echo "Feedback Details Deleted Successfully";
    }
    else{
        echo "Not Able To Delete";
    }
    
?>