<?php
include('includes.php');
session_start();
?>
<!doctype html>
<html>
<?php include_once ('head.php'); ?>
<body>
<?php include_once ('header.php'); ?>
<div class="back">
    <nav>
        <ul>
            <li class="back"><a href="bankerView.php">Back</a></li>
        </ul>
    </nav>
</div>
<main class="wrapper">
    <?php
    $query = mysqli_query($conn, "Select * from client");
    ?>
    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Date of birth
            </th>
            <th>
                Email
            </th>
            <th>
                Address
            </th>

            <th>
                Marital status
            </th>
            <th>
                Transactions
            </th>
            <th>
                Add new Account
            </th>
            <th>
                Edit
            </th>
            <th>
               Account List
            </th>
        </tr>
        <!--        <tr>-->
        <!--            <th>-->
        <!--                Create-->
        <!--            </th>-->
        <!--        </tr>-->
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td>
                    <?php echo $row['first_name'] . ' ' . $row['last_name'] ?>
                </td>
                <td>
                    <?php echo $row['date_of_birth'] ?>
                </td>
                <td>
                    <?php echo $row['email']?>
                </td>
                <td>
                    <?php echo $row['address'] . ', ' . $row['zip'] . ', ' . $row['city'] . ', ' . $row['country'] ?>
                </td>

                <td>
                    <?php echo $row['marital_status'] ?>
                </td>

                <td>
                    <a href="transactions.php?id=<?php echo $row['client_id'] ?>">Transactions</a>
                </td>
                <td>
                    <a href="createAccount.php?id=<?php echo $row['client_id'] ?>">Create new account</a>
                </td>
                <td>
                    <a href="edit-user.php?id=<?php echo $row['client_id'] ?>">Edit</a>
                </td>

                <td>
                    <a href="listClientAcc.php?id=<?php echo $row['client_id'] ?>">Account list</a>
                </td>
            </tr>
            <!--            <tr>-->
            <!--                <td>-->
            <!--                    <a href="create-user.php?id=--><?php //echo $row['client_id'] ?><!--">Create</a>-->
            <!--                </td>-->
            <!--            </tr>-->
        <?php } ?>
    </table>

</main>
<footer>
    <div class="wrapper">


    </div>
</footer>
</body>
</html>