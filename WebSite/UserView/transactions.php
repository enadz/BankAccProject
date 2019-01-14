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
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include_once ('head.php'); ?>
<body>
<?php include_once ('header.php'); ?>
<div class="back">
    <nav>
        <ul>
            <li class="back"><a href="accounts.php">Back</a></li>
        </ul>
    </nav>
</div>


<main class="wrapper">
    <?php

    $query = mysqli_query($conn, "Select * from transaction where bank_account= '$id' ");
    ?>
    <table>
        <tr>
            <th>
                Bank Account ID
            </th>
            <th>
                Transaction ID
            </th>

            <th>
                Banker
            </th>
            <th>
               Transaction Date
            </th>

            <th>
              Amount
            </th>
            <th>
                Action Type
            </th>
            <th>
                Date Submited
            </th>
            <th>
               Purpose
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
                    <?php echo $row['bank_account'] ?>
                </td>

                <td>
                    <?php echo $row['transaction_id'] ?>
                </td>
                <td>
                    <?php echo $row['banker']?>
                </td>
                <td>
                    <?php echo $row['t_date'] ?>
                </td>

                <td>
                    <?php echo $row['amount'] ?>
                </td>

                <td>
                    <?php echo $row['action_type'] ?>
                </td>
                <td>
                    <?php echo $row['date_submitted'] ?>
                </td>
                <td>
                    <?php echo $row['purpose'] ?>
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
        &copy; Copyright <?php echo date('Y'); ?>
    </div>
</footer>
</body>
</html>