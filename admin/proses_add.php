<?php
include 'config.php';

$kategori = $_POST['kategori'];
$admin = $_POST['id_admin'];

$query = "INSERT INTO kategori(kategori, id_admin)VALUES(
    '" . $kategori . "',
    '" . $admin . "'
    )";
$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_kategori.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_kategori.php'
    </script>
<?php } ?>