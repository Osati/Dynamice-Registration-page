<?php
    require_once "config.php";
    $id=$_GET['id'];
    $moderator="Moderator";
    $update = "UPDATE admin_reg SET usertype='$moderator' WHERE id='$id'";
    $exit=mysqli_query($conn,$update);

    if($exit){
        $mesg="admin add successful";
    }else{
        $mesgnot= "admin add not successful";
    }
?>