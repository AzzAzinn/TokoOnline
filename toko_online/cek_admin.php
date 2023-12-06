<?php
$admin_pass = $_POST['pass_admin'];

if($admin_pass == 'admin'){
    echo "<script>alert('Password akses admin benar'); location.href='signup_admin.php';</script>";
    session_start();
    $_SESSION['token'] = true;
} else {
    echo "<script>alert('Password akses admin salah'); location.href='login.php';</script>";
}

?>