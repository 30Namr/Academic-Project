<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $car_id=$_POST['car_id'];
        $CarName = $_POST['c_name'];
        $CarModel = $_POST['c_model'];
        $Year = $_POST['c_year'];
        $Owner = $_POST['c_owner'];
        $FuelType = $_POST['c_fueltype'];
        $Kilometer = $_POST['c_driven'];
        $Transmission = $_POST['c_transmission'];
        $Price = $_POST['c_price'];
        $Insurance = $_POST['c_insurance'];
        $Brand= $_POST['brand'];
        
        $img_file = $_FILES['newImage']['name'];
        $ext = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');
        if(!empty($img_file)) {
            if(in_array($ext, $valid_extensions)) {
                $tmp_file = $_FILES['newImage']['tmp_name'];
                $final_image = addslashes(file_get_contents($tmp_file));
            }
            else {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & WEBP files are allowed to upload.")</script>';
            }

            $updateItem = mysqli_query($conn,"UPDATE `car_stock` SET `car_name`='$CarName',`car_model`='$CarModel',`year`='$Year',`car_image`='$final_image',`price`='$Price',`owner`='$Owner',`fuel_type`='$FuelType',`kilo_driven`='$Kilometer',`transmission`='$Transmission',`insurance`='$Insurance',`brand_id`='$Brand' WHERE `car_id`='$car_id'");
            if($updateItem) {
                echo "Car Details Updated Successfully.";
            } else {
                echo mysqli_error($conn);
            }
        } else {
            $updateItem = mysqli_query($conn,"UPDATE `car_stock` SET `car_name`='$CarName',`car_model`='$CarModel',`year`='$Year',`price`='$Price',`owner`='$Owner',`fuel_type`='$FuelType',`kilo_driven`='$Kilometer',`transmission`='$Transmission',`insurance`='$Insurance',`brand_id`='$Brand' WHERE `car_id`='$car_id'");
            if($updateItem) {
                echo "Car Details Updated Successfully.";
            } else {
                echo mysqli_error($conn);
            }
        }
        

    }
?>