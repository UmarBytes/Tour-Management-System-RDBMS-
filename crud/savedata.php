<?php

include 'connection.php';

$desti = $_REQUEST["city"];
$Fspot = $_REQUEST["spot"];
$hotel = $_REQUEST["hotel"];
$restaurant = $_REQUEST["restaurant"];
$tmedium = $_REQUEST["tmedium"];


    $sql = "INSERT INTO `plan`(`DestinationID`, `SpotID`, `RestaurantID`, `TM_ID`, `HotelID`)
    VALUES ('{$desti}','{$Fspot}','{$hotel}','{$restaurant}','{$tmedium}')";


    if($conn->query($sql)===true){
        echo "New Recode add Sucessfully";
    }else{
        echo "Erroe".$conn->error;
    }

    //echo "<br>Add Plann Successfilly";

    mysqli_close($conn);

?>