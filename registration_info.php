<?php
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="admin_user.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User information page</title>
</head>
<body>
    <section class="header-container">
        <h1>Registration info</h1>
        
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>usertype</th>
                        <th>User Select</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM admin_reg";
                    $query=mysqli_query($conn,$sql);
                    while($dtinfo=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $dtinfo['id']?></td>
                            <td><?php echo $dtinfo['name']?></td>
                            <td><?php echo $dtinfo['email']?></td>
                            <td><?php echo $dtinfo['usertype']?></td>
                            <td>
                                <button onclick="moderator(<?php echo $dtinfo['id'];?>)">admin</button>
                                <button onclick="sup_moder(<?php echo $dtinfo['id'];?>)">User</button>
                            </td>
                        </tr>
                
                    <?php
                }
                ?>   
            </tbody> 
            </table>      
    </section>
</body>
</html>