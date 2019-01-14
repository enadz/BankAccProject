<?php
session_start();
?>

<?php

include('includes.php');

$username= mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM banker WHERE b_username = '$username' and password = '$password'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['msg'] = 'Username and/or password is invalid';
    header('Location: login.php');
    exit();
}

$row = mysqli_fetch_assoc($query);
$_SESSION['banker_id'] = $row['banker_id'];
$_SESSION['banker_name'] = $row['first_name'] . ' ' . $row['last_name'];



header('Location: bankerView.php');
?>