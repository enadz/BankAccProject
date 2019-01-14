<?php
session_start();
include('includes.php');
?>
<!doctype html>
<html>
    <head>
        <title>
        Sign in
        </title>
        <link rel="stylesheet" href="css/login.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        
        <div class="split left">
            <div class="centered login">
                <form action="auth.php" method="POST">
                    <h4>Login</h4>
                    <input type="text" name="username" id="username" placeholder="Enter your username" required>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <br>
                    <button type="submit">Submit</button>
                </form>
       
            </div>
        </div>
        <div class="split right login-bg">
            <div class="centered">
            </div>
        </div>

    </body>
</html>