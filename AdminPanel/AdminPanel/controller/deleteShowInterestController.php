<?php

    include_once "../config/dbconnect.php";
    
    $s_id=$_POST['record'];
    $query="DELETE FROM `show_interest` WHERE `showinterest_id`='$s_id'";
    $data=mysqli_query($conn,$query);

    if($data){
        echo "Show Interest Successfully Deleted";
    }
    else{
        echo "Not Able To Delete";
    }
    
?>