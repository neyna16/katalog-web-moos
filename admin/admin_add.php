<?php
include 'config.php';

$nama = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO admin(nama_admin, username, password) VALUES ('$nama', '$username', '$password')";
$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_admin.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_admin.php'
    </script>
<?php } ?>