<?php
   include_once "../config/dbconnect.php";

   if(isset($_POST['upload']))
   {
      $CarId = $_POST['carid'];

      $name1 = $_FILES['files1']['name'];
      $ext1 = strtolower(pathinfo($name1, PATHINFO_EXTENSION));

      $name2 = $_FILES['files2']['name'];
      $ext2 = strtolower(pathinfo($name2, PATHINFO_EXTENSION));

      $name3 = $_FILES['files3']['name'];
      $ext3 = strtolower(pathinfo($name3, PATHINFO_EXTENSION));

      $name4 = $_FILES['files4']['name'];
      $ext4 = strtolower(pathinfo($name4, PATHINFO_EXTENSION));

      $name5 = $_FILES['files5']['name'];
      $ext5 = strtolower(pathinfo($name5, PATHINFO_EXTENSION));

      $name6 = $_FILES['files6']['name'];
      $ext6 = strtolower(pathinfo($name6, PATHINFO_EXTENSION));

      $name7 = $_FILES['files7']['name'];
      $ext7 = strtolower(pathinfo($name7, PATHINFO_EXTENSION));

      $name8 = $_FILES['files8']['name'];
      $ext8 = strtolower(pathinfo($name8, PATHINFO_EXTENSION));

      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');

      if(in_array($ext1, $valid_extensions) && in_array($ext2, $valid_extensions) && in_array($ext3, $valid_extensions) && in_array($ext4, $valid_extensions) && in_array($ext5, $valid_extensions) && in_array($ext6, $valid_extensions) && in_array($ext7, $valid_extensions) && in_array($ext8, $valid_extensions)) {
         $temp1 = $_FILES['files1']['tmp_name'];
         $temp2 = $_FILES['files2']['tmp_name'];
         $temp3 = $_FILES['files3']['tmp_name'];
         $temp4 = $_FILES['files4']['tmp_name'];
         $temp5 = $_FILES['files5']['tmp_name'];
         $temp6 = $_FILES['files6']['tmp_name'];
         $temp7 = $_FILES['files7']['tmp_name'];
         $temp8 = $_FILES['files8']['tmp_name'];

         $finalImage1 = addslashes(file_get_contents($temp1));
         $finalImage2 = addslashes(file_get_contents($temp2));
         $finalImage3 = addslashes(file_get_contents($temp3));
         $finalImage4 = addslashes(file_get_contents($temp4));
         $finalImage5 = addslashes(file_get_contents($temp5));
         $finalImage6 = addslashes(file_get_contents($temp6));
         $finalImage7 = addslashes(file_get_contents($temp7));
         $finalImage8 = addslashes(file_get_contents($temp8));
      } else {
         echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & WEBP files are allowed to upload.")</script>';
      }

      $insert = mysqli_query($conn,"INSERT INTO `car_image`(`car_id`, `carimage_1`, `carimage_2`, `carimage_3`, `carimage_4`, `carimage_5`, `carimage_6`, `carimage_7`, `carimage_8`) VALUES ('$CarId','$finalImage1','$finalImage2','$finalImage3','$finalImage4','$finalImage5','$finalImage6','$finalImage7','$finalImage8')");
      if($insert) {
         echo '<script>alert("Car Images Added Successfully.")</script>';
      } else {
         echo mysqli_error($conn);
      }
   }
        
?>