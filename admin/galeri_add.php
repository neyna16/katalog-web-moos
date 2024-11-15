<?php
include 'config.php';

if (isset($_POST['upload'])) {
    $keterangan = $_POST['keterangan'];
    $admin = $_POST['id_admin'];

    // Mendapatkan informasi file gambar
    $namafile = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $file_extension = strtolower(pathinfo($namafile, PATHINFO_EXTENSION));

    // Format gambar yang diizinkan
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

    // Validasi jenis file
    if (in_array($file_extension, $allowed_extensions)) {
        // Upload file ke server
        $upload_path = 'img_deskripsi/' . $namafile;
        move_uploaded_file($tmp_name, $upload_path);

        // Simpan data ke database
        $query = "INSERT INTO gallery (keterangan, gambar, id_admin) VALUES (
            '" . $keterangan . "',
            '" . $namafile . "',
            '" . $admin . "'
        )";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>
                alert('Data berhasil ditambahkan!');
                location.href = 'page_galeri.php';
            </script>";
        } else {
            echo "<script>
                alert('Data gagal ditambahkan!');
                location.href = 'page_galeri.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Format file tidak didukung! Silakan upload file dengan format jpg, jpeg, png, gif, bmp, atau webp.');
            location.href = 'page_galeri.php';
        </script>";
    }
}
