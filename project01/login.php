<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
session_start(); // Panggil session_start() di awal

if (isset($_POST['submit'])) {
    require_once 'dbkoneksi.php';

    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST['email'],
        $_POST['password']
    ]);

    $count = $user->rowCount(); // untuk memastikan user tersedia atau tidak

    if ($count > 0) {
        $_SESSION['user'] = $user->fetch();
        header("location:index1.php");
        exit(); // tambahkan exit() setelah header untuk memastikan tidak ada kode ekstra yang dijalankan setelah pengalihan
    } else { // jika gagal login
        $error = "Email atau password salah"; // Simpan pesan kesalahan dalam variabel
    }
}
?>

<body>
    <div class="container">
        <div class="login">
            <form action="login.php" method="POST"> <!-- Ubah action ke login.php -->
                <h1>Login</h1>
                <hr>
                <?php if (isset($error)): ?> <!-- Tampilkan pesan kesalahan jika ada -->
                    <p><?php echo $error; ?></p>
                <?php endif; ?>
                <p>Selamat datang & Selamat Bekerja</p>
                <hr>
                <label for="">Email</label>
                <input type="email" name="email" required>
                <label for="">Password</label>
                <input type="password" name="password" required>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
        <div class="right">
            <img src="image.png" alt="">
        </div>
    </div>
</body>


</html>