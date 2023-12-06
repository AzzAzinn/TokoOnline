<?php
include "koneksi.php";
include "header.php";
if ($_SESSION['level'] != "admin") {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="wrapper">
        <div class="game_table">
            <table cellspacing="0" cellpadding="10">
                <tr id="special_row1">
                    <td colspan="8">
                        <h1>
                            Daftar Game
                        </h1>
                    </td>
                </tr>
                <tr id="special_row2">
                    <th>
                        Nama
                    </th>
                    <th>
                        Developer
                    </th>
                    <th>
                        Deskripsi
                    </th>
                    <th>
                        Foto
                    </th>
                    <th>
                        Tanggal Release
                    </th>
                    <th>
                        Publisher
                    </th>
                    <th>
                        Harga
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                <tr>
                    <?php
                    $qry_game=mysqli_query($conn, "select * from game");
                    while($data_game=mysqli_fetch_array($qry_game)){
                        ?>
                        <tr>
                            <td>
                                <?=$data_game['nama_game']?>
                            </td>
                            <td>
                                <?=$data_game['developer']?>
                            </td>
                            <td id="tabel_deskripsi">
                                <?=$data_game['deskripsi']?>
                            </td>
                            <td>
                            <img src=assets/poster/<?=$data_game['foto']?> height='100px'> 
                            </td>
                            <td>
                                <?=$data_game['tanggal_release']?>
                            </td>
                            <td>
                                <?=$data_game['publisher']?>
                            </td>
                            <td>
                                Rp. <?=$data_game['harga']?>
                            </td>
                            <td id="button_cuy">
                                <button>
                                    <a onclick="location.href='ubah_game.php?id_game=<?=$data_game['id_game']?>'">Ubah</a>
                                    <?php
                                    $_SESSION['token_ubah']=true;
                                    ?>
                                </button><br> <br>
                                <button>
                                    <a onclick="location.href='hapus_game.php?id_game=<?=$data_game['id_game']?>'">Delete</a>
                                </button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>