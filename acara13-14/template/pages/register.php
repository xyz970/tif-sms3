<?php
require('./../../koneksi.php');
// echo $_POST['register'];
if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    $sql = "INSERT INTO `user_detail`(`user_email`, `user_password`, `user_fullname`, `level`) 
        VALUES ('".$email."','".$password."','".$nama."','".$level."')";
    $koneksi->query($sql);
    header("Location: ./login.php");
    

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'header.php'; ?>

    <title>Register</title>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user" action="register.php" method="POST">
                                    <div class="form-group">
                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama..">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <select name="level" id="level" class="form-control">
                                                <option value="-"> - </option>
                                                <?php
                                                require './../../koneksi.php';
                                                $data = $koneksi->query("select * from level_detail");
                                                if ($data->num_rows > 0) {
                                                    // var_dump($row)
                                                    while ($row = mysqli_fetch_assoc($data)) {

                                                        echo ' <option value= "' . $row['id_level'] . '">' . $row['level'] . ' </option>';
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button name="register" class="btn btn-primary btn-block">
                                            Register
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

<?php include 'footer.php'; ?>
<script>
    ($(
        function() {
            $('#submit').attr('disabled', true);
        }
    ))
    $('#level').on('change', function() {
        if (this.value == "-") {
            $('#submit').attr('disabled', true);
        } else {
            $('#submit').attr('disabled', false);
        }
    })
</script>

</html>
