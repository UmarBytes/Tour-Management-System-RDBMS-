<?php
include 'header.php';

$conn = mysqli_connect("localhost","root","","tour") or die("Mysql Not Connect");

$budgt = $_POST['budget']; 
$days = $_POST['days'];
$destination = $_POST['city'];

?>
<div id="main-content">
    <h2>All Records</h2>
    <?php

        $conn = mysqli_connect("localhost","root","","tour") or die("Mysql Not Connect");
        $sql = "SELECT p.DestinationID,p.SpotID,p.RestaurantID,p.TM_ID, d.DestinationName,
                fs.SpotName, h.HotelName, r.RestaurantName,t.TM_Name,
                (fs.PerhedPrice+h.PerRoomCost+r.PerhedCost+t.D_Cost)*{$days} as 'Total Cost'
                FROM plan p NATURAL JOIN destination d 
                INNER JOIN famousspots fs ON(p.SpotID = fs.SpotID) 
                INNER JOIN restaurant r ON(p.RestaurantID = r.RestaurantID) 
                INNER JOIN tmedium t ON(p.TM_ID = t.TM_ID)
                INNER JOIN hotel h ON(p.HotelID = h.HotelID) 
                WHERE p.DestinationID = {$destination} AND 
                (fs.PerhedPrice+h.PerRoomCost+r.PerhedCost+t.D_Cost)*{$days} <= {$budgt};";
        $result = mysqli_query($conn,$sql) or die("SQL Qury Not RUN");

        if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="8px">
        <thead>
   
        <th>Destination Name</th>
        <th>Spot Name</th>
        <th>Hotel Name</th>
        <th>Restaurant Name</th>
        <th>TM_Name</th>
        <th>Total Cost Days=<?php echo $days;?></th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                
                <td><?php echo $row["DestinationName"] ?></td>
                <td><?php echo $row["SpotName"] ?></td>
                <td><?php echo $row["HotelName"] ?></td>
                <td><?php echo $row["RestaurantName"] ?></td>
                <td><?php echo $row["TM_Name"] ?></td>
                <td><?php echo $row["Total Cost"] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["DestinationID"] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["DestinationID"]; ?>&spotid=<?php echo $row["SpotID"] ?>&restorentID=<?php echo $row["RestaurantID"] ?>&TM_ID=<?php echo $row["TM_ID"] ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "NO RECODE FOUND:<br> Please Incrrease Budget or Decreas Days";
        echo "<br>Minum Budget 26000 for 1 day";
    } 
        mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
