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
</head>
<body>
    <p style="text-align: center; font-weight: bold; font-size: 20px;">
         Maaf, bagian website ini masih belum ada. Silahkan kembali ke Panel Admin.
    </p>
</body>
</html>