<?php 
  
    $conn = mysqli_connect("localhost","root","","tour") or die("Mysql Not Connect");
    $id = $_GET['id'];
    $spotid = $_GET['spotid'];
    $restorentID = $_GET['restorentID'];
    $TM_ID = $_GET['TM_ID'];

    $slq = " DELETE FROM plan WHERE DestinationID = '{$id}' and SpotID='{$spotid}' and RestaurantID='{$restorentID}' and TM_ID='{$TM_ID}'";

    $result = mysqli_query($conn,$slq) or die("Delete Query Not Run");


    echo"Delete Successfully!!!";
    mysqli_close($conn);
    die();

?>