

<head>
    <title>www.jti.com - Upload multi file menggunakan php mysqli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">UPLOAD MULTI FILE PHP</h2>
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == "gagal_ukuran") {
        ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ukuran File Terlalu Besar
                </div>
            <?php
            } elseif ($_GET['alert'] == "gagal_ektensi") {
            ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
                </div>
            <?php
            } elseif ($_GET['alert'] == "simpan") {
            ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Gambar Berhasil Disimpan
                </div>
        <?php
            }
        }
        ?>
        <form action="logic.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Foto :</label>
                <input type="file" name="foto[]" required="required" multiple />
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>