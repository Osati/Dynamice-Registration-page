<?php
require_once "config.php";
$id=$_GET['id'];
$sup="Sup_moderator";
$update = "UPDATE admin_reg SET usertype='$sup' WHERE id='$id'";
$exit=mysqli_query($conn,$update);

if($exit){
    $mesg="admin add successful";
}else{
    $mesgnot= "admin add not successful";
}

?>