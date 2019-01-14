<?php
session_start();
include('includes.php');


?>

<?php


$date=$_POST['date'];
$ProcessedBy=$_POST['ProcessedBy'];
$action_type=$_POST['action_type'];
$amount=$_POST['amount'];
$account=$_POST['account'];
$purpose=$_POST['purpose'];
$banker_id = $_SESSION['banker_id'];

$id=$_SESSION['client_id'];
echo $id;

$sql= "INSERT INTO transaction(amount,purpose,action_type,banker,t_date,bank_account)
VALUES ('$amount','$purpose','$action_type','$banker_id','$date','$account');";


mysqli_query($conn,$sql);

if($action_type== "Deposit") {

    mysqli_query($conn, "UPDATE bank_account set   balance = balance +'$amount' where account_id = '$account'");;
}

else
{


    mysqli_query($conn, "UPDATE bank_account set   balance = balance -'$amount' where account_id = '$account'");;
}

header('Location: clientList.php');
?>



