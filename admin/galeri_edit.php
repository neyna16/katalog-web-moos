<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Ubah Data Galeri</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Galeri</h5>
            <?php
            $id = $_GET['id'];

            $data = mysqli_query($con, "SELECT * FROM gallery WHERE id = '$id'");
            $row = mysqli_fetch_array($data);
            ?>
            <form action="proses_galeri_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea rows="15" cols="100" name="keterangan" class="ckeditor" class="form-control" id="keterangan"><?= $row['keterangan'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label><br>
                        <img src="<?= "img_deskripsi/" . $row['gambar'] ?>" width="70" height="70">
                        <input name="gambar" type="file" id="gambar" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Id Admin</label>
                        <select name="id_admin" class="form-control">
                            <?php
                            $tampil = mysqli_query($con, "SELECT * FROM admin ORDER BY id_admin");
                            while ($edit = mysqli_fetch_array($tampil)) {
                                $selected = ($row['id_admin'] == $edit['id_admin']) ? 'selected' : '';
                                echo "<option value='{$edit['id_admin']}' $selected>{$edit['id_admin']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger " onclick="history.go(-
1)">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->