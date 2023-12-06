<?php
include "header.php";
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
    <div class="cart_container">
        <h2>Keranjang anda</h2>
        <table cellpadding="5" cellspacing="0">
            <tr id="special_row">
                <td>Game</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Action</td>
                <td>Total</td>
            </tr>
            <?php
            if (isset($_SESSION['cart'])) {
                $total=0;


                foreach ($_SESSION['cart'] as $key_produk => $val_produk):
                    ?>
                    <tr>
                        <td>
                            <div class="display_keranjang">
                                <img src="assets/poster/<?= $val_produk['foto'] ?>">
                            </div>
                        </td>
                        <td>
                            <?= $val_produk['nama_game'] ?>
                        </td>
                        <td>
                            Rp.
                            <?= $val_produk['harga'] ?>
                        </td>
                        <td>
                            <?= $val_produk['qty'] ?>
                        </td>
                        <td>
                            <a href="hapus_cart.php?id=<?= $key_produk ?>" style="" id="delete">Delete</a>
                        </td>
                        <td>
                            <?php
                            $_SESSION['count'] = $val_produk['harga'] * $val_produk['qty'];
                            echo "Rp. ".$_SESSION['count']."";
                            $total += $_SESSION['count'];
                            ?>
                        </td>
                    </tr>

                <?php endforeach ?>
                <tr>
                    <td colspan="3">
                        <a href="checkout.php" id="Check_out">Check Out</a>
                    </td>
                    <td colspan="3">
                        Total keseluruhan = Rp.
                        <?=$total?>
                        <?php
                        $_SESSION['total_bersih'] = $total;
                        ?>
                    </td>
                </tr>
                <?php
            } else {

            } ?>

        </table>

    </div>
</body>

</html>