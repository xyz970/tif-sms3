<?php
include './koneksi.php';
// echo "<pre>";
// print_r($_FILES);
// echo "<pre>";
// if (isset($_POST['submit'])) {
//     $limit = 10 * 1024 * 1024;
//     $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
//     $jumlahFile = count($_FILES['foto']['name']);
//     for ($x = 0; $x < $jumlahFile; $x++) {
//         $namafile = $_FILES['foto']['name'];
//         $tmp = $_FILES['foto']['tmp_name'];
//         $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
//         $ukuran = $_FILES['foto']['size'];
//         if ($ukuran > $limit) {
//             header("location:index.php?alert=gagal_ukuran");
//         } else {
//             if (!in_array($tipe_file, $ekstensi)) {
//                 header("location:index.php?alert=gagal_ektensi");
//             } else {
//                 move_uploaded_file($tmp,'file/'. date('d-m-Y') . '-' . $namafile);
//                 $x = date('d-m-Y') . '-' . $namafile;
//                 mysqli_query($koneksi, "INSERT INTO gambar VALUES(NULL, '$x')");
//                 header("location:index.php?alert=simpan");
//             }
//         }
//     }
// }

// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "images/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}
?>