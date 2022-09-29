<?php
require('./../logic.php');
$crud = new Crud();
session_start();
if (isset($_POST['login'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['email']))) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = $crud->login($email,$password);
        
        // $sql = "SELECT * FROM `user_detail` WHERE `user_email` = '" . $email . "' && `user_password` = '" . $password . "' limit 1";
        // $data = $koneksi->query($sql);
        // $row = mysqli_fetch_assoc($data);
       

        if (!$data) {
            $_SESSION['email'] = $email;
            header("Location: ./login.php");
        } else {
            header("Location: ./home.php");
        }
    }
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

    <title>Login</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form class="user" action="login.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" required name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                                        </div>


                                        <button name="login" type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
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

</html>