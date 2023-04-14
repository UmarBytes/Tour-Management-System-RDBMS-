<?php

    include 'connection.php';

    $id  = $_REQUEST['sid'];
    $name  = $_REQUEST['sname'];
    $address  = $_REQUEST['saddress'];
    $class  = $_REQUEST['sclass'];
    $phone  = $_REQUEST['sphone'];


    $slq = "UPDATE tourist SET TouristI`='[value-1]',T_name='[value-2]',Emai`='[value-3]',Password='[value-4]',PhoneNO='[value-5]',age='[value-6]' WHERE Email = 'usa@gmail.com'; ";

    $result = mysqli_query($conn,$slq) or die("Update Query Not Run");

    if($result2){
    header("Location: edit.php?sucess=Your account has been Created Successfully");
    
        header("Location: index.php");
        mysqli_close($conn);
        exit();
    }
?>