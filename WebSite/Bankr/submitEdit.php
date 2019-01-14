<?php
include('includes.php');
session_start();
$id = $_SESSION['client_id'] ;



$client_n=$_POST['fname'];
$client_ln=$_POST['lname'];
$client_username=$_POST['username'];
$client_gender=$_POST['gender'];
$client_nat=$_POST['nationality'];
$client_bdate=$_POST['birthdate'];
$client_phone=$_POST['phone'];
$client_accType=$_POST['accountType'];
$client_JMBG=$_POST['JMBG'];
$client_email=$_POST['email'];
$client_marStat=$_POST['status'];
$client_address=$_POST['address'];
$client_city=$_POST['city'];
$client_country=$_POST['country'];
$client_passportNum=$_POST['passportNum'];
$client_zip=$_POST['zip'];

mysqli_query($conn, "UPDATE client set first_name = '$client_n', last_name = '$client_ln', date_of_birth = '$client_bdate', city = '$client_city', country = '$client_country', nationality = '$client_nat' ,  email= '$client_email',  zip = '$client_zip',  jmbg = '$client_JMBG', phone = '$client_phone',  address = '$client_address',  passport_num= '$client_passportNum', marital_status = '$client_marStat', gender = '$client_gender' where client_id = '$id'");
;
header('Location: clientList.php');
?>