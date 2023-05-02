<?php
    require_once "config.php";
    $empmsg="";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $enpassword = password_hash($password, PASSWORD_DEFAULT );

        if(empty($name && $email && $password)){
            $empmsg = 'Fil up this field.';         
         }
         if(!empty($name) && !empty($email) && !empty($password)){

            $insert = "INSERT INTO admin_reg (name,email,password) VALUE('$name','$email','$enpassword')";
            
            if($conn->query($insert) === true){
                echo "
                    <script>
                    alert('Your Registration is successfully.');
                    window.location.href='registration.php';
                    </script>
                ";
                
            }else{
                echo "
                    <script>alert('Your Registration is't successfully.');</script>
                ";
            }
            $conn->close();
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
    <title>registration page</title>
</head>
<body>
    <section class="header-container">
        <h1>Registration info</h1>
        <div class="row">
            <div class="formboby">
                <form action="" method='post'>
                    <label for="">Enter Admin Name:</label></br>
                    <input type="text" name="name" id="name" placeholder="Enter name" value="<?php if(isset($_POST['submit'])){echo "$name";}?>"></br>
                    <p><?php if(isset($_POST['submit'])){echo "$empmsg";}?></p>
                    <label for="">Enter Email:</label></br>
                    <input type="email" name="email" id="email" placeholder="Enter email" value="<?php if(isset($_POST['submit'])){echo "$email";}?>"></br>
                    <p><?php if(isset($_POST['submit'])){echo "$empmsg";}?></p>             
                    <label for="">Enter Password:</label></br>
                    <input type="password" name="password" id="password" placeholder="Enter password " value=""></br>
                    <p><?php if(isset($_POST['submit'])){echo "$empmsg";}?></p></br>              
                
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