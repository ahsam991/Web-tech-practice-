<?php
// reg_C.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    // Perform basic validation (you can add more validation as needed)

    // Assuming validation is successful, you can proceed to register the user
    // For simplicity, let's just set a session variable
    session_start();
    
    if($username == "" || $password == ""){
        echo "Null username/password";
    }else if($password == $confirmPassword) {
        $_SESSION['username'] = $username;
        header('location: ../View/login.php');
        exit();
    } else {
        echo "Password mismatch";
    }
}
?>
