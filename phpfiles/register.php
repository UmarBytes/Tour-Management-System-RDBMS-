<?php

    include 'db.php';

if(isset($_POST['submit'])){

   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $pass = $_REQUEST['password'];
   $cpass = $_REQUEST['cpassword'];
//    $user_type = $_POST['user_type'];

   $select = " SELECT * FROM userinfo WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO userinfo(name, email, password, cpassword)
          VALUES('$name','$email','$pass','$cpass')";
         mysqli_query($conn, $insert);
         header('location:loginPHP.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="DBMSPRO/cssfiles/styleur.css">

</head>
<body>
   
<div class="form">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="loginPHP.php">login now</a></p>
   </form>

</div>

</body>
</html>