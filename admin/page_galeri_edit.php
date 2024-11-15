<?php
error_reporting(0);
include 'config.php';

$keterangan = $_POST['keterangan'];
$admin = $_POST['id_admin'];

// Mendapatkan informasi file gambar
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
$file_extension = strtolower(pathinfo($namafile, PATHINFO_EXTENSION));

// Format gambar yang diizinkan
$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

// Jika ada file gambar yang diunggah
if (!empty($namafile)) {
    // Validasi jenis file
    if (in_array($file_extension, $allowed_extensions)) {
        // Upload file ke server
        $upload_path = 'img_deskripsi/' . $namafile;
        move_uploaded_file($tmp_name, $upload_path);

        // Update data dengan gambar baru
        $update = mysqli_query($con, "UPDATE gallery SET keterangan='$keterangan', gambar='$namafile', id_admin='$admin' WHERE id='$_POST[id]'");
    } else {
        echo "<script>
            alert('Format file tidak didukung! Silakan upload file dengan format jpg, jpeg, png, gif, bmp, atau webp.');
            location.href = 'page_galeri.php';
        </script>";
        exit;
    }
} else {
    // Jika tidak ada gambar baru, hanya update keterangan dan admin
    $update = mysqli_query($con, "UPDATE gallery SET keterangan='$keterangan', id_admin='$admin' WHERE id='$_POST[id]'");
}

if ($update) {
    echo "<script>
        alert('Data berhasil diubah!');
        location.href = 'page_galeri.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal diubah!');
        location.href = 'page_galeri.php';
    </script>";
}
