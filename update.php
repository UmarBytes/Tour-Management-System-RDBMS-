<?php

    include 'config.php';

    $tid = $_REQUEST['TouristID'];
    $name  = $_REQUEST['fname'];
    $age  = $_REQUEST['age'];
    $phone = $_REQUEST['phone'];
    $email  = $_REQUEST['email'];
    $pas  = $_REQUEST['pas'];


    $slq = "UPDATE tourist SET T_name ='{$name}',Email ='{$email}',Password ='{$pas}',PhoneNO ='{$phone}',age ='{$age}' WHERE TouristID = '{$tid}';";

    $result = mysqli_query($conn,$slq) or die("Update Query Not Run");

    if($result){
        header("Location: edit.php?sucess=Your account has been Created Successfully");
        
            header("Location: index.php");
            mysqli_close($conn);
        }
?>