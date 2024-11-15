<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Data Admin</h5>
        <div class="card-body">
            <h5 class="card-title">Lihat Data Admin</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                Tambah Data Admin
            </button>
            <div class="table table-m">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $data = mysqli_query($con, "SELECT * FROM admin ");
                        foreach ($data as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $row['nama_admin'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><a class="badge badge-success" href="admin_edit.php?id_admin=<?= $row['id_admin'] ?>">Edit</a>
                                    <a class="badge badge-danger" href="admin_delete.php?id_admin=<?= $row['id_admin'] ?>" onclick="return 
confirm('Yakin ingin menghapus data ini?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ./content -->
<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="admin_add.php" method="POST">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_admin" class="form-control" required>
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger " data-dismiss="modal" onclick="history.go(-1)">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary 
">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal add -->
<!-- Modal Update -->

<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="proses_admin_edit.php" method="POST">
                    <div class="form-group">
                        <label for="">Admin</label>
                        <input type="text" name="nama_admin" class="form-control" required value="<?= $row['nama_admin'] ?>">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" required value="<?= $row['username'] ?>">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" required value="<?= $row['password'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger " data-dismiss="modal" onclick="history.go(-1)">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary 
">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal Update -->
<?php include '_footer.php'; ?>