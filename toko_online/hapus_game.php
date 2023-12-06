<?php
session_start();
    if($_GET['id_game']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from game where id_game='".$_GET['id_game']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses menghapus game');location.href='tampil_game.php';</script>";   
        } else {
            echo "<script>alert('Gagal menghapus game');location.href='tampil_game.php';</script>";
        }
    }

?>