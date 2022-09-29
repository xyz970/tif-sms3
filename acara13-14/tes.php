<?php
require './koneksi.php';
$data = $koneksi->query("select * from level_detail");
$row = $data->fetch_assoc();
if ($data->num_rows > 0) {
    // var_dump($row)
    while ($row) {

        echo ' <option value= "' . $row['id_level'] . '">' . $row['level'] . ' </option>';
    }
}
