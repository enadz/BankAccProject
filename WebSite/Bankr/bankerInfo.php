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
    $banker_id = $_SESSION['banker_id'];

    $query = mysqli_query($conn, "SELECT * FROM banker WHERE banker_id = '$banker_id'");
//    $row = mysqli_fetch_assoc($query);
//    echo $row['first_name'];
    ?>
    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Birth Date
            </th>
            <th>
                Category
            </th>
            <th>
                Title
            </th>
            <th>
                email
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
                    <?php echo $row['first_name'] ?>
                </td>
                <td>
                    <?php echo $row['last_name'] ?>
                </td>
                <td>
                    <?php echo $row['date_of_birth'] ?>
                </td>
                <td>
                    <?php echo $row['title']?>
                </td>
                <td>
                    <?php echo $row['email']?>
                </td>

                <td>
                    <?php echo $row['category'] ?>
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