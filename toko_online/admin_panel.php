<?php
session_start();
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
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body id="admin_panel_body">
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="assets/icons/user3_whitemode.png" alt="">
                <p>
                    <?= $_SESSION['username'] ?>
                </p>
            </div>
            <div class="sidebar_menu">
                <ul>
                    <li>
                        <a href="index.php">
                            <span>Home</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="">
                            <?php
                            if (isset($_SESSION['id_user'])) {
                                echo "<a href= 'logout.php'>Logout</a>";
                            } else {
                                echo "<a href= 'login.php'>Login</a>";
                            }
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main_thing">
            <div class="child1">
                <h1>Welcome to Admin Panel</h1>
            </div>
        </div>
        <div class="action_menu">
            <div class="hero_cuy">
                <h2>Actions:</h2>
            </div>
            <div class="children">
                <ul>
                    <li>
                    <button onclick="location.href='tampil_game.php'">
                        Data Game
                    </button>
                    </li>
                    <li>
                    <button onclick="location.href='tambah_game.php'">
                        Tambah Game
                        <?php
                        $_SESSION['token_ubah'] = true;
                        ?>
                    </button>
                    </li>
                    <li>
                    <button onclick="location.href='tampil_user.php'">
                        Data User
                    </button>
                    </li>
                    <li>
                    <button onclick="location.href='tampil_transaksi.php'">
                        Data Transaksi
                    </button>
                    </li>
                </ul>
                <!-- <div class="child1">
                    
                </div>
                <div class="child2">
                    
                </div>
                <div class="child3">
                    
                </div>
                <div class="child4"> -->
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>