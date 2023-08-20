
<div>
  <h2>Sell Your Car</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Sr.No.</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Contact No.</th>
        <th class="text-center">Brand</th>
        <th class="text-center">Year</th>
        <th class="text-center">Model</th>
        <th class="text-center">Fuel Type</th>
        <th class="text-center">Kilometer Driven</th>
        <th class="text-center">Transmission</th>
        <th class="text-center">Date & Time Entry</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `sell_your_car`";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){  
        while ($row=$result-> fetch_assoc()) {
    ?>
      <tr>
        <td><?=$count?></td>
        <td><?=$row["full_name"]?></td>
        <td><?=$row["contact_no"]?></td>      
        <td><?=$row["brand_name"]?></td> 
        <td><?=$row["year"]?></td>  
        <td><?=$row["model_name"]?></td>  
        <td><?=$row["fuel_type"]?></td>
        <td><?=$row["kilo_driven"]?></td>  
        <td><?=$row["transmission"]?></td>
        <td><?=$row["uploaded_date"]?></td>
        <td><button class="btn btn-danger" style="height:40px" onclick="sellCarDelete('<?=$row['seller_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table> 
</div>