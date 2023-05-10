<?php
session_start();
require_once "config.php";

  $email = $_SESSION['email'];
  
  $select = "SELECT * FROM admin_reg where email='$email'";
    $query = mysqli_query($conn,$select);
    
      if($query){
        $code = rand(000000,999999);
        $update = "UPDATE admin_reg SET otp=$code where email='$email'";
        $updateresult=mysqli_query($conn,$update);
    
          if($updateresult){
            $to_email= $email;
            $headline ="Dynamic Registration verification code.";
            $body ="Hi,\n Your verification code: $code";
            $send = "From :anisurrhaman0133@gmail.com";
        
              if(mail($to_email,$headline,$body,$send)){
                            header('location:verify.php');
                } 
                else{
                      $error['otp_errors']= "OTP not send your email.";
                    }
          }
      }
    
?>