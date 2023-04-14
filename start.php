
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
              <form action="Flogin.php" method="POST">
                    <h2>Login</h2>
                    <?php if(isset($_GET['error'])) {  ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }  ?>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="DAC@gmail.com">

                    <label>Password</label>
                    <input type="password" name="pas" placeholder="password">
                    <button type="submit"> Login </button>
                    <br>
                    <p><a href="create.php">CREATE</a> If You don't have account</p>
              </form>
              </div>
        </div>

<!--inpage styling-->

</body>
</html>