<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <form method="post">
        <label>Username :</label>
        <input type="text" name="username"><br>
        <label>Password :</label>
        <input type="password" name="password"><br>
        <button type="submit" name="masuk">Login</button>
    </form>

    <?php
    if (isset($_POST['masuk'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = mysqli_query($koneksi, "SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");
        $cek = mysqli_num_rows($qry);
        if($cek==1) {
            $_SESSION['userweb']=$username;
            header ("location:admin.php");
            exit;
        }
        else{
            echo "Maaf username dan password anda salah";
        }
    }
    ?>
</body>
</html>