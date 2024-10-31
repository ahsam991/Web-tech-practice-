<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>
    <table border="1" cellspacing="0" width="500px" align="center">
        <tr height="100px">
            <td style="border-right: none;">
                <img src="../Asset/1.png" alt="">
            </td>
            <td align="right" style="border-left: none;">
                <a href="public_home.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="reg.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <form method="post" action="../Controller/login_C.php">
                    <fieldset>
                        <legend><b>LOGIN</b></legend>

                        <table>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" name="name" /></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" /></td>
                            </tr>
                        </table>
                        <hr> 
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label> <br>
                             
                        <br><input type="submit" name="submit" value="Submit" />
                        <a href="forgot_pass.php">Forgot Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" height="25px">
                Copyright &copy; <?php echo $currentYear; ?>
            </td>
        </tr>
    </table>
</body>
</html>
