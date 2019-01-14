
<?php
include('includes.php');
session_start();
$id = $_GET['id'];
echo $id;


$deactive="Deactive";
mysqli_query($conn, "UPDATE bank_account set   statuse = '$deactive' where account_id = '$id' ");

?>

