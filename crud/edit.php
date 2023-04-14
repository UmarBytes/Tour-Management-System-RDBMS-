<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

   $conn = mysqli_connect("localhost","root","","tour") or die("Mysql Not Connect");

    $stid = $_GET['id'];

    $sql01 = "SELECT p.DestinationID, d.DestinationName, fs.SpotName, h.HotelName, r.RestaurantName,t.TM_Name,
    (fs.PerhedPrice+h.PerRoomCost+r.PerhedCost+t.D_Cost) as 'Total Cost'
    FROM plan p NATURAL JOIN destination d 
    INNER JOIN famousspots fs ON(p.SpotID = fs.SpotID) 
    INNER JOIN restaurant r ON(p.RestaurantID = r.RestaurantID) 
    INNER JOIN tmedium t ON(p.TM_ID = t.TM_ID)
    INNER JOIN hotel h ON(p.HotelID = h.HotelID) 
    WHERE p.DestinationID = {$stid};";

    $result = mysqli_query($conn,$sql01) or dir("Qury Not Run");

    if(mysqli_num_rows($result)>0){
        while($row =  mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="" method="post">
      <div class="form-group">
          <label>Mediam Name</label>
          <input type="hidden" name="sid" value="<?php echo $row["DestinationID"] ?>"/>
          <input type="text" name="sname" value="<?php echo $row["TM_Name"] ?>"/>
          <label>Spot Name</label>
          <input type="text" name="sname" value="<?php echo $row["SpotName"] ?>"/>
          <label>Hotel Name</label>
          <input type="text" name="sname" value="<?php echo $row["HotelName"] ?>"/>
      </div>
      <div class="form-group">
          <label>Restaurant Name</label>
          <input type="text" name="saddress" value="<?php echo $row["RestaurantName"] ?>"/>
      </div>
      <div class="form-group">
          <label>Destination Name</label>
          <select name="sclass">
              <?php 
                include 'connection.php';
                $sql02 = "SELECT * FROM `destination`";
                $result01 = mysqli_query($conn,$sql02) or die("Select Qury Not Run");
                while($row01 = mysqli_fetch_assoc($result01)){
                ?>    
                <option <?php echo $selected; ?> value="$row[p.DestinationID]"><?php echo $row01["DestinationName"] ?></option>

                <?php } ?>
          </select>
      </div>
      <div class="form-group">
          <label>Total</label>
          <input type="text" name="sphone" value=""/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }} ?>
</div>
</div>
</body>
</html>
