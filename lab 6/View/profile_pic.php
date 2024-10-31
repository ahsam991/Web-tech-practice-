<!DOCTYPE html>
<html>
<head>
    <title>Profile picture</title>
</head>
<body>

    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>
    <table border="1" cellspacing="0" width="700px" align="center">
        <tr height="100px" style="padding: 10px;">
            <td style="border-right: none;">
                <img src="../Asset/1.png" alt="">
            </td>
            <td align="right" style="border-left: none;" colspan="2">
                Logged in as <a href="view_profile.php">Bob</a> |
                <a href="logout.php">Logout</a> 
            </td>
        </tr>

       <tr>
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
            
            <td style="border-right: none;">
                <form method="post" action="" enctype = "">
                    <fieldset >
                        <legend><b>PROFILE PICTURE</b></legend>
                        <img src="profile.png" alt="" height="100px" width="100px" style="padding: 10px;"><br>
                        Picture <input type="file" name="" value=""><br>
                        <hr>
                        <input type="submit" name="" value="Submit">
                    </form>
                </td>
            </fieldset>  
            </tr>
                
        <tr>
            <td colspan="3" align="center" height="25px">
                Copyright &copy; <?php echo $currentYear; ?>
            </td>
        </tr>

    </table>

</body>
</html>