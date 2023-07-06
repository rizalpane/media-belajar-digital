<?php
include './source/execution/connection.php';
session_start();
error_reporting(0);

if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}

if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}

if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $addquerry = mysqli_query($connection, "INSERT INTO users(username,kelas,gender,password) VALUES('$username','$kelas','$gender','$password')");
    if ($addquerry) {
        header('Location: teacher.php');
    }
}

?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

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
                <a class="nav-link none text-dark fw-bold" href="teacher.php"><i class="bi bi-house-fill"></i> SISWA</a>
            </li>
            <li class="nav-item transform-zoom">
                <a class="nav-link none text-dark fw-bold" href="soal.php"><i class="bi bi-easel-fill"></i></i> SOAL</a>
            </li>
            <li class="nav-item transform-zoom">
                <a class="nav-link none text-dark fw-bold" href="materi.php"><i class="bi bi-file-earmark-fill"></i> MATERI</a>
            </li>
            <li class="nav-item transform-zoom">
                <a class="nav-link none text-dark fw-bold" href="exit.php"><i class="bi bi-door-closed-fill"></i> LOGOUT</a>
            </li>
        </ul>
    </div>

    <h1 class="text-center m-5">SISWA</h1>

    <ul class="nav justify-content-end">
        <li class="nav-item m-5">
            <button type="button" class="btn btn-sm btn-info fw-bold" data-bs-toggle="modal" data-bs-target="#modaltambahsiswa">
                Tambah Siswa <i class="bi bi-plus-circle-fill"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modaltambahsiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" class="row g-3 ">
                                <div class="col-md-6">
                                    <label for="inputUsername" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="inputUsername">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputKelas" class="form-label">kelas</label>
                                    <input type="text" name="kelas" class="form-control" id="inputkelas">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Gender</label>
                                    <select id="inputState" name="gender" class="form-select">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-info w-100 fw-bold" name="Submit" value="Tambahkan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="container-fluid">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>USERNAME</th>
                <th>KELAS</th>
                <th>GENDER</th>
                <th>PASSWORD</th>
                <th></th>
            </tr>
            <?php
            $no = 1;
            $data1 = mysqli_query($connection, "select * from users");
            while ($d = mysqli_fetch_array($data1)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td><?php echo $d['gender']; ?></td>
                    <td><?php echo $d['password']; ?></td>
                    <td>
                        <!-- <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> -->
                        <a style="text-decoration: none;" class="btn btn-info" href="dsiswa.php?id=<?php echo $d['id']; ?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <script src="./source/js/bootstrap.js"></script>
</body>

</html>