<?php
session_start(); // 1. Oturumu burada da açıyoruz ki login'den gelen veriyi görelim
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Giriş yapmadan gelmeye çalışırsa kov!
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hoş Geldiniz</title>
</head>
<body class="bg-light d-flex align-items-center vh-100 text-center">
    <div class="container">
        <div class="card shadow p-5">
            <h1 class="display-4">Hoş geldin, <br><strong><?php echo $_SESSION['user']; ?></strong></h1>
            <p class="lead">Giriş işlemin başarıyla tamamlandı.</p>
            <hr>
            <a href="index.php" class="btn btn-primary btn-lg">Anasayfaya Git</a>
        </div>
    </div>
</body>
</html>