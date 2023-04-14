<?php

include 'connection.php';

$city_id = $_POST['city_data'];

    $spot = "SELECT * FROM tmedium WHERE DestinationID = {$city_id};";
    $runspot = mysqli_query($conn, $spot) or die("Spot Query Not Run");

    $output = '<option value="">--Select TMedium--</option>';

    while($row = mysqli_fetch_assoc($runspot)){

        $output.= '<option value="'.$row['TM_ID'].'">'. $row['TM_Name'].'='.$row['D_Cost'].'</option>';

    }

    echo $output;

?>