<?php
include "header.php";
include "koneksi.php";
$qry_detail_game = mysqli_query($conn, "select * from game where id_game = '" . $_GET['id_game'] . "'");
$dt_game = mysqli_fetch_array($qry_detail_game);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <style>
        input[type=number] {
        box-sizing: border-box;
        padding: 10px 20px;
        font-family: "poppins";
        font-weight: bold;
        }

        
    </style>
</head>

<body>
    <form action="masukkankeranjang.php?id_game=<?=$dt_game['id_game']?>" method="post">
        <div class="beli_container">
            <div class="gambar_produk">
                <img src="assets/poster/<?= $dt_game['foto']?>" alt="">
            </div>

            <div class="nama_produk">
                <h1>
                    <?=$dt_game['nama_game']?>
                </h1>
            </div>
            <div class="row_deskripsi">
                <div class="deskripsi_produk">
                    <p>
                        <?=$dt_game['deskripsi']?>
                    </p>
                </div>
            </div>
            <div class="row_harga">
                <div class="deskripsi_harga">
                    <h2>
                        Rp.
                        <?=$dt_game['harga']?>
                    </h2>
                </div>
            </div>
            <div class="publisher_produk">
                <p>Developer:
                    <?=$dt_game['developer']?>
                </p>
                <p>Publisher:
                    <?=$dt_game['publisher']?>
                </p>
            </div>
            <div class="release_produk">
                <p>Release date:
                    <?=$dt_game['tanggal_release']?>
                </p>
            </div>

            <div class="jumlah_beli">

                <table class="tabel_jumlah_beli" cellpadding="10">
                    <tr>
                        <td>
                            <h2>Jumlah Beli</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="jumlah_beli" value="1" class="bar_tambah">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Beli" id="tombol_beli">
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </form>
</body>

</html>