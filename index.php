<?php
include './source/execution/connection.php';
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: student.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginsql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $loginsql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: student.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
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
    <title>Login</title>

    <!-- css -->
    <link rel="stylesheet" href="./source/css/master.css">
    <link rel="stylesheet" href="./source/css/bootstrap.css">

</head>

<body class="bg-info">

    <div class="card p-3 box position-absolute top-50 start-50 translate-middle">
        <h4 class="fw-bold">Login</h4>
        <form action="" method="post">
            <input class="form-control my-3" type="text" name="username" value="<?php echo $username; ?>" id="username" placeholder="username">
            <input class="form-control mb-3" type="password" name="password" value="<?php echo $password; ?>" id="password" placeholder="password">
            <button class="btn btn-info fw-bold mb-3 w-100" name="submit" type="submit">Masuk</button>
        </form>
        <span class="text-center">Belum punya akun ? <a class="fw-bold none text-dark" href="#">Hubungi admin</a> </span>
    </div>
</body>

</html>