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
        <div class="user_table">
            <table cellspacing="0" cellpadding="2">
                <tr id="special_row1">
                    <td colspan="7">
                        <h1>
                            Daftar User
                        </h1>
                    </td>
                </tr>
                <tr id="special_row2">
                    <th>
                        Nama
                    </th>
                    <th>
                        Tanggal Lahir
                    </th>
                    <th>
                        Gender
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Username
                    </th>
                    <th>
                        Level
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                <tr>
                    <?php
                    $qry_user = mysqli_query($conn, "select * from user");
                    while($data_user = mysqli_fetch_array($qry_user)){
                    ?>
                        <tr>
                            <td>
                                <?=$data_user['nama_pelanggan']?>
                            </td>
                            <td>
                            <?=$data_user['tanggal_lahir']?>
                            </td>
                            <td>
                            <?=$data_user['gender']?>
                            </td>
                            <td>
                            <?=$data_user['alamat']?>
                            </td>
                            <td>
                            <?=$data_user['username']?>
                            </td>
                            <td>
                            <?=$data_user['level']?>
                            </td>
                            <td>
                                <button>
                                    <a onclick="location.href='ubah_user.php?id_user=<?=$data_user['id_user']?>'">Ubah</a>
                                    <?php
                                    $_SESSION['token_ubah'] = true;
                                    ?>
                                </button> |
                                <button>
                                    <a onclick="location.href='hapus_user.php?id_user=<?=$data_user['id_user']?>'">Delete</a>
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