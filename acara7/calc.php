<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap.css">
    <title>Kalkulator</title>
</head>

<body>
    <div style="width: 500px; height: 500px; padding-top: 10rem;" class="mx-auto">
        <?php

        if (isset($_POST['submit'])) {
            $input = $_POST['angka1'];
            $input2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            $calc = new Calc;
            $calc->setInput1($input);
            $calc->setInput2($input);
            if ($operator == '*') {
                echo '<div class="alert alert-primary dark alert-dismissible fade show" role="alert"><strong>' . $calc->kali($input, $input2) . ' </strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>';
            } elseif ($operator == '/') {
                echo '<div class="alert alert-primary dark alert-dismissible fade show" role="alert"><strong>' . $calc->bagi($input, $input2) . ' </strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>';
            } elseif ($operator == '+') {
                echo '<div class="alert alert-primary dark alert-dismissible fade show" role="alert"><strong>' . $calc->tambah($input, $input2) . ' </strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>';
            } else if ($operator == '-') {
                echo '<div class="alert alert-primary dark alert-dismissible fade show" role="alert"><strong>' . $calc->kurang($input, $input2) . ' </strong>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>';
            } else {
                echo '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Error!! </strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
      </div>';
            }
        }
        ?>
        <div class="card">
            <div class="card-body">

                <form action="calc.php" method="POST">
                    <div class="mb-3">
                        <label for="angka1" class="form-label">Angka 1</label>
                        <input type="text" class="form-control" name="angka1">
                    </div>
                    <div class="mb-3">
                        <label for="operator" class="form-label">Operator</label>
                        <select type="text" class="form-select" name="operator">
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                            <option value="/"> / </option>
                            <option value="*"> x </option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="angka2" class="form-label">Angka 2</label>
                        <input type="text" class="form-control" name="angka2">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php

class Calc
{
    var $angka1, $angka2;
    // public function __construct($angka1,  $angka2) {
    //     $this->angka1 = $angka1;
    //     $this->angka2 = $angka2;
    // }
    public function setInput1($input1)
    {
        $this->angka1 = $input1;
    }
    public function setInput2($input2)
    {
        $this->angka2 = $input2;
    }

    public function tambah($angka1, $angka2)
    {
        $hasil = $angka1 + $angka2;
        return $hasil;
    }
    public function kurang($angka1, $angka2)
    {
        $hasil = $angka1 - $angka2;
        return $hasil;
    }
    public function bagi($angka1, $angka2)
    {

        $hasil = $angka1 / $angka2;
        return $hasil;
    }

    public function kali($angka1, $angka2)
    {

        $hasil = $angka1 * $angka2;
        return $hasil;
    }
}


?>