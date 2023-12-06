<?php
session_start();
include "koneksi.php";
    $qry_get_user = mysqli_query($conn, "select * from user where
    id_user = '".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
if (isset($_SESSION['token_ubah'])) {
    if ($_SESSION['token_ubah'] == true) {

        ?>
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
                <form action="proses_ubah_user.php" method="post">
                    <input type="hidden" name="id_user" value="<?=$dt_user['id_user']?>">
                    <div class="signup_table">
                        <table cellspacing="10px">
                            <tr>
                                <td colspan="2">
                                    <p>Ubah</p>
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
                            <tr>
                                <td>
                                    Level:
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <select name="level" id="">
                                        <option value="pelanggan">Pelanggan</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tanggal Lahir:
                                </td>
                                <td>
                                    Jenis Kelamin:
                                </td>
                            </tr>
                            <tr>
                                <td>
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
                                <td colspan="2">
                                    <input type="submit" name="simpan" value="Daftar">
                                </td>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    </div>
                </form>
            </body>
        </div>

        </html>
        <?php
    } else {
        header('location:index.php');
    }

} else {

    header('location:index.php');
}
?>