<?php
session_start();
?>

<?php

include('includes.php');

$username= mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM client WHERE username = '$username' and password = '$password'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['msg'] = 'Username and/or password is invalid';
    header('Location: login.php');
    exit();
}

$row = mysqli_fetch_assoc($query);
$_SESSION['client_id'] = $row['client_id'];
$_SESSION['client_name'] = $row['first_name'] . ' ' . $row['last_name'];



header('Location: ClientView.php');
?>