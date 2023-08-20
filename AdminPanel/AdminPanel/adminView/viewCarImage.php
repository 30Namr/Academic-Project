
<div>
  <h2>Car Images</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Sr.No.</th>
        <th class="text-center">Car Name</th>
        <th class="text-center">Car Images 1</th>
        <th class="text-center">Car Images 2</th>
        <th class="text-center">Car Images 3</th>
        <th class="text-center">Car Images 4</th>
        <th class="text-center">Car Images 5</th>
        <th class="text-center">Car Images 6</th>
        <th class="text-center">Car Images 7</th>
        <th class="text-center">Car Images 8</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `car_image`, `car_stock` WHERE car_image.car_id=car_stock.car_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
      <tr>
        <td><?=$count?></td>
        <td><?=$row["car_name"]?></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_1"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_2"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_3"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_4"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_5"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_6"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_7"]); ?>"></td>
        <td><img height='53px' src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row["carimage_8"]); ?>"></td>
        <td><button class="btn btn-danger" style="height:40px" onclick="carImageDelete('<?=$row['carimage_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Car Image
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Car Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addCarImage()" method="POST">
            <div class="form-group">
              <label for="name">Car Name:</label>
              <select id="carid" >
                <option disabled selected>Select Car Name</option>
                <?php
                  $sql="SELECT * FROM `car_stock`";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['car_id']."'>".$row['car_id']."\n||\n".$row['car_name']."\n||\n".$row['car_model']."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="car_file1">Choose Car Image 1:</label>
                <input type="file" class="form-control-file" id="files1">
            </div>
            <div class="form-group">
                <label for="car_file2">Choose Car Image 2:</label>
                <input type="file" class="form-control-file" id="files2">
            </div>
            <div class="form-group">
                <label for="car_file3">Choose Car Image 3:</label>
                <input type="file" class="form-control-file" id="files3">
            </div>
            <div class="form-group">
                <label for="car_file4">Choose Car Image 4:</label>
                <input type="file" class="form-control-file" id="files4">
            </div>
            <div class="form-group">
                <label for="car_file5">Choose Car Image 5:</label>
                <input type="file" class="form-control-file" id="files5">
            </div>
            <div class="form-group">
                <label for="car_file6">Choose Car Image 6:</label>
                <input type="file" class="form-control-file" id="files6">
            </div>
            <div class="form-group">
                <label for="car_file7">Choose Car Image 7:</label>
                <input type="file" class="form-control-file" id="files7">
            </div>
            <div class="form-group">
                <label for="car_file8">Choose Car Image 8:</label>
                <input type="file" class="form-control-file" id="files8">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Car Images</button>
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