<?php
$con = mysqli_connect('localhost', 'root', '', 'katalog_moos');
if (!$con) {
    echo 'Gagal terhubung ke database';
    die;
}
