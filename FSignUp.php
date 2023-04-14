<?php   
    session_start();
 include 'config.php';

   if(isset($_POST['fname']) && isset($_POST['lname'] ) && isset($_POST['email']) && isset($_POST['pas'] ) && isset($_POST['rpas'] )){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['fname']." ".$_POST['lname']);
    $age = validate($_POST['age']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['pas']);
    $repass = validate($_POST['rpas']);

        if(empty($email)){
            header("Location: create.php?error=Email is Required");
            exit();
        }else if(empty($pass)){
            header("Location: create.php?error=password is Required");
            exit();
        }else if(empty($repass)){
            header("Location: create.php?error=Re-password is Required");
            exit();
        }else if(empty($name)){
            header("Location: create.php?error=Name is Required");
            exit();
        }else if(empty($age)){
            header("Location: create.php?error=age is Required");
            exit();
        }else if(empty($phone)){
            header("Location: create.php?error=Phone is Required");
            exit();
        }else if($pass !== $repass){
            header("Location: create.php?error=Pasword Not Match is Required");
            exit();
        }else{

            $sql = "SELECT * FROM tourist WHERE Email = '{$email}' AND Password = '{$pass}'";
            $result = mysqli_query($conn, $sql) or die("Login Qury Not Run ");

            if(mysqli_num_rows($result) > 0){
                header("Location: create.php?error=This user or pasword alreadt Exist");
                exit();
            }else{

            $sql2 = "INSERT INTO tourist(T_name, Email, Password, PhoneNO, age) 
                    VALUES ('{$name}','{$email}',{$pass},{$phone},{$age});";
            $result2 = mysqli_query($conn, $sql2) or die("Login Qury Not Run ");

            if($result2){
            header("Location: create.php?sucess=Your account has been Created Successfully");
            exit();
            }else{
                header("Location: create.php?error=Unknown error occured");
                exit();
            }
        }
    }

   }else{
    header("Location: create.php");
    exit();
   }

?>