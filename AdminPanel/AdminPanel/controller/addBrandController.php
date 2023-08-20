<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {  
        $brandname = $_POST['b_name'];
        $insert = mysqli_query($conn,"INSERT INTO `brand`(`brand_name`) VALUES ('$brandname')");
        
        if(!$insert)
        {
            echo mysqli_error($conn);
        }
        else
        {
            echo "Car Brands Added Successfully.";
        }
     
    }
        
?>