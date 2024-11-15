<?php
session_start();
include("config.php");

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$sql = "SELECT id_admin FROM admin
			WHERE username='$username'
			AND password ='$password'";
$hasil = mysqli_query($con, $sql) or exit("Error quer : <b>" . $sql . "<b>.");
if (mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_array($hasil);
    $_SESSION['nama_admin'] = $data['username'];
    header("Location:halamanadmin.php");
    exit();
} else { ?>
    <h2> Maaf.. </h2>
    <p> Username atau Password salah. Klik <a href="login.php">disini</a> untuk kembali login. </p> <?php
                                                                                                } ?>