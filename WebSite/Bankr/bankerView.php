<?php
session_start();
?>
<!doctype html>
<html>
<?php include_once ('head.php'); ?>
<body>
<?php include_once ('header.php'); ?>


<div class="split left">
    <div class="centered">
        <ul>
            <li> <a href="registration.php"> Register a new client</a></li>
            <li><a href="bankerInfo.php">Account Information</a></li>
            <li> <a href="clientList.php">Client List</a></li>
            <li> <a href="logout.php">Logout</a></li>
        </ul>


    </div>

</div>
<div class="split right login-bg">

</div>
</body>
</html>