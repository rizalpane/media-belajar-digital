<?php
error_reporting(0);
session_start();
if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}

// source
include "./source/execution/connection.php";


if (isset($_POST['submit'])) {
    if (empty($_POST['pilihan'])) {
?>
        <script language="JavaScript">
            alert('Oops! Serius. Anda tidak mengerjakan soal apapun ...');
            document.location = './';
        </script>
<?php
    }

    $pilihan    = $_POST["pilihan"];
    $id_soal    = $_POST["id"];
    $jumlah        = $_POST["jumlah"];

    $score    = 0;
    $benar    = 0;
    $salah    = 0;
    $kosong   = 0;

    for ($i = 0; $i < $jumlah; $i++) {
        $nomor    = $id_soal[$i];

        if (empty($pilihan[$nomor])) {
            $kosong++;
        }
        // jika memilih
        else {
            $jawaban    = $pilihan[$nomor];
            $query    = mysqli_query($connection, "SELECT * FROM soals WHERE id='$nomor' AND kunci='$jawaban'");
            $cek    = mysqli_num_rows($query);

            if ($cek) {
                $benar++;
            } else {
                $salah++;
            }
        }
        $hitung = mysqli_query($connection, "SELECT * FROM soals WHERE aktif='Y'");
        $jumlah_soal    = mysqli_num_rows($hitung);
        $score    = 100 / $jumlah_soal * $benar;
    }
    $addnilais = mysqli_query($connection, "INSERT INTO nilais values('','$_SESSION[username]','$score')");
}

?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal</title>

    <!-- css -->
    <link rel="stylesheet" href="./source/css/master.css">
    <link rel="stylesheet" href="./source/css/bootstrap.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-info">
    <div class="card box text-bg-light text-center position-absolute top-50 start-50 translate-middle">
        <div class="card-body">
            <h4 class="p-3 ">SELAMAT NILAI KAMU</h4>
            <hr>
            <h1 class=" fw-bold"><?php echo $score;  ?></h1>

            <div class="d-flex">
                <div class=" flex-fill p-3 fw-bolder text-bg-success">BENAR : <?php echo $benar; ?></div>
                <div class=" flex-fill p-3 fw-bolder text-bg-danger">SALAH : <?php echo $salah;  ?></div>
            </div>
            <a class="btn btn-info my-2 w-100" href="student.php">SELESAI</a>
        </div>
    </div>
</body>

</html>