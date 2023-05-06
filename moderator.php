<?php
    require_once "config.php";
    $id=$_GET['id'];
    $moderator="Moderator";
    $update = "UPDATE admin_reg SET usertype='$moderator' WHERE id='$id'";
    mysqli_query($conn,$update);

?>