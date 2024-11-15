<?php
error_reporting(0);
include 'config.php';
$barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$gambar = $_POST['gambar'];
$kategori = $_POST['id_kategori'];
$id_admin = $_POST['id_admin'];
//upload dan simpan gambar
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmp_name, 'img_deskripsi/' . $namafile);
$update = mysqli_query($con, "UPDATE deskripsi SET nama_barang 
='$_POST[nama_barang]', deskripsi='$_POST[deskripsi]', 
tanggal='$_POST[tanggal]', gambar='$namafile', 
id_kategori='$_POST[kategori]', id_admin='$_POST[id_admin]' WHERE id_deskripsi 
='$_POST[id_deskripsi]'");
if ($update) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_deskripsi.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_deskripsi.php'
    </script>
<?php } ?>