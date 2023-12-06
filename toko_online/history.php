<?php
include "header.php";
include "koneksi.php";
$qry_cek_user = mysqli_query($conn, "select id_user from detail_pembelian_game where id_user = '" . $_SESSION['id_user'] . "'");


if (!isset($_SESSION['id_user'])) {
    header("login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="history_container">
        <table cellpadding="5" cellspacing="0" class="container_table">
            <thead>
                <tr>
                    <td colspan="7" id="special_row1">
                        <h2>
                            Transaksi
                        </h2>
                    </td>
                </tr>
            </thead>
            <thead>
                <tr id="special_row2">
                    <td>Game</td>
                    <td>Nama</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                    <td>Total</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry_histori = mysqli_query($conn, "select * from pembelian_game where id_user='" . $_SESSION['id_user'] . "' order by id_pembelian_game desc");
                if ($qry_cek_user) {
                    $row = mysqli_fetch_array($qry_cek_user);

                    if (isset($row['id_user'])) {

                        if ($row['id_user'] == $_SESSION['id_user']) {

                            $no = 0;

                            while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                                $no++;

                                $tes_total = 0;
                                $game_dibeli = "<ul>";
                                $qty_beli = "<ul>";
                                $harga_beli = "<ul>";
                                $total_harga_beli;
                                $foto_game = "";
                                $qry_game = mysqli_query($conn, "select * from detail_pembelian_game join game on game.id_game=detail_pembelian_game.id_game where id_user = '" . $_SESSION['id_user'] . "'and id_pembelian_game = '" . $dt_histori['id_pembelian_game'] . "'");
                                while ($dt_game = mysqli_fetch_array($qry_game)) {
                                    $total_harga_beli = 0;
                                    $game_dibeli .= "<li>" . $dt_game['nama_game'] . "<br>";
                                    $harga_beli .= "<li> Rp. " . $dt_game['harga'] . "<br>";
                                    $qty_beli .= "<li>" . $dt_game['qty'];
                                    $total_harga_beli += $dt_game['harga'] * $dt_game['qty'];
                                    $tes_total += $total_harga_beli;
                                    $foto_game .= "<img src='assets/poster/" . $dt_game['foto'] . "' height='100px'> ";
                                }
                                $game_dibeli .= "</ul>";
                                $harga_beli .= "</ul>";
                                $qty_beli .= "</ul>";
                                $total_harga_beli .= "";
                                $foto_game .= "";

                                $qry_cek_kembali = mysqli_query($conn, "select * from status_beli where id_pembelian_game = '" . $dt_histori['id_pembelian_game'] . "'");
                                if (mysqli_num_rows($qry_cek_kembali) > 0) {
                                    $dt_bayar = mysqli_fetch_array($qry_cek_kembali);
                                    $status_beli = "<label class='alert alert-success'>Sudah beli </label>";
                                    $button_beli = "";
                                } else {
                                    $status_beli = "<label class='alert alert-danger'>Belum beli</label>";
                                    $button_beli = "<a href='pembelian.php?id=" . $dt_histori['id_pembelian_game'] . "' onclick='return confirm(\"Terima kasih atas pembelian anda\")'>Beli</a>";
                                }
                                ?>

                                <tr>
                                    <td>
                                        <?= $foto_game ?>
                                    </td>
                                    <td>
                                        <?= $game_dibeli ?>
                                    </td>
                                    <td>
                                        <?= $qty_beli ?>
                                    </td>
                                    <td>
                                        <?= $harga_beli ?>
                                    </td>
                                    <td>
                                        Rp.
                                        <?= $tes_total ?>
                                    </td>
                                    <td>
                                        <?= $status_beli ?>
                                    </td>
                                    <td>
                                        <?= $button_beli ?>
                                    </td>
                                </tr>
                                <?php

                            }
                        } else {
                            echo $row['id_user'];
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>