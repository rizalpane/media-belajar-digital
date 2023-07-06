<?php
include './source/execution/connection.php';
session_start();
error_reporting(0);

if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}

if (isset($_POST['Submitsoal'])) {
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $kunci = $_POST['kunci'];
    $tanggal = $_POST['tanggal'];
    $aktif = $_POST['aktif'];
    $addquerry = mysqli_query($connection, "INSERT INTO soals(soal,a,b,c,d,kunci,tanggal,aktif) VALUES('$soal','$a','$b','$c','$d','$kunci','$tanggal','$aktif')");
    if ($addquerry) {
        header('Location: soal.php');
    }
}

if (isset($_POST['Submiteditsoal'])) {
    $id = $_POST['id'];
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $kunci = $_POST['kunci'];
    $tanggal = $_POST['tanggal'];
    $aktif = $_POST['aktif'];
    $updatequerry = mysqli_query($connection, "UPDATE soals SET id='$id',soal='$soal', a='$a', b='$b', c='$c' , d='$d', kunci='$kunci', tanggal='$tanggal', aktif='$aktif' WHERE id='$id'");
    if ($updatequerry) {
        header('Location: soal.php');
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

    <h1 class="text-center m-5">SOAL</h1>

    <!-- nav -->
    <ul class="nav justify-content-end mx-5 my-5">
        <li class="nav-item">
            <!-- button modal tambah soal-->
            <button type="button" class="btn btn-sm btn-info fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Soal <i class="bi bi-plus-circle-fill"></i>
            </button>

            <!-- Modal tambah soal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Soal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" class="row g-3 ">
                                <div>
                                    <label for="inputdate" class="form-label">Tanggal</label>
                                    <input class="form-control" id="inputdate" type="date" name="tanggal" value="<?php date('d / M / y'); ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputsoal" class="form-label">Soal</label>
                                    <input type="text" name="soal" class="form-control" id="inputsoal">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputa" class="form-label">Jawaban A</label>
                                    <input type="text" name="a" class="form-control" id="inputa">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputb" class="form-label">Jawaban B</label>
                                    <input type="text" name="b" class="form-control" id="inputb">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputc" class="form-label">Jawaban C</label>
                                    <input type="text" name="c" class="form-control" id="inputc">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputd" class="form-label">Jawaban D</label>
                                    <input type="text" name="d" class="form-control" id="inputd">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputkunci" class="form-label">Kunci JAwaban</label>
                                    <select id="inputkunci" name="kunci" class="form-select">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                        <option value="d">D</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputstatus" class="form-label">Status</label>
                                    <select id="inputstatus" name="aktif" class="form-select">
                                        <option value="Y">Aktif</option>
                                        <option value="N">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-info w-100 fw-bold" name="Submitsoal" value="Tambahkan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </li>
    </ul>

    <!-- table -->
    <div class="container-fluid  ">
        <table class="table">
            <tr>
                <th>NO</th>
                <th style="width:500px;">SOAL</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>KUNCI</th>
                <th>STATUS</th>
                <th style="width:100px;">AKSI</th>
                <th></th>
            </tr>
            <?php
            $no = 1;
            $data = mysqli_query($connection, "select * from soals");
            while ($datas = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td class="fw-bold"><?php echo $datas['soal']; ?></td>
                    <td><?php echo $datas['a']; ?></td>
                    <td><?php echo $datas['b']; ?></td>
                    <td><?php echo $datas['c']; ?></td>
                    <td><?php echo $datas['d']; ?></td>
                    <td><span class="badge rounded-pill text-bg-info"><?php echo strtoupper($datas['kunci']); ?></span></td>
                    <td><span class="badge rounded-pill text-bg-primary"><?php echo $datas['aktif']; ?></span></td>
                    <td>
                        <!-- button modal tambah soal-->
                        <button type="button" class="btn btn-sm btn-warning fw-bold" data-bs-toggle="modal" data-bs-target="#modal<?php echo $datas['id']; ?>">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <!-- Modal tambah soal-->
                        <div class="modal fade" id="modal<?php echo $datas['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Soal </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" class="row g-3 ">
                                            <input type="hidden" name="id" value="<?php echo $datas['id'] ?>">
                                            <div>
                                                <label for="inputdate" class="form-label">Tanggal</label>
                                                <input class="form-control" id="inputdate" type="date" name="tanggal" value="<?php echo $datas['tanggal']; ?>">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="inputsoal" class="form-label">Soal</label>
                                                <input type="text" name="soal" class="form-control" id="inputsoal" value="<?php echo $datas['soal']; ?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputa" class="form-label">Jawaban A</label>
                                                <input type="text" name="a" class="form-control" id="inputa" value="<?php echo $datas['a']; ?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputb" class="form-label">Jawaban B</label>
                                                <input type="text" name="b" class="form-control" id="inputb" value="<?php echo $datas['b']; ?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputc" class="form-label">Jawaban C</label>
                                                <input type="text" name="c" class="form-control" id="inputc" value="<?php echo $datas['c']; ?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputd" class="form-label">Jawaban D</label>
                                                <input type="text" name="d" class="form-control" id="inputd" value="<?php echo $datas['d']; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputkunci" class="form-label">Kunci JAwaban</label>
                                                <select id="inputkunci" name="kunci" class="form-select">
                                                    <option value="<?php echo $datas['kunci']; ?>" selected><?php echo strtoupper($datas['kunci']); ?></option>
                                                    <option value="a">A</option>
                                                    <option value="b">B</option>
                                                    <option value="c">C</option>
                                                    <option value="d">D</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputstatus" class="form-label">Status</label>
                                                <select id="inputstatus" name="aktif" class="form-select">
                                                    <option value="<?php echo $datas['aktif']; ?>" selected><?php if ($datas['aktif'] == "Y") {
                                                                                                                echo "Aktif";
                                                                                                            } else {
                                                                                                                echo "Tidak Aktif";
                                                                                                            } ?></option>
                                                    <option value="Y">Aktif</option>
                                                    <option value="N">Tidak Aktif</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <input type="submit" class="btn btn-info w-100 fw-bold" name="Submiteditsoal" value="Tambahkan">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <a style="text-decoration: none;" class="btn btn-danger btn-sm" href="dsoal.php?id=<?php echo $datass['id']; ?>"><i class="bi bi-trash-fill"></i></a>
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