<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data Produk</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Produk</h5>
            <?php
            $id_deskripsi = $_GET['id_deskripsi'];
            $barang = $_GET['nama_barang'];
            $deskripsi = $_GET['deskripsi'];
            $tanggal = $_GET['tanggal'];
            $gambar = $_GET['gambar'];
            $kategori = $_GET['id_kategori'];
            $admin = $_GET['id_admin'];
            $data = mysqli_query($con, "SELECT * FROM deskripsi 
WHERE id_deskripsi = '$id_deskripsi'");
            $row = mysqli_fetch_array($data); ?>
            <form action="proses_deskripsi_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id_deskripsi" class="form-control" value="<?= $row['id_deskripsi'] ?>">
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?= $row['nama_barang'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Produk</label>
                        <textarea rows="15" cols="100" name="deskripsi" class="ckeditor" class="form-control" id="deskripsi"><?= $row['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $row['tanggal']
                                                                                                    ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label><br>
                        <img src="<?= "img_deskripsi/" .
                                        $row['gambar'] ?>" width="70" height="70">
                        <input name="gambar" type="file" id="gambar" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori" class="form-control">
                            <?php
                            $tampil = mysqli_query(
                                $con,
                                "SELECT * FROM kategori ORDER BY kategori"
                            );
                            if ($row['kategori'] == 0) {
                                echo "<option value=0 
selected>- Pilih Kategori -</option>";
                            }
                            while ($edit =
                                mysqli_fetch_array($tampil)
                            ) {
                                if (
                                    $row['id_kategori'] ==
                                    $edit['id_kategori']
                                ) {
                                    echo "<option 
value=$edit[id_kategori] selected>$edit[kategori]</option>";
                                } else {
                                    echo "<option 
value=$edit[id_kategori]>$edit[kategori]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Id Admin</label>
                        <select name="id_admin" class="form-control">
                            <?php
                            $tampil = mysqli_query(
                                $con,
                                "SELECT * FROM admin ORDER BY id_admin"
                            );
                            if ($row['admin'] == 0) {
                                echo "<option value=0 
selected>- Pilih Admin -</option>";
                            }
                            while ($edit =
                                mysqli_fetch_array($tampil)
                            ) {
                                if (
                                    $row['id_admin'] ==
                                    $edit['id_admin']
                                ) {
                                    echo "<option 
value=$edit[id_admin] selected>$edit[id_admin]</option>";
                                } else {
                                    echo "<option 
value=$edit[id_admin]>$edit[id_admin]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <!-- Tambahan input untuk link Shopee, Tokopedia, Lazada, dan TikTok -->
                    <div class="form-group">
                        <label for="">Link Shopee</label>
                        <input type="text" name="link_shopee" class="form-control" value="<?= $row['link_shopee'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Link Tokopedia</label>
                        <input type="text" name="link_tokopedia" class="form-control" value="<?= $row['link_tokopedia'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Link Lazada</label>
                        <input type="text" name="link_lazada" class="form-control" value="<?= $row['link_lazada'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Link TikTok</label>
                        <input type="text" name="link_tiktok" class="form-control" value="<?= $row['link_tiktok'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary ">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>