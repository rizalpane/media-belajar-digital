<?php
include './source/execution/connection.php';
$id = $_GET['id'];
mysqli_query($connection, "delete from users where id='$id'");
header("location:teacher.php");
