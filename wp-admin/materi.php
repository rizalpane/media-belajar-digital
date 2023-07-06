<?php
include './source/execution/connection.php';
session_start();
// error_reporting(0);

if (isset($_POST['Submiteditmateri'])) {

    $id = $_POST['id'];

    $vone = $_POST['vone'];
    $vtwo = $_POST['vtwo'];
    $pustakaone = $_POST['pustakaone'];
    $pustakatwo = $_POST['pustakatwo'];
    $pustakatree = $_POST['pustakatree'];

    $accept = array('pdf');
    $fpdf    = $_FILES['fpdf']['name'];
    $xpdf        = explode('.', $fpdf);
    $ekstension    = strtolower(end($xpdf));
    $size        = $_FILES['fpdf']['size'];
    $path    = $_FILES['fpdf']['tmp_name'];


    if (in_array($ekstension, $accept) === true) {
        if ($size < 1044070) {
            $files    = glob('./source/materi/*.pdf');
            foreach ($files as $file) {
                if (is_file($file))
                    unlink($file);
            }
            move_uploaded_file($path, './source/materi/' . $fpdf);
        }
    }
    $updatequerry = mysqli_query($connection, "UPDATE materils SET id='$id',fpdf='$fpdf',vone='$vone', vtwo='$vtwo', pustakaone='$pustakaone', pustakatwo='$pustakatwo', pustakatree='$pustakatree' WHERE id='$id'");
    if ($updatequerry) {
        header('Location: materi.php');
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
    <title>Materi</title>
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

    <h1 class="text-center m-5">MATERI</h1>

    <div class="container-fluid">
        <table class="table">
            <?php
            $data = mysqli_query($connection, "select * from materils");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td class="fw-bold">Info Materi :</td>
                    <td><?php echo $d['fpdf']; ?></td>
                    <td>
                        <button type="button" class="border-0 badge text-bg-warning" data-bs-toggle="modal" data-bs-target="#staticv1">
                            Vidio 1
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticv1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Vidio 1</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="ratio ratio-16x9">
                                            <iframe width="560" height="315" src="<?php echo $d['vone']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <button type="button" class="border-0 badge text-bg-warning" data-bs-toggle="modal" data-bs-target="#staticv2">
                            Vidio 2
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticv2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Vidio 2</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="ratio ratio-16x9">
                                            <iframe width="560" height="315" src="<?php echo $d['vtwo']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <button type="button" class="border-0 badge text-bg-warning" data-bs-toggle="modal" data-bs-target="#staticv3">
                            Daftar Pustaka
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticv3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Pustaka</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <?php echo $d['pustakaone']; ?>
                                                <span class="badge bg-primary rounded-pill">1</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <?php echo $d['pustakatwo']; ?>
                                                <span class="badge bg-primary rounded-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <?php echo $d['pustakatree']; ?>
                                                <span class="badge bg-primary rounded-pill">3</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <button type="button" class="btn btn-sm btn-warning fw-bold" data-bs-toggle="modal" data-bs-target="#modal<?php echo $d['id']; ?>">
                            <i class="bi bi-pencil-square "></i>
                        </button>
                        <!-- Modal tambah materi -->
                        <div class="modal fade" id="modal<?php echo $d['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Materi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                            <div class=" col-md-12">
                                                <label for="inputanmateri" class="form-label">File Materi <span class="text-danger">(*.pdf)</span></label>
                                                <Input value="./source/materi/<?php echo $d['fpdf']; ?>" name="fpdf" Type="File" class="form-control" Accept="Application/Pdf" id="inputanmateri">
                                            </div>
                                            <div class=" col-md-6">
                                                <label for="inputvidio" class="form-label">Vidio 1 <span class="text-danger">(Frame)</span> </label>
                                                <input value="<?php echo $d['vone']; ?>" name="vone" type="text" class="form-control" id="inputvidio1">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputvidio" class="form-label">Vidio 2 <span class="text-danger">(Frame)</span></label>
                                                <input value="<?php echo $d['vtwo']; ?>" name="vtwo" type="text" class="form-control" id="inputvidio2">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputdaftarisione" class="form-label">Daftar Isi</label>
                                                <input value="<?php echo $d['pustakaone']; ?>" name="pustakaone" type="text" class="form-control" id="inputdaftarisione">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputdaftarisitwo" class="form-label">Daftar Isi</label>
                                                <input value="<?php echo $d['pustakatwo']; ?>" name="pustakatwo" type="text" class="form-control" id="inputdaftarisitwo">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputdaftarisitree" class="form-label">Daftar Isi</label>
                                                <input value="<?php echo $d['pustakatree']; ?>" name="pustakatree" type="text" class="form-control" id="inputdaftarisitree">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="Submiteditmateri" class="btn btn-primary">Tambahkan</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>

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