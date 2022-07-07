<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <li><a href="logout.php"><button class="cart-btn">Odjava</button></a></li>
        <li><a href="indexlogin.php"><button class="cart-btn">Home login page</button></a></li>
        
    </div>
</body>
</html>
