<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>
    <table border="1" cellspacing="0" width="700px" align="center">
        <tr height="100px">
            <td style="border-right: none;">
                <img src="../Asset/1.png" alt="">
            </td>
            <td align="right" style="border-left: none;">
                Logged in as <a href="view_profile.php">Bob</a> |
                <a href="logout.php">Logout</a> 
            </td>
        </tr>

        <th align="left" style="padding: 10px;">
        Account<br><hr>
            <ul>
                <li><a href="login_in_dash.php">Dashboard</a></li>
                <li><a href="view_profile.php">View profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a><br></li>
                <li><a href="profile_pic.php">Change Profile Picture</a><br></li>
                <li><a href="change_pass.php">Change Password</a><br></li>
                <li><a href="logout.php">Logout</a><br></li> 
            </ul>
        </th>

        <td>
            <form method="post" action=""enctype = "" style="padding: 10px;">
                <fieldset>
                    <legend><b>EDIT PROFILE</b></legend>
                         NAME:                      <input type="text" name="name" value="" /> <br><hr>
                         Email:                     <input type="text" name="Email" value="" /><br><hr>
                         Gender:                    <input type="radio" name="gender" value="" /> Male
                                                    <input type="radio" name="gender" value="" /> Female
                                                    <input type="radio" name="gender" value="" /> Other <br><hr>
                         Date of Birth:             <input type="text" name="DateofBirth" value="" /><br><hr>  
                                                    <br><input type="submit" name="" value="Submit" />
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