<?php


    include 'db.php';

session_start();

if(isset($_POST['submit'])){

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
//    $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

    //   if($row['user_type'] == 'admin'){

    //      $_SESSION['admin_name'] = $row['name'];
    //      header('location:admin_page.php');

    //   }elseif($row['user_type'] == 'user'){

    //      $_SESSION['user_name'] = $row['name'];
    //      header('location:user_page.php');

    //   }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};

?>
