
<?php

    session_start();
    if( isset($_SESSION['Email']) && isset($_SESSION['T_name'])){
        header("Location: index.php");
        exit();  
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DAC TOUR MANAGEMENT </title>
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
              <form action="FSignUp.php" method="POST">
                    <h2>SIGN UP</h2>
                    <?php if(isset($_GET['error'])) {  ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }  ?>
                    <?php if(isset($_GET['sucess'])) {  ?>
                        <p class="sucess"><?php echo $_GET['sucess']; ?></p>
                    <?php }  ?>
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name">
                    <label>Age</label>
                    <input type="number" name="age" placeholder="Age">
                    <label>Phone Number</label>
                    <input type="number" name="phone" placeholder="Age">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="DAC@gmail.com">

                    <label>Password</label>
                    <input type="password" name="pas" placeholder="password">
                    <label>Re Password</label>
                    <input type="password" name="rpas" placeholder="Re password">
                    <button type="submit"> SIGN UP </button>
                    <br>
                    <p><a href="start.php">Login</a> If You have account</p>
              </form>
              </div>
        </div>

<!--inpage styling-->

</body>
</html>