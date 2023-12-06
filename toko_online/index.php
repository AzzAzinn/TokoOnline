<?php
include "header.php";
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <div class="top_part">
            <div class="centered">
                <h1>Selamat Datang DI Chimmy</h1>
                <p>Kami menjual berbagai produk sepatu berkualitas</p>
            </div>
        </div>

    </div>
    <div class="main_part">
        <div class="main_header">
            <h1 class="header1">
                Trending
            </h1>
            <div class="e">
                <?php
                $qry = mysqli_query($conn, "select * from game");
                while ($dt_game = mysqli_fetch_array($qry)) {
                    ?>
                    <div class="product_card">
                        <img src="assets/poster/<?= $dt_game['foto'] ?>">
                        <h4>
                            <?= $dt_game['nama_game'] ?>
                        </h4>
                        <div>
                            <button>
                                <?php
                                if (isset($_SESSION['id_user'])) {
                                    $link_beli = "beli.php?id_game=$dt_game[id_game]";
                                    echo "<a href= '".$link_beli."'>+</a>";
                                } else {
                                    echo "<a href= '".$link_login."'>+</a>";

                                }
                                ?>
                            </button>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
</body>

</html>