<?php

    include 'config.php';
    $email = $_GET['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DAC TOUR Update </title>
<link href="cssfiles/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="form.css">
</head>
<body>
	<!-- Video -->
        <div class="main">
            <video autoplay loop muted>
                <source src="0001_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            
              <div class="formBox">
              <form action="update.php" method="POST">
              <?php
                    $sql = "SELECT * FROM `tourist` WHERE Email = '{$email}';";
                    $result = mysqli_query($conn,$sql) or dir("Qury Not Run");

                    if(mysqli_num_rows($result)>0){
                        $row = mysqli_fetch_assoc($result);
                ?>

                    <h2>Edit Profile</h2>
                    <?php if(isset($_GET['error'])) {  ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }  ?>
                    <?php if(isset($_GET['sucess'])) {  ?>
                        <p class="sucess"><?php echo $_GET['sucess']; ?></p>
                    <?php }  ?>
                    <label>TouristID</label>
                    <input type="text" name="TouristID" value="<?php echo $row['TouristID']; ?>">
                    <label>Full Name</label>
                    <input type="text" name="fname" value="<?php echo $row['T_name']; ?>">
                    <label>Age</label>
                    <input type="number" name="age" value="<?php echo $row['age']; ?>">
                    <label>Phone Number</label>
                    <input type="number" name="phone" value="<?php echo $row['PhoneNO']; ?>">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $row['Email']; ?>">

                    <label>Password</label>
                    <input type="password" name="pas" value="<?php echo $row['Password']; ?>">
                    <label>Re Password</label>
                    <input type="password" name="rpas" value="<?php echo $row['Password']; ?>">
                    <button class="sutn" type="submit"> Update </button>
                    <br>
                    <?php }else{
                        echo "Multi Value Include";
                    } ?>
              </form>
              </div>
        </div>

<!--inpage styling-->

</body>
</html>