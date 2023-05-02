<?php
    require_once "config.php";
    $empmsg ="";
    $passmaseg="";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email && $password)){
            $empmsg ='Fil up this field.';
        }
        if(!empty($email) && !empty($password)){

            $query=mysqli_query($conn,"select * from admin_reg where email='$email'");
            if(mysqli_num_rows($query)>0){
                $row=mysqli_fetch_assoc($query);
                if($row['usertype'] == 1){
                    $verify = password_verify($password,$row['password']);
                    if($verify==1){
                    
                    header('location:adminpage.php');
                    die();
                }
                else{
                        $passmaseg="Please Enter your correct password";
                    }
                }else{
                    $verify = password_verify($password,$row['password']);
                    if($verify==1){
                    
                    header('location:userpage.php');
                    die();
                }
                else{
                        $passmaseg="Please Enter correct password";
                    }
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
    <title>login page</title>
</head>
<body>
    <section class="header-container">
        <h1>Login info</h1>
        <div class="row">
            <div class="formboby">
            <form action="" method='post'>
                <label for="">Enter Email Id:</label></br>
                <input type="email" name="email" id="email" placeholder="Enter email" value="<?php if(isset($_POST['submit'])){echo "$email";}?>"></br>
                <p><?php if(isset($_POST['submit'])){echo "$empmsg";}?></p>             
                <label for="">Enter Password:</label></br>
                <input type="password" name="password" id="password" placeholder="Enter password " value=""></br>
                <p><?php if(isset($_POST['submit'])){if(empty($password)){echo $empmsg;}else{echo $passmaseg;}}?></p></br>              
            
                <input type="submit" name="submit" id="submit" value="Submit"></br> 
            </form>
        </div>
        <div class="formboby">
            <img src="images/reg.jpg" alt="registration">
        </div>
    </div>
        
    </section>
</body>
</html>