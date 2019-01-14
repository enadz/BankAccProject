<?php
include('includes.php');
session_start();
$id = $_GET['id'];
$_SESSION['client_id']=$id;
echo $_SESSION['client_id'];


?>
<!doctype html>
<html>


<body>


<?php include_once ('head.php'); ?>
<?php include_once ('header.php'); ?>
<?php
$query = mysqli_query($conn, 'SELECT * FROM account_type');
?>
<div class="split left login-bg">
    <div class="centered">


    </div>

</div>
<div class="split right ">
    <div class="centered form-style ">
    <form name="NewAcc" id="NewAcc" method="POST" action="submitAccount.php">
        <h1>Create Account</h1>


        <input type="text" name="account_number" id="account_number"  min=12 max=12 placeholder="Account Number" required>
        <br>

        <input type="password" name="PIN" id="PIN"  min=4 max=4  placeholder="PIN" required>
        <br>
        <label for="valid_till">Valid Till</label> <br>
        <input type="date" name="valid_till" id="valid"  required>
        <br>
        <label for="Type">Account Type</label> <br>
        <select name="account_type" id="account_type">
            <option value="">Please select a category</option>
            <?php
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <option value="<?php echo $row['type_id'] ?>"><?php echo $row['name'] ?></option>
            <?php }
            ?>
        </select>
        <br><br>

        <button type="submit" name="submit" >Complete</button>
    </div>


    </form>
</div>





</body>

</html>