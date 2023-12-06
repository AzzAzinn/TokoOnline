<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign up</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body id="la_body">
    <div class="admin_pass">
        <form action="cek_admin.php" method="post">
            <table cellpadding="10px">
                <tr>
                    <td>
                        <h2>Password</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass_admin">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="go">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>