<?php
include './source/execution/connection.php';
error_reporting(0);
session_start();
if ($_SESSION["username"] != true) {
    header("Location: exit.php");
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

<body>
    <!-- menu -->
    <div class="bg-info">
        <ul class="nav justify-content-end">
            <li class="nav-item transform-zoom">
                <a class="nav-link none text-dark fw-bold" href="student.php"><i class="bi bi-house-fill"></i> HOME</a>
            </li>
            <li class="nav-item transform-zoom">
                <a class="nav-link none text-dark fw-bold" href="profil.php"><i class="bi bi-person-fill"></i> PROFIL</a>
            </li>
            <li class="nav-item transform-zoom">
                <a class="nav-link none text-dark fw-bold" href="exit.php"><i class="bi bi-door-closed-fill"></i> LOGOUT</a>
            </li>
        </ul>
    </div>
    <div class="text-center my-5">
        <h1>LATIHAN</h1>
    </div>
    <!-- soal -->
    <div class="container">
        <table class="table border-white">
            <tbody>
                <?php
                $query    = mysqli_query($connection, "SELECT * FROM soals WHERE aktif='Y' ORDER BY id DESC");
                $jumlah = mysqli_num_rows($query);
                $no = 0;
                while ($data = mysqli_fetch_array($query)) {
                    $no++
                ?>
                    <form action="jawab.php" method="POST">
                        <input type="hidden" name="id[]" value="<?php echo $data['id']; ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                        <tr>
                            <td class="fw-bold"><?php echo $no ?>.</td>
                            <td class="fw-bold"><?php echo $data['soal']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>A. <input class="radio" name="pilihan[<?php echo $data['id'] ?>]" type="radio" value="A"><?php echo $data['a']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>B. <input class="radio" name="pilihan[<?php echo $data['id'] ?>]" type="radio" value="B"><?php echo $data['b']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>C. <input class="radio" name="pilihan[<?php echo $data['id'] ?>]" type="radio" value="C"><?php echo $data['c']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>D. <input class="radio" name="pilihan[<?php echo $data['id'] ?>]" type="radio" value="D"><?php echo $data['d']; ?></td>
                        </tr>

                    <?php
                }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn-info btn w-100 fw-bold" type="submit" name="submit" value="SELESAI" onclick="return confirm('Perhatian! Apakah Anda sudah yakin dengan semua jawaban Anda?')">
                        </td>
                    </tr>
                    </form>
            </tbody>
        </table>
    </div>
    <!-- js -->
    <script>

    </script>
</body>

</html>