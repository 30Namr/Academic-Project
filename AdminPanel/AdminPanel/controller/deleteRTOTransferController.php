<?php

    include_once "../config/dbconnect.php";
    
    $r_id=$_POST['record'];
    $query="DELETE FROM `rto_transfer` WHERE `rtotransfer_id`='$r_id'";
    $data=mysqli_query($conn,$query);

    if($data){
        echo"RTO Transfer Successfully Deleted";
    }
    else{
        echo"Not Able To Delete";
    }
    
?>