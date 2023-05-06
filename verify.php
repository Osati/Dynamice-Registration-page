<?php
    require_once "config.php";
    
    $mesg ="";
    if(isset($_POST['submit'])){
        $submit_otp = $_POST['otp'];

        $verify= "SELECT * FROM admin_reg where otp='$submit_otp'";
        $query= mysqli_query($conn,$verify);
        $row=mysqli_fetch_assoc($query);

        if($row){
            header('location:registration.php');
            }
            else{
                $mesg="Not match your otp number";
                
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>verify page</title>
</head>
<body>
    <section class="header-container">
        <h1>Registration info</h1>
        <div class="row">
            <div class="formboby">
                <form action="" method='post'>
                    </br>
                    <label for="">Check Your Email id:</label></br></br>
                    <input type="text" name="otp" id="otp" placeholder="Enter otp" value=""></br>
                    <p><?php if(isset($_POST['submit'])){echo "$mesg";}?></p></br>
                    <input type="submit" name="submit" id="submit" value="Submit"></br> 
                </form>
            </div>
            <div class="formboby" style="display:hide;"></div>
        </div>   
    </section>
</body>
</html>