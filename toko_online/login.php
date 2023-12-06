<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input[type=text] {
            box-sizing: border-box;
            padding: 10px 10px;
            font-family: "poppins";
            font-weight: bold;
        }

        input[type=password] {
            box-sizing: border-box;
            padding: 10px 10px;
            font-family: "poppins";
            font-weight: bold;
        }

        a{
            color: #155da4;
            font-size: 15px;
        }
        
    </style>
</head>

<body id="login_body">
    <form action="proses_login.php" method="post" id="loginForm">
        <table id="login_table" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th colspan="2" id="welcome">Welcome</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    <p class="userpass">Username</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" class="kolom" id="username" name="username" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="userpass">Password</p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" class="kolom" id="password" name="pass" required>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Login" name="login" id="tombol_login" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p id="sign_up">Don't have an account? <a href="tambah_user.php" style="text-decoration: none;color: blue;">Sign up
                            here</a></p>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
</body>

</html>