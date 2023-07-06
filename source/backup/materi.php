<?php
error_reporting(0);
session_start();
if ($_SESSION["username"] != true) {
    header("Location: exit.php");
}
// source
include "./source/execution/connection.php";
?>
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
    <h1 class="text-center my-5">MATERI</h1>

    <div class="accordion container" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Sistem Komputer
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Sistem komputer</strong> adalah jaringan elemen-elemen yang saling berhubungan, berbentuk satu kesatuan untuk melaksanakan suatu tujuan pokok dan sistem tersebut. Tujuan pokok dan sistem komputer adalah mengolah data untuk menghasilkan informasi. Supaya tujuan pokok tersebut tercapai, maka harus ada elemen-elemen yang mendukungnya. Elemen-elemen dan sistem komputer adalah hardware, software, dan brainware.

                    <ol class="list-group list-group-numbered my-2">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <strong>Hardware</strong> (perangkat keras) adalah peralatan di sistem komputer yang secara fisik terlihat dan dapat dijamah, seperti monitor, keyboard, dan mouse.
                            </div>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <strong>Software</strong> (perangkat lunak) adalah program yang berisi perintah-perintah untuk melakukan pengolahan data. Ada tiga bagian utama dan software :
                                <ul class="list-group my-2">
                                    <li class="list-group-item"><strong>Sistem operasi</strong> : DOS, Linux, Windows, dan Mac</li>
                                    <li class="list-group-item"><strong>Bahasa pemrograman</strong> : Visual Basic, C++, Pascal, Java, dan Visual C.</li>
                                    <li class="list-group-item"><strong>Aplikasi</strong> : MS Office, Antivirus, Winamp, dan Mozilla</li>
                                </ul>
                            </div>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <strong>Brainware</strong> adalah manusia yang terlibat dalam mengoperasikan serta mengatur sistem komputer.
                            </div>
                        </li>
                    </ol>

                    Suatu proses pengolahan data terdiri dan 3 tahapan dasar yang disebut dengan siklus pengolahan data (data processing cycle), yaitu input, processing. dan output. Diagram dan siklus pengolahan data ini dapat dilihat di <code>Gambar 1.1</code> berikut ini.
                    <center><img src="./source/odrimg/alur.png" class=" img-fluid my-3" alt=""></center>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item"><strong>Input</strong> adalah masukan, yang dalam hal ini berupa data-data yang dimasukkan (diinput) ke dalam komputer. Input bisa berupa pengetikan huruf, pemindaian (scanning) gambar, scanning barcode, scanning kartu magnetik atau RFID, hasil foto, suara / rekaman, dan lain-lain.
                        </li>
                        <li class="list-group-item"><strong>Processing</strong> adalah pengolahan data itu sendiri, yang dilakukan oleh sistem komputer.
                        </li>
                        <li class="list-group-item"><strong>Output</strong> adalah keluaran yang disajikan oleh komputer. Output ini dapat berupa tampilan di layar monitor, hasil cetak, file data di media penyimpan (harddisk/Flashdisk atau cakram).</li>
                    </ol>
                </div>

                <div class="ratio ratio-16x9 my-3">
                    <iframe src="https://www.youtube.com/embed/fSGSzAYftz0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Sistem Bilangan
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Sistem Bilangan</strong> (number system) adalah suatu cara untuk mewakili besaran dari suatu item fisik. Sistem bilangan menggunakan basis ( base/ radix ) tertentu yang tergantung dari jumlah bilangan yang di gunakan. Konsep dasar sistem bilangan, senantiasa mempunyai Base (radix), absolute digit dan positional (place) value. Sistem bilangan yang banyak dipergunakan oleh manusia adalah sistem bilangan desimal, yaitu sistem bilangan yang menggunakan sepuluh macam simbol untuk mewakili suatu besaran. Sistem ini banyak digunakan karena manusia mempunyai sepuluh jari untuk dapat membantu perhitungan. Lain halnya dengan komputer, logika di komputer diwakili oleh bentuk elemen dua keadaan, yaitu off (tidak ada arus) dan on (ada arus). Konsep inilah yang dipakai dalam sistem bilangan biner yang mempunyai dua macam nilai untuk mewakili suatu besaran nilai ini. Selain sistem bilangan biner, komputer juga menggunakan sistem bilangan octal dan heksadesimal.
                    <br><br>
                    <strong>Sistem Bilangan Desimal</strong> adalah sistem bilangan yang memiliki sepuluh simbol, yaitu <code>0,1,2,3,4,5,6,7,8,</code> dan <code>9</code>. Sistem bilangan berbasis <code>10</code> karena memiliki <code>10</code> digit, yang setiap digitnya memiliki angka berbeda. Bentuk nilainya dapat berupa integer, desimal, atau pun pecahan. Bentuk nilai bilangan desimal dikategorikan menjadi sebagai berikut :
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Integer Desimal</div>
                                Integer desimal identik dengan nilai desimal yang bulat dnegan ciri berupa digit atau angka yang terletak disebelah kiri koma desimal. Digit berada di posisi berturut-turut disebelah kiri koma desimal dengan memiliki bobot <code>10<sup>0</sup>, 10<sup>1</sup>, 10<sup>2</sup>, 10<sup>3</sup>, 10<sup>4</sup></code>, dan seterusnya. Adapun absolut value sebagai nilai mutlak dari masing-masing digit bilangan dan position value (nilai tempat) sebagai penimbang (bobot) dengan masing-masing digit tergantung pada posisinya, dimana nilai basis dipangkatkan dengan urutan posisinya.
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Pecahan Desimal</div>
                                Pecahan desimal identik dengan nilai desimal yang mengandung pecahan di belakang koma atau bisa dinyatakan sebagai digit/angka yang terletak disebelah kanan titik desimal. Digit yang berada di posisi berturut-turut disebelah kanan koma desimal memiliki bobot <code>10<sup>-1</sup>, 10<sup>-2</sup>, 10<sup>-3</sup></code>, dan seterusnya.
                            </div>
                        </li>
                    </ol>
                    <br>
                    <strong>Sistem Bilangan Biner</strong> memiliki dua simbol yaitu <code>0</code> dan <code>1</code>. Sistem bilangan biner juga sering disebut sistem bilangan berbasis <code>2</code> karena memiliki dua bit. Setiap bit memiliki nilai tempat yang berbeda.
                    <br><br>
                    <strong>Sistem Bilangan Octal</strong> adalah sistem bilangan yang berbasis <code>8</code> yaitu <code>0, 1, 2, 3, 4, 5, 6,</code> dan <code>7.</code>
                    <br><br>
                    <strong>Sistem Bilangan Heksadesimal</strong> adalah sistem bilangan yang <code>berbasis 16</code>. Oleh karena itu ia memiliki enam belas digit, yaitu: <code>0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F.</code> Huruf-huruf <code>A, B, C, D, E,</code> dan <code>F</code> secara berturut-turut bernilai <code>10, 11, 12, 13, 14, 15.</code> Misalnya <code>456716</code> dan <code>2CE16</code> adalah contoh bilangan heksadesimal. Sistem bilangan heksadesimal mampu mengorganisasikan memori utama kedalam suatu bit yang terdiri dari <code>8 bit</code> (binary digit) dengan setiap bit digunakan untuk menyimpan karakter alfanumerik yang terbagi dalam dua grup dengan setiap bagian terdiri atas <code>4 bit</code>. Jika satu byte dibentuk dari dua grup <code>4 bit</code> (nibble), maka bit pertama sebagai high-ordernibble dan 4 bit sisanya disebut low-order nibble. Jika komputer menangani bilangan biner yang diorganisasikan dalam bentuk grup <code>4 bit</code> akan memudahkan dalam pemakaian simbol yang mewakili empat digit biner sekaligus.
                    <div class="mt-3">
                        <strong>1. Metode Konversi Bilangan Desimal ke Bilangan Biner</strong>
                        <p>Metode sisa (remainder method) dilakukan dengan membagi bilangan desimal ke basis bilangan biner, setelah itu hasilnya dibulatkan kebawah dan sisa hasil pembagiannya disimpan. Pembulatan dilakukan ke bawah dan sisa hasil pembagiannya disimpan. Pembulatan dilakukan kebawah hingga nilainya mencapai nol. Sisa pembagiaannya diurutkan dari bawah hingga paling awal. </p>
                        <p><strong>Contohnya :</strong></p>
                        <p>Ubahlah 5 <sub>(10 )</sub> ........................................................... <sub>(2)</sub></p>

                        <table class="table w-25">
                            <tr>
                                <td>45</td>
                                <td>:</td>
                                <td>2</td>
                                <td>=</td>
                                <td>22</td>
                                <td>sisa</td>
                                <td><strong>1</strong></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>:</td>
                                <td>2</td>
                                <td>=</td>
                                <td>11</td>
                                <td>sisa</td>
                                <td><strong>0</strong></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>:</td>
                                <td>2</td>
                                <td>=</td>
                                <td>5</td>
                                <td>sisa</td>
                                <td><strong>1</strong></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>:</td>
                                <td>2</td>
                                <td>=</td>
                                <td>2</td>
                                <td>sisa</td>
                                <td><strong>1</strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>:</td>
                                <td>2</td>
                                <td>=</td>
                                <td>1</td>
                                <td>sisa</td>
                                <td><strong>0</strong></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>sisa</td>
                                <td><strong>1</strong></td>
                            </tr>
                        </table>
                        <p>maka di dapatkan hasil <strong>101101</strong></p>


                        <strong>2. Metode Konversi Bilangan Biner ke Bilangan Desimal</strong>
                        <p>Untuk melakukan konversi bilangan biner ke desimal dilakukan dengan cara mengalikan bilangan biner yang ingin dikonversikan kedalam basis bilangan biner yang dipangkatkan <code>0, 1, 2, 3, 4,</code> dan seterusnya. Hal yang perlu diperhatikan adalah proses dimulai dari kanan.
                        </p>
                        <p><strong>Contohnya :</strong></p>
                        <p>Ubahlah 101101 <sub>(2 )</sub> ........................................................... <sub>(10)</sub></p>
                        <p>101101 <sub>(2 )</sub> = 1x2<sub>5</sub> + 0x2<sub>4</sub> + 1x2<sub>3</sub> + 1x2<sub>2</sub> + 0x2<sub>1</sub> + 1x2<sub>0</sub> </p>
                        <p>101101 <sub>(2 )</sub> = 1x32 + 0 + 16 + 8 + 4 + 0 + 1 </p>
                        <p>101101 <sub>(2 )</sub> = 45<sub>10</sub> </p>

                        <strong>3. Metode Konversi Bilangan Desimal ke Bilangan Oktal</strong>
                        <p>Untuk mengkonversikan bilangan desimal kebilangan oktaI dapat dipergunakan remainder method dengan pembaginya adalah basis dari bilangan oktal tersebut, yaitu 8. Misalnya bilangan desimal 385.
                        </p>
                        <p><strong>Contohnya :</strong></p>
                        <p>Ubahlah 385 <sub>(10)</sub> ........................................................... <sub>(8)</sub></p>
                        <table class="table w-25">
                            <tr>
                                <td>385</td>
                                <td>:</td>
                                <td>8</td>
                                <td>=</td>
                                <td>48</td>
                                <td>sisa</td>
                                <td><strong>1</strong></td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>:</td>
                                <td>8</td>
                                <td>=</td>
                                <td>6</td>
                                <td>sisa</td>
                                <td><strong>0</strong></td>
                            </tr>
                        </table>
                        <p>maka di dapatkan hasil <strong>601</strong></p>

                        <strong>4.Metode Konversi Bilangan Desimal ke Bilangan Heksadesimal</strong>
                        <p>Dengan menggunakan remainder method, dengan pembaginya adalah basis dari bilangan heksadesimal, yaitu 16, maka bilangan desimal dapat dikonversikan ke bilangan heksadesimal.
                        </p>
                        <p><strong>Contohnya :</strong></p>
                        <p>Ubahlah 1538 <sub>(10)</sub> ........................................................... <sub>(16)</sub></p>
                        <table class="table w-25">
                            <tr>
                                <td>1538</td>
                                <td>:</td>
                                <td>16</td>
                                <td>=</td>
                                <td>98</td>
                                <td>sisa</td>
                                <td><strong>15 = F</strong></td>
                            </tr>
                            <tr>
                                <td>98</td>
                                <td>:</td>
                                <td>16</td>
                                <td>=</td>
                                <td>6</td>
                                <td>sisa</td>
                                <td><strong>2</strong></td>
                            </tr>
                        </table>
                        <p>maka di dapatkan hasil <strong>62F</strong></p>

                        <strong>5.Metode Konversi Bilangan Biner ke Bilangan Oktal</strong>
                        <p>Konversi dari bilangan biner ke bilangan oktal dapat dilakukan dengan mengkonversikan tiap- tiap tiga buah digit biner.
                        </p>
                        <p><strong>Contohnya :</strong></p>
                        <p>Ubahlah 11010100 <sub>(2)</sub> ........................................................... <sub>(8)</sub></p>
                        <table class="table w-25">
                            <tr>
                                <td><strong>011</strong></td>
                                <td><strong>010</strong></td>
                                <td><strong>100</strong></td>
                            </tr>
                            <tr>
                                <td><strong>3</strong></td>
                                <td><strong>2</strong></td>
                                <td><strong>4</strong></td>
                            </tr>
                        </table>
                        <p>maka di dapatkan hasil <strong>324</strong></p>

                        <strong>6.Metode Konversi Bilangan Oktal ke Bilangan Desimal</strong>
                        <p>Bilangan oktal dapat dikonversikan ke bilangan desimal dengan cara mengalikan masing-masing bit dalam bilangan dengan nilai tempatnya.
                        </p>
                        <p><strong>Contohnya :</strong></p>
                        <p>Ubahlah 324 <sub>(8)</sub> ........................................................... <sub>(10)</sub></p>
                        <p>324 <sub>(8)</sub> = 3x8<sub>2</sub> + 2x8<sub>1</sub> + 4x8<sub>0</sub></p>
                        <p>324 <sub>(8)</sub> = 3x64 + 2x8 + 4x1 </p>
                        <p>324 <sub>(8)</sub> = 192 + 16 + 4 </p>
                        <p>324 <sub>(8)</sub> = 212<sub>10</sub> </p>

                        <p>maka di dapatkan hasil <strong>324</strong></p>

                    </div>
                </div>
                <div class="ratio ratio-16x9 my-3">
                    <iframe src="https://www.youtube.com/embed/C7AkrIZ94lU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Daftar pustaka
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a style="text-decoration:none ;" href="#"><code>Haryanto, Agus Tri, dan Ali Sucipto, Taufiq Lilo. 2013. Sistem Komputer. Jakarta: Politeknik Negeri Media Kreatif</code></a>
                            <span class="badge bg-primary rounded-pill">buku</span>
                        </li>
                        <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a style="text-decoration:none ;" href="#"><code>Haryanto, Agus Tri, dan Ali Sucipto, Taufiq Lilo. 2013. Sistem Komputer. Jakarta: Politeknik Negeri Media Kreatif</code></a>
                            <span class="badge bg-primary rounded-pill">buku</span>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="./source/js/bootstrap.js"></script>
</body>

</html>