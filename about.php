<?php
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
    <title>About Me</title>

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


    <div class="row  g-0 mt-5">
        <div class="col">
            <center><img class="bg-light rounded-circle  mt-5" width="350px" height="350px" src="./source/profil/girl.png" alt=""></center>
            <h1 class="mt-3 text-center fw-bold">Dedek Serly Ramadani</h1>

            <center>
                <div class="btn-group w-75 container-fluid" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-warning"><i class="bi bi-instagram"></i> Instagram</button>
                    <button type="button" class="btn btn-danger"><i class="bi bi-pinterest"></i> Pinteres</button>
                </div>
            </center>
        </div>
        <div class="col ">
            <div class="p-3 mx-3 mb-2 bg-light text-dark">

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">NIM</span>
                    <input type="text" aria-label="name" value="5183151017" class="border-light form-control bg-white fw-bold  text-center" disabled>
                </div>

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">PRODI</span>
                    <input type="text" aria-label="name" value="Pendidikan Teknologi Informatika dan Komputer" class="border-light form-control bg-white fw-bold  text-center" disabled>
                </div>

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">JURUSAN</span>
                    <input type="text" aria-label="name" value="Pendidikan Teknik Elektro" class="border-light form-control bg-white fw-bold  text-center" disabled>
                </div>

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">FAKULTAS</span>
                    <input type="text" aria-label="name" value="Teknik" class="border-light form-control bg-white fw-bold text-center" disabled>
                </div>

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">ANGKATAN</span>
                    <input type="text" aria-label="name" value="2018" class="border-light form-control bg-white fw-bold  text-center" disabled>
                </div>

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">DOSEN </span>
                    <input type="text" aria-label="name" value="Harvei Desmon Hutahaean, S.Kom., M.Kom., IPM" class="border-light form-control bg-white fw-bold  text-center" disabled>
                </div>

                <div class="input-group  mb-3 ">
                    <span style="width:10rem ;" class="input-group-text border-light bg-info fw-bold me-1 rounded-5 text-center">NIP</span>
                    <input type="text" aria-label="name" value="1984021120190310009" class="border-light form-control bg-white fw-bold  text-center" disabled>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info mt-3 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-question-circle-fill fw-bold"> BANTUAN</i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">MENU BANTUAN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fw-bold">Jika terdapat kendala pada web media pembelajaran, silahkan hubungi pengembang untuk tindak lebih lanjut.</p>
                            <p><i class="bi bi-telephone-fill"></i> : 0813 7628 1347</p>
                            <p><i class="bi bi-envelope-fill"></i> : <code> dedekserly22@gmail.com</code></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./source/js/bootstrap.js"></script>
</body>

</html>