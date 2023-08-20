
<div >
  <h2>Message Us</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Sr.No.</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Email Id</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Message</th>
        <th class="text-center">Date & Time Entry</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `message`";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["full_name"]?></td>
      <td><?=$row["email_id"]?></td>
      <td><?=$row["contact_no"]?></td>
      <td><?=$row["message"]?></td>
      <td><?=$row["registered_at"]?></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="messageUsDelete('<?=$row['message_id']?>')">Delete</button></td>
    </tr>
    <?php
          $count=$count+1;
        }
      }
    ?>
  </table>
</div>
   