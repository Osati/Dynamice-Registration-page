<?php
    require_once "config.php";
    $otp_error="";
    $permission_error="";
    if(isset($_POST['submit'])){
        $submit_otp = $_POST['otp'];
    
        $verify= "SELECT * FROM admin_reg where otp='$submit_otp'";
        $query= mysqli_query($conn,$verify);

        if(mysqli_fetch_assoc($query)){
            $update="UPDATE admin_reg SET verify='Yes' where otp='$submit_otp'";
            $sql=mysqli_query($conn,$update);
            if($sql){
                $query=mysqli_query($conn,"select * from admin_reg where otp='$submit_otp'");
                if(mysqli_num_rows($query)>0){
                    $row=mysqli_fetch_assoc($query);
                    if($row['usertype'] == "Moderator"){
                        
                        header('location:moderatorpage.php');
                        die();
                    }
                if($row['usertype'] == "Sub_moderator"){
                    header('location:submoderatorpage.php');
                    die();
                }else{
                    $permission_error="Admin permission is`t active!";
                }
            }else{
                $otp_error="OTP number error!";
            }
        }
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
                    <label for="">Check Your Email id:</label></br>
                    <p><?php if(isset($_POST['submit'])){echo $permission_error;}?></p></br>
                    <input type="text" name="otp" id="otp" placeholder="Enter otp" value=""></br>
                    <p><?php if(isset($_POST['submit'])){echo $otp_error;}?></p></br>
                    <input type="submit" name="submit" id="submit" value="Submit"></br> 
                </form>
            </div>
            <div class="formboby" style="display:hide;"></div>
        </div>   
    </section>
</body>
</html>