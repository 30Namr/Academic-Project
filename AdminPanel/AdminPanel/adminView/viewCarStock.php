
<div>
  <h2>Car Stock</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Sr.No.</th>
        <th class="text-center">Car Image</th>
        <th class="text-center">Car Name</th>
        <th class="text-center">Car Model</th>
        <th class="text-center">Year</th>
        <th class="text-center">Owner (1st/2nd)</th>
        <th class="text-center">Fuel Type</th>
        <th class="text-center">Kilometer Driven</th>
        <th class="text-center">Transmission</th>
        <th class="text-center">Price</th>
        <th class="text-center">Insurance</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `car_stock`, `brand` WHERE car_stock.brand_id=brand.brand_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
      <tr>
        <td><?=$count?></td>
        <td><img height='63px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["car_image"]); ?>" /></td>
        <td><?=$row["car_name"]?></td>
        <td><?=$row["car_model"]?></td>
        <td><?=$row["year"]?></td>      
        <td><?=$row["owner"]?></td> 
        <td><?=$row["fuel_type"]?></td>  
        <td><?=$row["kilo_driven"]?></td>
        <td><?=$row["transmission"]?></td>
        <td><?=$row["price"]?></td>
        <td><?=$row["insurance"]?></td>
        <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['car_id']?>')">Edit</button></td>
        <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['car_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Car Item
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Car Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Car Name:</label>
              <input type="text" class="form-control" id="c_name" required>
            </div>
            <div class="form-group">
              <label for="model">Car Model:</label>
              <input type="text" class="form-control" id="c_model" required>
            </div>
            <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" class="form-control" id="c_year" required>
            </div>
            <div class="form-group">
              <label for="owner">Owner (1st/2nd):</label>
              <input type="text" class="form-control" id="c_owner" required>
            </div>
            <div class="form-group">
              <label for="fueltype">Fuel Type:</label>
              <input type="text" class="form-control" id="c_fueltype" required>
            </div>
            <div class="form-group">
              <label for="kilometer">Kilometer Driven:</label>
              <input type="text" class="form-control" id="c_driven" required>
            </div>
            <div class="form-group">
              <label for="transmission">Transmission:</label>
              <input type="text" class="form-control" id="c_transmission" required>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="text" class="form-control" id="c_price" required>
            </div>
            <div class="form-group">
              <label for="insurance">Insurance:</label>
              <input type="text" class="form-control" id="c_insurance" required>
            </div>
            <div class="form-group">
              <label>Car Brand:</label>
              <select id="brand" required>
                <option disabled selected>Select Brand</option>
                <?php
                  $sql="SELECT * FROM `brand`";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['brand_id']."'>".$row['brand_name'] ."</option>";
                    }
                  } 
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="car_file">Choose Car Image:</label>
                <input type="file" class="form-control-file" id="file" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Car Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>