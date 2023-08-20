<div >
  <h2>Show Interest</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Sr.No.</th>
        <th class="text-center">Full Name </th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Car Name</th>
        <th class="text-center">Car Model</th>
        <th class="text-center">Year</th>
        <th class="text-center">Price</th>
        <th class="text-center">Date & Time Entry</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `show_interest`";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
        
    ?>  
    <tr>
      <td><?=$count?></td>
      <td><?=$row["full_name"]?></td>
      <td><?=$row["contact_no"]?></td>
      <td><?=$row["car_name"]?></td>
      <td><?=$row["car_model"]?></td>
      <td><?=$row["car_year"]?></td>
      <td><?=$row["car_price"]?></td>
      <td><?=$row["registered_at"]?></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="showInterestDelete('<?=$row['showinterest_id']?>')">Delete</button></td>
    </tr>
    <?php
          $count=$count+1; 
        }
      }
    ?>
  </table>
</div>  