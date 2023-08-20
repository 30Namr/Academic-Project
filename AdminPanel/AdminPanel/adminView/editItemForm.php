
<div class="container p-5">

<h4>Edit Car Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	  $ID=$_POST['record'];
	  $qry=mysqli_query($conn, "SELECT * FROM `car_stock` WHERE `car_id`='$ID'");
	  $numberOfRow=mysqli_num_rows($qry);
	  if($numberOfRow>0){
		  while($row1=mysqli_fetch_array($qry)){
        $catID=$row1["brand_id"];
?>
<form id="update-Items" onsubmit="updateItems()" method="POST" enctype='multipart/form-data'>
	  <div class="form-group">
      <input type="text" class="form-control" id="car_id" value="<?=$row1['car_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Car Name:</label>
      <input type="text" class="form-control" id="c_name" value="<?=$row1['car_name']?>">
    </div>
    <div class="form-group">
      <label for="desc">Car Model:</label>
      <input type="text" class="form-control" id="c_model" value="<?=$row1['car_model']?>">
    </div>
    <div class="form-group">
      <label for="year">Year:</label>
      <input type="text" class="form-control" id="c_year" value="<?=$row1['year']?>">
    </div>
    <div class="form-group">
      <label for="owner">Owner (1st/2nd):</label>
      <input type="text" class="form-control" id="c_owner" value="<?=$row1['owner']?>">
    </div>
    <div class="form-group">
      <label for="fueltype">Fuel Type:</label>
      <input type="text" class="form-control" id="c_fueltype" value="<?=$row1['fuel_type']?>">
    </div>
    <div class="form-group">
      <label for="kilometer">Kilometer Driven:</label>
      <input type="text" class="form-control" id="c_driven" value="<?=$row1['kilo_driven']?>">
    </div>
    <div class="form-group">
      <label for="transmission">Transmission:</label>
      <input type="text" class="form-control" id="c_transmission" value="<?=$row1['transmission']?>">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="c_price" value="<?=$row1['price']?>">
    </div>
    <div class="form-group">
      <label for="insurance">Insurance:</label>
      <input type="text" class="form-control" id="c_insurance" value="<?=$row1['insurance']?>">
    </div>
    <div class="form-group">
      <label>Car Brand:</label>
      <select id="brand">
        <?php
          $sql="SELECT * FROM `brand` WHERE `brand_id`='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['brand_id'] ."'>" .$row['brand_name'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * FROM `brand` WHERE `brand_id`!='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['brand_id'] ."'>" .$row['brand_name'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src="data:image/jpeg;charset=utf8;base64,<?=base64_encode($row1["car_image"])?>">
         <div>
            <label for="file">Choose Car Image:</label>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" id="upload" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  </div>