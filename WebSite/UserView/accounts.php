<?php
include('includes.php');
session_start();
$id = $_GET['id'];



?>
<!doctype html>
<html>
<head>
    <title>
        Index
    </title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include_once ('header.php'); ?>
<?php include_once ('head.php'); ?>
<div class="back">
    <nav>
        <ul>
            <li class="back"><a href="ClientView.php">Back</a></li>
        </ul>
    </nav>
</div>

<main class="wrapper">
    <?php
    $id=$_SESSION['client_id'];
    $query = mysqli_query($conn, "Select * from bank_account  where client_id = $id ");
    ?>
    <table>
        <tr>
            <th>
                Account ID
            </th>
            <th>
                Account Number
            </th>
            <th>
                Account Type
            </th>
            <th>
                Balance
            </th>

            <th>
                Date opened
            </th>
            <th>
                Status
            </th>
            <th>
                Valid Till
            </th>
            <th>
                Edit
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
                    <?php echo $row['account_id'] ?>
                </td>
                <td>
                    <?php echo $row['account_number']?>
                </td>
                <td>
                    <?php echo $row['account_type'] ?>
                </td>

                <td>
                    <?php echo $row['balance'] ?>
                </td>

                <td>
                    <?php echo $row['date_opened'] ?>
                </td>
                <td>
                    <?php echo $row['status'] ?>
                </td>
                <td>
                    <?php echo $row['valid_till'] ?>
                </td>
                <td>
                    <a href="transactions.php?id=<?php echo $row['account_id'] ?>">Transactions</a>
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

</footer>
</body>
</html>