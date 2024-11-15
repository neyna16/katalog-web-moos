<?php
include 'config.php';
$id_deskripsi = $_GET['id_deskripsi'];
$delete = mysqli_query($con, "DELETE FROM deskripsi WHERE
id_deskripsi = $id_deskripsi");
if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_deskripsi.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_deskripsi.php'
    </script>
<?php } ?>