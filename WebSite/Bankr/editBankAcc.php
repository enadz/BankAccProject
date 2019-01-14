<?php
include('includes.php');
session_start();
$id = $_GET['id'];
$_SESSION['account_id']=$id;
$query = mysqli_query($conn, "select * from bank_account where account_id = '$id'");
echo $id;

$row = mysqli_fetch_assoc($query);

?>
<!doctype html>
<html>
<?php include_once ('head.php'); ?>


<body>
<?php include_once ('header.php'); ?>
<?php
$query1 = mysqli_query($conn, 'SELECT * FROM account_type');
?>
<div class="split left login-bg">
    <div class="centered">


    </div>

</div>
<div class="split right ">
    <div class="centered form-style ">
<form name="NewAcc" id="NewAcc" method="POST" action="submitAccEdit.php">
    <h1>BankAccount</h1>

    <label for="account_number">Account Number</label> <br>
    <input type="text" name="account_number" id="account_number"  min=12 max=12  required <?php echo $row['account_number'];?> >
    <br>
    <label for="PIN">PIN</label> <br>
    <input type="password" name="PIN" id="PIN"  min=4 max=4  required>
    <br>
    <label for="valid_till">Valid Till</label> <br>
    <input type="date" name="valid_till" id="valid"  required <?php echo $row['valid_till'];?>>
    <br>
    <label for="Type">Account Type</label> <br>

    <select name="account_type" id="account_type">
        <option value="">Please select a category</option>
        <?php
        while ($row = mysqli_fetch_assoc($query1)) { ?>
            <option value="<?php echo $row['type_id'] ?>"><?php echo $row['name'] ?></option>
        <?php }
        ?>
    </select>
    <br><br>

    <button type="submit" name="submit" >Complete</button>



</form>



</body>


