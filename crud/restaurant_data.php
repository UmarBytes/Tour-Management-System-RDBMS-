<?php

include 'connection.php';

$city_id = $_POST['city_data'];

    $spot = "SELECT * FROM restaurant WHERE DestinationID = {$city_id};";
    $runspot = mysqli_query($conn, $spot) or die("Spot Query Not Run");

    $output = '<option value="">--Select Restaurant--</option>';

    while($row = mysqli_fetch_assoc($runspot)){

        $output.= '<option value="'.$row['RestaurantID'].'">'. $row['RestaurantName'].'</option>';

    }

    echo $output;

?>