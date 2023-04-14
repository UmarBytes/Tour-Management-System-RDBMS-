<?php   
    session_start();
 include 'config.php';

   if(isset($_POST['email']) && isset($_POST['pas'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['pas']);

        if(empty($email)){
            header("Location: start.php?error=Email is Required");
            exit();
        }else if(empty($pass)){
            header("Location: start.php?error=password is Required");
            exit();
        
        }else{

            $sql = "SELECT * FROM tourist WHERE Email = '{$email}' AND Password = '{$pass}'";
            $result = mysqli_query($conn, $sql) or die("Login Qury Not Run ");

            if(mysqli_num_rows($result) === 1){

                $row = mysqli_fetch_assoc($result);
                if($row['Email'] == $email && $row['Password'] == $pass){

                    $_SESSION['T_name'] = $row['T_name'];
                    $_SESSION['TouristID '] = $row['TouristID'];
                    $_SESSION['Email'] = $row['Email'];

                    header("Location: index.php");
                    exit();  

                }else{
                    header("Location: start.php?error=Incorect Email or password");
                    exit();    
                }
                
            }else{

                header("Location: start.php?error=Incorect Email or password");
                exit();

            }

        }


   }else{
    header("Location: start.php");
    exit();
   }

?>