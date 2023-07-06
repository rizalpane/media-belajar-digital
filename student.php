<?php
error_reporting(0);
session_start();
if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}

// source
include "./source/execution/connection.php";
?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

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
    <!-- judul -->
    <div class="bg-info text-center p-5">
        <h1>MEDIA PEMBELAJARAN</h1>
        <H4>INFORMATIKA</H4>
    </div>
    <!-- isi menu -->
    <div class="row row-cols-1 row-cols-md-3 g-3 container-fluid my-5">

        <a class="none transform-zoom" href="materi.php">
            <div class="col">
                <div class="card border-white">
                    <center><img src="./source/img/elearning.png" class="size-img" alt="image"></center>
                    <div class="card-body ">
                        <h5 class="card-title text-center text-dark">MATERI</h5>
                    </div>
                </div>
            </div>
        </a>
        <a class="none transform-zoom" href="soal.php">
            <div class="col">
                <div class="card border-white">
                    <center><img src="./source/img/essay.png" class="size-img" alt="image"></center>
                    <div class="card-body">
                        <h5 class="card-title text-center text-dark">LATIHAN</h5>
                    </div>
                </div>
            </div>
        </a>
        <a class="none transform-zoom" href="about.php">
            <div class="col">
                <div class="card border-white">
                    <center><img src="./source/img/medal.png" class="size-img" alt="image"></center>
                    <div class="card-body">
                        <h5 class="card-title text-center text-dark">ABOUT ME</h5>
                    </div>
                </div>
            </div>
        </a>
    </div>
</body>

</html>