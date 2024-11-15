<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data Admin</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Admin</h5>
            <?php
            $id_admin = $_GET['id_admin'];
            $nama_admin = isset($_GET['nama_admin']);
            $data = mysqli_query($con, "SELECT * FROM admin WHERE
id_admin='$id_admin'");
            $row = mysqli_fetch_array($data); ?>
            <form action="proses_admin_edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_admin" class="form-control" value="<?=
                                                                                    $row['id_admin'] ?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_admin" class="form-control" value="<?=
                                                                                        $row['nama_admin'] ?>">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="<?=
                                                                                    $row['username'] ?>">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" value="<?=
                                                                                    $row['password'] ?>">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger " onclick="history.go(-
1)">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary
">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php';
