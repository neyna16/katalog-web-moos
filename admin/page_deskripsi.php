<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Data Produk</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data Produk</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data Produk
            </button>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal Terbit</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $data = mysqli_query($con, "SELECT * FROM
deskripsi inner join kategori on
deskripsi.id_kategori=kategori.id_kategori");
                    foreach ($data as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $row['nama_barang'] ?></td>
                            <td><?= substr(
                                    $row['deskripsi'],
                                    0,
                                    200
                                ) ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td><img src="<?= "img_deskripsi/" .
                                                $row['gambar'] ?>" width="70" height="70"></td>
                            <td><?= $row['kategori'] ?></td>
                            <td><?= $row['id_admin'] ?></td>
                            <td>
                                <a class="badge badge-success" href="deskripsi_edit.php?id_deskripsi=<?= $row['id_deskripsi']
                                                                                                        ?>">Edit</a>
                                <a class="badge badge-danger" href="deskripsi_delete.php?id_deskripsi=<?= $row['id_deskripsi'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ./content -->
<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="deskripsi_add.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_barang" class="form-control" required>

                        <label for="">Deskripsi</label>
                        <textarea rows="15" cols="100" name="deskripsi" class="form-control" required></textarea>

                        <label for="">Tanggal Terbit</label>
                        <input type="date" name="tanggal" class="form-control" required>

                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>

                        <label for="">Kategori</label>
                        <select name="id_kategori" class="form-control" required>
                            <option value=0 selected>- Pilih Kategori -</option>
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM kategori");
                            foreach ($tampil as $row) : ?>
                                <?php echo "<option value=$row[id_kategori]>$row[kategori]</option>"; ?>
                            <?php endforeach; ?>
                        </select>

                        <label for="">Id Admin</label>
                        <select name="id_admin" class="form-control" required>
                            <option value=0 selected>- Pilih Id Admin -</option>
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM admin");
                            foreach ($tampil as $row) : ?>
                                <?php echo "<option value=$row[id_admin]>$row[id_admin]</option>"; ?>
                            <?php endforeach; ?>
                        </select>

                        <!-- Tambahan input untuk link Shopee, Tokopedia, Lazada, dan TikTok -->
                        <label for="">Link Shopee</label>
                        <input type="text" name="link_shopee" class="form-control" required>

                        <label for="">Link Tokopedia</label>
                        <input type="text" name="link_tokopedia" class="form-control" required>

                        <label for="">Link Lazada</label>
                        <input type="text" name="link_lazada" class="form-control" required>

                        <label for="">Link TikTok</label>
                        <input type="text" name="link_tiktok" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="self.history.back()">Close</button>
                        <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ./Modal add -->

<?php include '_footer.php'; ?>