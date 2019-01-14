<?php
session_start();
?>

<?php

include('includes.php');





$client_n=$_POST['fname'];
$client_ln=$_POST['lname'];
$client_username=$_POST['username'];
$client_gender=$_POST['gender'];
$client_nat=$_POST['nationality'];
$client_bdate=$_POST['birthdate'];
$client_phone=$_POST['phone'];
$client_accType=$_POST['accountType']; // treba dodati u bank account a ne u klient tabeli
$client_JMBG=$_POST['JMBG'];
$client_email=$_POST['email'];
$client_marStat=$_POST['status'];
$client_address=$_POST['address'];
$client_city=$_POST['city'];
$client_country=$_POST['country'];
$client_passportNum=$_POST['passportNum'];
$client_zip=$_POST['zip'];


$client_password = generatePassword(12); // for a 12-char password, upper/lower/numbers.
$newusername= generateUsername(12); //for username
function getRandomBytes($nbBytes = 32)
{
    $bytes = openssl_random_pseudo_bytes($nbBytes, $strong);
    if (false !== $bytes && true === $strong) {
        return $bytes;
    }
    else {
        throw new \Exception("Unable to generate secure token from OpenSSL.");
    }
}
function generatePassword($length){
    return substr(preg_replace("/[^a-zA-Z0-9]/", "", base64_encode(getRandomBytes($length+1))),0,$length);
}
function generateUsername($length){
    return substr(preg_replace("/[^a-zA-Z0-9]/", "", base64_encode(getRandomBytes($length+1))),0,$length);
}



$sql= "INSERT INTO client(first_name,last_name,date_of_birth,city,country,nationality,zip,jmbg,email,password,address,gender,marital_status,username,phone,passport_num)  
VALUES ('$client_n','$client_ln','$client_bdate','$client_city','$client_country','$client_nat','$client_zip','$client_JMBG', '$client_email','$client_password','$client_address','$client_gender','$client_marStat','$newusername','$client_phone','$client_passportNum');
";

mysqli_query($conn,$sql);
$clientID = mysqli_insert_id($conn);
$banker_id = $_SESSION['banker_id'];

$sql1= "INSERT INTO registration(client,banker)  
VALUES ('$clientID', '$banker_id');
";

mysqli_query($conn,$sql1);

header('Location: bankerView.php');





?>





