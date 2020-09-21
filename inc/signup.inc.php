<?php

    if (isset($_POST['submit'])) {
        include_once 'dbh.inc.php'; //database connection point
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
    }
    else {
        header("Location: ../index.php?signup=error");
    }

