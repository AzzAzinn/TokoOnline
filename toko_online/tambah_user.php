<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<div class="signup_wrapper">

    <body id="le_body">
        <form action="proses_tambah_user.php" method="post">
            <div class="signup_table">
                <table cellspacing = "10px">
                    <tr>
                        <td colspan="2">
                            <p>Create an Account</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Nama:
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="nama_pelanggan" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Alamat:</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="alamat">
                        </td>
                    </tr>
                    <!-- checkpoint -->
                    <tr>
                        <td > 
                            Tanggal Lahir:
                        </td>
                        <td >
                            Jenis Kelamin:
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <input type="date" name="tanggal_lahir" value="">
                        </td>
                        <td>
                            <select name="gender">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </td>


                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            Password:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="username">
                        </td>
                        <td>
                            <input type="password" name="pass">
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="simpan" value="Daftar">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="admin_signup">
                            <a href="password_admin.php">Admin Sign Up</a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</div>

</html>