<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $CarName = $_POST['c_name'];
        $CarModel = $_POST['c_model'];
        $Year = $_POST['c_year'];
        $Owner = $_POST['c_owner'];
        $FuelType = $_POST['c_fueltype'];
        $Kilometer = $_POST['c_driven'];
        $Transmission = $_POST['c_transmission'];
        $Price = $_POST['c_price'];
        $Insurance = $_POST['c_insurance'];
        $Brand = $_POST['brand'];

        $name = $_FILES['file']['name'];
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');

        if(in_array($ext, $valid_extensions)) {
            $temp = $_FILES['file']['tmp_name'];
            $final_image = addslashes(file_get_contents($temp));
        }
        else {
            echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & WEBP files are allowed to upload.")</script>';
        }

        $insert = mysqli_query($conn,"INSERT INTO `car_stock`(`car_name`, `car_model`, `year`, `car_image`, `price`, `owner`, `fuel_type`, `kilo_driven`, `transmission`, `insurance`, `brand_id`) VALUES ('$CarName','$CarModel','$Year','$final_image','$Price','$Owner','$FuelType','$Kilometer','$Transmission','$Insurance','$Brand')");
        if($insert) {
            echo "Car Details Added Successfully.";
        } else {
            echo mysqli_error($conn);
        }
    }
        
?>