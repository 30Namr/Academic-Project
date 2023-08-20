<?php

    include_once "../config/dbconnect.php";
    
    $m_id=$_POST['record'];
    $query="DELETE FROM `message` WHERE `message_id`='$m_id'";
    
    $data=mysqli_query($conn,$query);

    if($data){
        echo"Message Details Deleted Successfully";
    }
    else{
        echo"Not Able To Delete";
    }
    
?>