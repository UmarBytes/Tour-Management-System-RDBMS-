 <?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php

            if(isset($_POST['showbtn'])){
                include 'connection.php';

                $stid = $_REQUEST['sid'];
            
                $sql01 = "SELECT * FROM student WHERE sid = {$stid}";
            
                $result = mysqli_query($conn,$sql01) or dir("Qury Not Run");
            
                if(mysqli_num_rows($result)>0){
                    while($row =  mysqli_fetch_assoc($result)){
    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row["sid"] ?>" />
            <input type="text" name="sname" value="<?php echo $row["sname"] ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row["address"] ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass">
        <?php 
                include 'connection.php';
                $sql02 = "SELECT * FROM `studentclass`";
                $result01 = mysqli_query($conn,$sql02) or die("Select Qury Not Run");
                while($row01 = mysqli_fetch_assoc($result01)){

                    if($row['sclass'] == $row01['cid']){
                        $selected = "selected";
                    }else{
                        $selected = "";
                    }
                ?>
            <option value="<?php echo $row01["cid"] ?>"><?php echo $row01["cname"] ?></option>
            <?php } ?>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row["sphone"] ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php
            }
        }
    }

    ?>
</div>
</div>
</body>
</html>
