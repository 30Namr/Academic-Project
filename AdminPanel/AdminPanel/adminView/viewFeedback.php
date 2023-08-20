
<div >
  <h2>Feedback</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Sr.No.</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Opinion</th>
        <th class="text-center">Rated Us</th>
        <th class="text-center">Date & Time Entry</th>
        <th class="text-center" colspan="1">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `feedback`";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["full_name"]?></td>
      <td><?=$row["opinion"]?></td>
      <td style="width: 16%">
      <?php
        $rating = $row["rated_us"];
        if($rating == 1)
        {
      ?>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <?php
        } elseif($rating == 2) {
      ?>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <?php
        } elseif($rating == 3) {
      ?>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <?php
        } elseif($rating == 4) {
      ?>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
      <?php
        } elseif($rating == 5) {
      ?>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      <?php
          }
      ?>
      </td>
      <td><?=$row["registered_at"]?></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="feedbackDelete('<?=$row['feedback_id']?>')">Delete</button></td>
    </tr>
    <?php
          $count=$count+1;
        }
      }
    ?>
  </table>
</div>
   