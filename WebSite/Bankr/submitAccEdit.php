<?php
include('includes.php');
session_start();
$account_id=$_SESSION['account_id'];
echo $account_id;





$account_type=$_POST['account_type'];
$account_pin=$_POST['PIN'];
$account_val=$_POST['valid_till'];
$account_number=$_POST['account_number'];


mysqli_query($conn, "UPDATE bank_account set  account_number = '$account_number', account_type = '$account_type',   valid_till = '$account_val' , PIN = '$account_pin' where account_id= '$account_id'");
;

mysqli_query($conn,$sql);
header('Location: clientList.php');

?>