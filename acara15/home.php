<?php
// require('./../../koneksi.php');
require('./koneksi.php');
session_start();
$email = $_SESSION['email'];
$level = $_SESSION['level'];
$name = $_SESSION['name'];
$result = $koneksi->query('select * from user_detail');

if (!$email ) {
    header('Location: login.php');
}
if ($level == 1 ) {
    $dis = "";
} else {
    $dis = "disabled";
}

?>

<style>
    .card {
        padding: 3rem 3rem 3rem 3rem;
        border-color: grey;
        border-radius: 3rem;
    }

    .center {
        display: flex;
        margin: auto;
        text-align: center;
        align-self: center;
    }
</style>

<h2>Selamat datang <?=$name?></h2>
<button onclick="location.href = 'logout.php'">Logout</button>


<div class="card center">
    <table border="1" id="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Level</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['user_fullname'] ?></td>
                    <td><?= $row['level'] ?></td>
                    <td><?= $row['user_email'] ?></td>
                    <td>********</td>
                    <td>
                        <button <?=$dis?> onclick="location.href = 'hapus.php?id=<?=$row['id']?>'" class="btn btn-danger">Hapus</button>
                        |
                        <button <?=$dis?>  onclick="location.href = 'update.php?id=<?=$row['id']?>'" class="btn btn-primary">Update</button>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>
