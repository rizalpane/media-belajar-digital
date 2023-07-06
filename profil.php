<?php
error_reporting(0);
session_start();
if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}
// source
include "./source/execution/connection.php";
$students = mysqli_query($connection, "select * from users ORDER BY id DESC");
$data = mysqli_fetch_array($students)
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

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
    <!-- profil -->
    <div class="row g-0 mt-5">
        <div class="col-4">
            <center>
                <img class="rounded-circle border img-fluid" width="400px" height="400px" src="./source/profil/man.png" alt="profile">';
            </center>
        </div>
        <div class="col-8 ">
            <div class="container-fluid ">
                <h1>PROFIL SISWA</h1><br>
                <div class="input-group mb-5 ">
                    <span style="width:10rem ;" class="input-group-text bg-info fw-bold">Nama Siswa</span>
                    <input type="text" aria-label="name" value="<?php echo $data['username']; ?>" class="form-control fw-bold" disabled>
                </div>
                <div class="input-group mb-5 ">
                    <span style="width:10rem ;" class="input-group-text bg-info fw-bold">Kelas</span>
                    <input type="text" aria-label="name" value="<?php echo $data['kelas']; ?>" class="form-control fw-bold" disabled>
                </div>
                <div class="input-group mb-5 ">
                    <span style="width:10rem ;" class="input-group-text bg-info fw-bold">Gender</span>
                    <input type="text" aria-label="name" value="<?php echo $data['gender']; ?>" class="form-control fw-bold" disabled>
                </div>
                <div class="input-group mb-5 ">
                    <span style="width:10rem ;" class="input-group-text bg-info fw-bold">Status</span>
                    <input type="text" aria-label="name" value="Online" class="form-control fw-bold" disabled>
                </div>
            </div>

        </div>
    </div>
</body>

</html>