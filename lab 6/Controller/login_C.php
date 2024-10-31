<?php
// login_C.php

session_start();

// Sample user data (replace this with your actual user data retrieval logic)
$registeredUsername = "sample_user";
$hashedRegisteredPassword = password_hash("sample_password", PASSWORD_DEFAULT);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $enteredUsername = $_POST['name'];
    $enteredPassword = $_POST['password'];

    // Validate login credentials (replace this with your actual validation logic)
    if ($enteredUsername == $registeredUsername && password_verify($enteredPassword, $hashedRegisteredPassword)) {
        // Set a session variable to indicate successful login
        $_SESSION['username'] = $enteredUsername;

        // Redirect to the login_in-dash.php page
        header('Location: ../View/login_in-dash.php');
        exit();
    } else {
        // Redirect to an error page or display an error message
        header('Location: error.php');
        exit();
    }
}
?>
