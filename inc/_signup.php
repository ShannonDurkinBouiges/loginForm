<?php

if (isset($_POST['signupButton'])) {
    
    require '_db.php';
    
    $username = $_POST['signupUsername'];
    $email = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];
    $passwordRepeat = $_POST['signupPasswordRepeat'];
    
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&username=".$username."&email=".$email);
        exit();
    }  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidemailusername");
        exit();
    }  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&username=".$username);
        exit();
    }  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidusername&email=".$email);
        exit();
    }  elseif ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&username=".$username."&email".$email);
        exit();
    }  else {
        
        $sql = "SELECT id_Users FROM users WHERE id_USERS=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }  elseif () {
        
        }
        
    }
}

