<?php
include './source/execution/connection.php';
$id = $_GET['id'];
mysqli_query($connection, "delete from artikels where id='$id'");
header("location:materi.php");
