<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-datepicker.min.css">
    <title>DTS-VSGA 2021 (JWD)</title>
</head>

<body>

    <?php
    // include 'header.php'; 
    ?>
    <div style="padding: 2rem 2rem 2rem 2rem;">
        <div class="card">

            <div class="card-body">
                <div class="card-title">
                    <h2><b>Tabel DTS VSGA 2021</b></h2>
                    <p>Tampil Data dari Data Base</p>
                </div>
                <div class="col-lg-12">

                    <div class="col-md-8" style="padding-bottom: 1rem;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="./logic/insert.php">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" id="nama" name="nama" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" id="email" name="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="telepon" class="form-label">Telepon</label>
                                                <input type="text" id="telepon" name="telepon" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="lahir" class="form-label">Tanggal Lahir</label>
                                                <!-- <input class=" form-control" name="lahir" type="text" data-language="en" data-bs-original-title="" title=""> -->
                                                <input type="text" id="lahir" name="lahir" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea name="alamat" id="" class="form-control" cols="30" rows="10"></textarea>
                                                <!-- <input type="text" id="price" name="price" class="form-control" /> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="price" class="form-label">Jenis Kelamin</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" value="L" id="laki-laki">
                                                    <label class="form-check-label" for="laki-laki">
                                                        Laki Laki
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" value="P" id="perempuan" checked>
                                                    <label class="form-check-label" for="perempuan">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if ($_GET['insert'] == 'success') {
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil dimasukkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }elseif ($_GET['update'] == 'success') {
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil diubah
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }elseif ($_GET['delete'] == 'success') {
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }
                ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Nomer Telpon</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require('./logic/koneksi.php');
                            $result = $koneksi->query('select * from diri');
                            $nomer = 1;
                            while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                                <!-- Modal -->
                                <div class="modal fade" id="edit<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="./logic/update.php?id=<?=$data['id']?>">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="text" id="email" name="email" value="<?= $data['email'] ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="telepon" class="form-label">Telepon</label>
                                                            <input type="text" id="telepon" name="telepon" value="<?= $data['telepon'] ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="lahir" class="form-label">Tanggal Lahir</label>
                                                            <!-- <input class=" form-control" name="lahir" type="text" data-language="en" data-bs-original-title="" title=""> -->
                                                            <input type="text" id="lahir" name="lahir" value="<?= $data['lahir'] ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <textarea name="alamat" id="" class="form-control" cols="30" rows="10"><?= $data['alamat'] ?></textarea>
                                                            <!-- <input type="text" id="price" name="price" class="form-control" /> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="price" class="form-label">Jenis Kelamin</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?= $data['kelamin'] == 'L' ? 'checked' : '' ?> name="jk" value="L" id="laki-laki">
                                                                <label class="form-check-label" for="laki-laki">
                                                                    Laki Laki
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?= $data['kelamin'] == 'P' ? 'checked' : '' ?> name="jk" value="P" id="perempuan">
                                                                <label class="form-check-label" for="perempuan">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <tr>
                                    <td><?php echo $nomer++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['lahir']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['telepon']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['kelamin']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $data['id'] ?>">
                                            Edit
                                        </button>
                                        <a class="btn btn-danger" href="./logic/hapus.php?id=<?php echo $data['id'];
                                                                                        ?>">Hapus</a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            </br></br>
        </div>
    </div>
    </div>



</body>

<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/jquery.ui.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        $('#lahir').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    })
</script>
</body>

</html>