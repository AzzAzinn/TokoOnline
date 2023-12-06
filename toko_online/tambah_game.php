<?php
session_start();
include "koneksi.php";
if (isset($_SESSION['token_ubah'])) {
    if ($_SESSION['token_ubah'] == true) {

        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ubah Game</title>
            <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        </head>

        <div class="signup_wrapper">

            <body id="le_body">
                <form action="proses_tambah_game.php" method="post">
                    <div class="signup_table">
                        <table cellspacing="10px">
                            <tr>
                                <td colspan="2">
                                    <p>Tambah Game</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    Nama Game:
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" name="nama_game" value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Developer:</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" name="developer">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Deskripsi:
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" name="deskripsi">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tanggal Release:
                                </td>
                                <td>
                                    Foto:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="date" name="tanggal_release" value="">
                                </td>
                                <td>
                                    <input type="text" name="foto">
                                </td>
                            <tr>
                                <td>
                                    Publisher:
                                </td>
                                <td>
                                    Harga:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="publisher">
                                </td>
                                <td>
                                    <input type="numeric" name="harga" id="cek">
                                </td>
                                <script>
                                    const input1 = document.getElementById("cek");
                                    input1.addEventListener("input", function () {
                                        this.value = this.value.replace(/[^0-9]/g, "");
                                    });
                                </script>
                            </tr>
                            <tr>

                            </tr>

                            <tr>
                                <td colspan="2" class="tombol_cuy">
                                    <input type="submit" name="simpan" value="Ganti" id="tombol_cuy" style="padding-left:290px">
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