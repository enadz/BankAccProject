<?php
include('includes.php');
session_start();
$client_id = $_SESSION['client_id'] ;
echo $client_id;




$account_type=$_POST['account_type'];
$account_pin=$_POST['PIN'];
$account_val=$_POST['valid_till'];
$account_number=$_POST['account_number'];



$sql= "INSERT INTO bank_account(client_id,account_type,account_number,PIN,valid_till)  
VALUES ('$client_id','$account_type','$account_number','$account_pin','$account_val');
";

mysqli_query($conn,$sql);

header('Location: clientList.php');

?>