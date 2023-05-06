<?php
    require_once "config.php";
    $id=$_GET['id'];
    $sub="Sub_moderator";
    $update = "UPDATE admin_reg SET usertype='$sub' WHERE id='$id'";
    mysqli_query($conn,$update);

?>