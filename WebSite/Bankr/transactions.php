<?php
session_start();
$id = $_GET['id'];
$_SESSION['client_id']=$id ;
include('includes.php');


?>

<!DOCTYPE html>
<html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<?php include_once ('header.php'); ?>
<?php include_once ('head.php');


$query = mysqli_query($conn, "SELECT * FROM bank_account WHERE client_id = '$id'");

?>
<div class="split left login-bg">
    <div class="centered">


    </div>

</div>

<div class="split right ">
    <div class="centered form-style ">
<form action="submitTransaction.php" name="Transaction" id="Transaction" method="POST">
    <div class="move">
        <h1>Transaction Form</h1>
<label for="data"> Transaction Date</label> <br>
<input id="date"  name="date" type="date" required>

<br/>





        </div>

<br/>

<label for="action_type">Action</label> <br>
<select name="action_type">
    <option value="Withdraw">Withdraw</option>
    <option value="Deposit">Deposit</option>
</select>
<br/>

<label for="amount">Amount</label> <br>
<input type="number" min="0" id="amount" name="amount" required>

<br/>
    <label for="account">Account</label> <br>
    <select name="account" id="account">
        <option value="">Please select an account</option>
        <?php
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <option value="<?php echo $row['account_id'] ?>"><?php echo $row['account_number'] ?></option>
        <?php }
        ?>
    </select>

<br/><br/>

<label for="purpose">Purpose of payment</label><br>
    <textarea name="purpose" rows="10" cols="30" required ></textarea> <br>
    <button type="submit" name="submit">Submit</button>
    
</form>
</div>
    </div>

</body>


</html>