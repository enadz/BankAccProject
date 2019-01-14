<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once ('head.php'); ?>
<body class="container">

<?php include_once ('header.php'); ?>


<div class="split left">
    <div class="centered">
        <ul>
            <li> <a href="registration.php"> Register a new client</a></li>
            <li><a href="bankerInfo.php">Account Information</a></li>
            <li> <a href="clientList.php">Client List</a></li>
            <li> <a href="logout.php">Logout</a></li>
        </ul>


    </div>

</div>
<div class="split right register-bg">
    <div class="centered form-style ">
    <form action="submitReg.php" name="Registration" id="RegistrationFrom" method="POST">
        <h1>Registration Form</h1>

        <input type="text" name="fname" id="fname" required placeholder="First Name">

        <input type="text" name="lname" id="lname" required placeholder="Last Name">

        <input type="text" name="nationality" id="nationality" required placeholder="Nationality">

        <input type="date" name="birthdate" id="birthdate" required placeholder="Date of Birth">

        <input type="phone" name="phone" id="phone" required placeholder="Phone Number">

        <input type="text" name="JMBG" pattern="[0-9]{12}" required placeholder="JMBG">

        <input type="email" id="email" name="email" required placeholder="email">

        <input type="text" id="Address"name="address" required placeholder="Address">

        <input type="number" id="zip" name="zip" required  pattern="[0-9]{5}" placeholder="Zip">

        <input type="text" id="city" name="city" required placeholder="city">

        <input type="text" id="country" name="country" required placeholder="country" >

        <input type="text" id="PasspostNum" name="passportNum" pattern="[0-9]{9}" required placeholder="Passport Number">



        <!-- <label for="accountType" style="margin-right: 57px;">Account Type</label>
         <select name="accountType" id="accountType" name="accountType"required>
             <option value="Credit">Credit Card</option>
             <option value="Debit">Debit Card</option>
             <option value="Saving">Savings Account</option>
             <option value="Current">Current</option>
             <option value="Student">Student</option>
             </select> <br>
        -->


        <!--
                <label for="MarStat">Marital Status</label> <br>

                <input type="radio" name="MarStat" value="Married" class="option-input"> Married<br>
                <input type="radio" name="MarStat" value="Single"> Single<br>
                <input type="radio" name="MarStat" value="Widowed"> Widowed<br>
                <input type="radio" name="MarStat" value="Divorced"> Divorced<br>
        -->





        <section>
            <br>
            <label >Marital Status</label>
            <br>
            <label for="married" >Married</label>
            <input name="status" type="radio" value="Married" id="married" required>
            <label for="single" >Single</label>
            <input name="status" type="radio" value="Single" id="single" required>
            <br>
            <label for="widowed">Widowed</label>
            <input name="status" type="radio" value="Widowed" id="widowed" required>
            <label for="divorced">Divorced</label>
            <input name="status" type="radio" value="Divorced" id="divorced" required>
        </section>
        <label>Gender</label>
        <br>
        <input name="gender" type="radio" value="Male" id="male" required>
        <label for="male">Male</label>
        <input name="gender" type="radio" value="Female" id="female" required>
        <label for="female">Female</label>
        <button type="submit" name="submit" >Register</button>
        <br>

    </form>
    </div>
</div>


</body>
</html>