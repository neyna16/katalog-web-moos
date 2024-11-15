<?php
include 'config.php';
$id_admin = $_POST['id_admin'];
$nama = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');
$query = "UPDATE admin SET nama_admin='$nama', username='$username', 
password='$password' WHERE id_admin = '$id_admin'";
$result = mysqli_query($con, $query);
if ($result) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_admin.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_admin.php'
    </script>
<?php } ?>