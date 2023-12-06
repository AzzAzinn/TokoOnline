<?php
session_start();
$link_login = "login.php";
$link_logout = "logout.php";
$link_transaksi = "history.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1 id="header_h1">Chimmy</h1>
        <nav>
            <ul class="nav_links">
                <li>
                    <?php
                    if (isset($_SESSION['level'])) {
                        if ($_SESSION['level'] == 'admin') {
                            echo "<a href='admin_panel.php'>Settings</a>";
                        }

                    }
                    ?>
                </li>
                <li><a href="index.php">Store</a></li>
                <li><a href="keranjang.php">Cart</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['id_user'])) {

                        echo "<a href= '" . $link_transaksi . "'>Transaksi</a>";
                    } else {
                        echo "<a href= '" . $link_login . "'>Transaksi</a>";

                    }
                    ?>
                </li>
                <li>
                    <?php
                    if (isset($_SESSION['id_user'])) {

                        echo "<a href= '" . $link_logout . "'>Logout</a>";
                    } else {

                        echo "<a href= '" . $link_login . "'>Login</a>";

                    }
                    ?>
                </li>
            </ul>
        </nav>
        <div class="tooltip">
            <img src="assets/icons/user3_whitemode.png" id="logo_user">
            <span class="tooltiptext">
                <p>
                    <?php
                    if (!isset($_SESSION['username'])) {
                        echo "Kamu masih belum login";
                    } else {
                        echo "Kamu terlogin sebagai ";
                        echo $_SESSION['username'];
                    }
                    ?> <br>
                </p>
            </span>
        </div>
    </div>
</body>

</html>