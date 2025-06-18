<?php
include("../../conf/db_conn.php");

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql_query = "select * from tb_user where email='".$email."' and password='".md5($password)."'";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_array($result);

if($row){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['email'] = $row['email'];
    $username = $row['username'];
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $row['role'];

    echo "<script>alert('Selamat datang $username, kamu telah berhasil login!')</script>";
    echo "<script>window.location.href='../../index.php'</script>";
}else{
    echo "<script>alert('Masukan data email dan password dengan benar!')</script>";
    echo "<script>window.location.href='../../pages/user/login.php'</script>";
}
?>
