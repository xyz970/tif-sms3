<?php
require('./koneksi.php');
session_start();
if (isset($_POST['login'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['email']))) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        // $data = $crud->login($email, $password);

        $sql = "SELECT * FROM `user_detail` WHERE `user_email` = '" . $email . "' && `user_password` = '" . $password . "' limit 1";
        $data = $koneksi->query($sql);
        $row = mysqli_fetch_assoc($data);

        if (!$data) {
            header("Location: ./login.php");
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['level'] = $row['level'];
            $_SESSION['name'] = $row['user_fullname'];
            header("Location: ./home.php");
        }
    }
}
?>
<!-- <script>alert()</script> -->
<style>
    .card {
        padding: 3rem 3rem 3rem 3rem;
        border-color: grey;

        /* display: flex; */
        border-radius: 3rem;
    }

    .center {
        margin: auto;
        justify-items: center;
        text-align: center;
        align-self: center;
    }
</style>
<div class="card center">
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
</div>