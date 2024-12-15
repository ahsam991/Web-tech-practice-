Here’s the implementation of the mini-project based on the provided flow from your PDF. The system will include registration, login, and user redirection functionalities. The data will be stored in a TXT file, and sessions/cookies will be used to secure pages after login.

Code Breakdown
	1.	Registration Page: Stores user information (ID, Password, Name, User Type) in a TXT file.
	2.	Login Page: Validates credentials and redirects users based on their user type.
	3.	Admin and User Pages: Homepages tailored to the user type.
	4.	Profile & Change Password Pages: Functionalities for profile and password management.
	5.	Session Management: Pages will use sessions to ensure security.

1. Registration Page (register.php)

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $user_type = $_POST['user_type'];

    // Validate password match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Store data in a TXT file
    $data = "$id|$password|$name|$user_type\n";
    file_put_contents("users.txt", $data, FILE_APPEND);
    echo "Registration Successful! <a href='login.php'>Login Here</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form method="POST" action="register.php">
        ID: <input type="text" name="id" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Confirm Password: <input type="password" name="confirm_password" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        User Type: 
        <input type="radio" name="user_type" value="Admin" required> Admin
        <input type="radio" name="user_type" value="User" required> User<br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>

2. Login Page (login.php)

<?php
session_start();

// Check login submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Read users.txt file
    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        list($id, $pass, $name, $type) = explode("|", $line);
        if ($user_id == $id && $password == $pass) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_type'] = $type;

            // Redirect based on user type
            if ($type == "Admin") {
                header("Location: admin_home.php");
            } else {
                header("Location: user_home.php");
            }
            exit;
        }
    }
    echo "Invalid Credentials!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        User ID: <input type="text" name="user_id" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

3. Admin Home Page (admin_home.php)

<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "Admin") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
</head>
<body>
    <h2>Welcome Admin, <?php echo $_SESSION['user_name']; ?></h2>
    <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="view_users.php">View Users</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>

4. User Home Page (user_home.php)

<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != "User") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Home</title>
</head>
<body>
    <h2>Welcome User, <?php echo $_SESSION['user_name']; ?></h2>
    <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>

5. Profile Page (profile.php)

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Name: <?php echo $_SESSION['user_name']; ?></p>
    <p>ID: <?php echo $_SESSION['user_id']; ?></p>
    <p>User Type: <?php echo $_SESSION['user_type']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>

6. Change Password Page (change_password.php)

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['new_password'];
    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);
    $updated_lines = [];

    foreach ($lines as $line) {
        list($id, $pass, $name, $type) = explode("|", $line);
        if ($id == $_SESSION['user_id']) {
            $updated_lines[] = "$id|$new_password|$name|$type";
        } else {
            $updated_lines[] = $line;
        }
    }

    file_put_contents("users.txt", implode("\n", $updated_lines));
    echo "Password Changed Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>
    <form method="POST" action="change_password.php">
        New Password: <input type="password" name="new_password" required><br><br>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>

7. Logout Page (logout.php)

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>

Notes:
	1.	Save user data in a file named users.txt.
	2.	Sessions ensure only authenticated users can access the pages.
	3.	Passwords are stored as plain text for simplicity but can be hashed using password_hash().

Let me know if you need further explanations!
