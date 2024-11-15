<?php
include 'config.php';

$barang = $_POST['nama_barang'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$kategori = $_POST['id_kategori'];
$admin = $_POST['id_admin'];

$link_shopee = $_POST['link_shopee'];
$link_tokopedia = $_POST['link_tokopedia'];
$link_lazada = $_POST['link_lazada'];
$link_tiktok = $_POST['link_tiktok'];

//upload dan simpan gambar
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_deskripsi/' . $namafile);

$query = "INSERT INTO deskripsi(nama_barang, deskripsi, tanggal, gambar, id_kategori, id_admin, link_shopee, 
link_tokopedia, link_lazada, link_tiktok) VALUES(
    '" . $barang . "',
    '" . $deskripsi . "',
    '" . $tanggal . "',
    '" . $namafile . "',
    '" . $kategori . "',
    '" . $admin . "',
    '" . $link_shopee . "',
    '" . $link_tokopedia . "',
    '" . $link_lazada . "',
    '" . $link_tiktok . "'
    )";
$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_deskripsi.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_deskripsi.php'
    </script>
<?php } ?>