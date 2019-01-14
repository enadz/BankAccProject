<?php

if (isset($_SESSION['client_id'])) {

    } else{
    header('Location: not_authorized.php');
    }
?>