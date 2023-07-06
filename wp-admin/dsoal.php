<?php
include './source/execution/connection.php';
$id = $_GET['id'];
mysqli_query($connection, "delete from soals where id='$id'");
header("location:soal.php");
