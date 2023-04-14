<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
            if(isset($_POST['deletebtn'])){
                    include 'connection.php';

                    $id = $_REQUEST['sid'];

                    $slq = " DELETE FROM student WHERE `student`.`sid` = '$id' ";
                
                    $result = mysqli_query($conn,$slq) or die("Delete Query Not Run");
                
                    header("Location: http://localhost/crud/index.php");
                    mysqli_close($conn);

            }

    ?>

</div>
</div>
</body>
</html>
