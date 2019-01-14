<?php

if (isset($_SESSION['banker_id'])) {
    } else{
    header('Location: not_authorized.php');
    }
?>