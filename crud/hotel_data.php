<?php

include 'connection.php';

$city_id = $_POST['city_data'];

    $spot = "SELECT * FROM hotel WHERE DestinationID = {$city_id};";
    $runspot = mysqli_query($conn, $spot) or die("Spot Query Not Run");

    $output = '<option value="">--Select hotel--</option>';

    while($row = mysqli_fetch_assoc($runspot)){

        $output.= '<option value="'.$row['HotelID'].'">'. $row['HotelName'].'</option>';

    }

    echo $output;

?>