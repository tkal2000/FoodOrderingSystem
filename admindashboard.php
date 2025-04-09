<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
</head>
<body style="background-color: rgb(220, 215, 241);">
    <?php
        include('connection.php');
        session_start();
        $uname=$_SESSION["uname"];
    ?>
    <div class="header">
        <?php
            include('headeradmin.php');
        ?>
    </div>
    <div class="sidebar">
        <?php
            include('dash.php');
        ?>
    </div>
    <div class="container">
        <?php
            include('administrator.php');
        ?>
    </div>
    
</body>
</html>