<?php

    include_once "../config/dbconnect.php";
    
    $f_id=$_POST['record'];
    $query="DELETE FROM `finance_guide` WHERE `finance_id`='$f_id'";
    $data=mysqli_query($conn,$query);

    if($data){
        echo "Finance Details Deleted Successfully";
    }
    else{
        echo "Not Able To Delete";
    }
    
?>