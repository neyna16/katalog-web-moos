<?php
include 'config.php';
$id_admin = $_GET['id_admin'];
$delete = mysqli_query($con, "DELETE FROM admin WHERE id_admin = $id_admin");
if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_admin.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_admin.php'
    </script>
<?php } ?>