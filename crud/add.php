<?php include 'header.php'; 

    include 'connection.php';

    $contry = "SELECT * FROM destination;";
    $run = mysqli_query($conn,$contry) or die("Contruy Query Not Run : ");


?>
<div id="main-content">
    <h2>Make Your Own Plan </h2>

    
    <!-- Form Start -->
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Choies Destination</label>
            <select name="city" id="city" required>
                <option value="">--Select City--</option>
                <?php
                    while($row = mysqli_fetch_assoc($run)){
                ?>
                    <option value="<?php echo $row['DestinationID'] ?>"><?php echo $row['DestinationName'] ?></option>
                   <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Spots on this city</label>
            <select name="spot" id="spot" required>
                <option value="">--Select Spot--</option>
            </select>
        </div>
        <div class="form-group">
            <label>Hotel in this city</label>
            <select name="hotel" id="hotel" required>
                <option value="">--Select Hotel--</option>
            </select>
        </div>
        <div class="form-group">
            <label>Restaurant</label>
            <select name="restaurant" id="restaurant" required>
                <option value="">--Select Restaurant--</option>
            </select>
        </div>
        <div class="form-group">
            <label>Transport Medium</label>
            <select name="tmedium" id="tmedium" required>
                <option value="">--Select Restaurant--</option>
            </select>
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
    <!-- Form End -->
</div>
</div>
<script type="text/javascript" src="jquery.js" ></script>
<script>
// Destination and spots

$('#city').on('change', function(){

    var city_id = this.value; 
    $.ajax({

        url: 'City_data.php',
        type: "POST",
        data:{
            city_data: city_id
        },
        success: function(result){
            $('#spot').html(result);
            console.log(result);
        }

    })

});

// Hotels 

$('#city').on('change', function(){

var city_id = this.value; 
$.ajax({

    url: 'hotel_data.php',
    type: "POST",
    data:{
        city_data: city_id
    },
    success: function(data){
        $('#hotel').html(data);
        console.log(data);
    }

})

});
// restaurant

$('#city').on('change', function(){

var city_id = this.value; 
$.ajax({

    url: 'restaurant_data.php',
    type: "POST",
    data:{
        city_data: city_id
    },
    success: function(data01){
        $('#restaurant').html(data01);
        console.log(data01);
    }

})

});

// tmedium

$('#city').on('change', function(){

var city_id = this.value; 
$.ajax({

    url: 'tmedium_data.php',
    type: "POST",
    data:{
        city_data: city_id
    },
    success: function(data02){
        $('#tmedium').html(data02);
        console.log(data02);
    }

})

});
</script>
</body>
</html>
