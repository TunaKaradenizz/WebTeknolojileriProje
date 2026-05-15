<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. ADIM: Alanlar boş mu? 
    if (empty($email) || empty($password)) {
        header("Location: login.php?hata=bos");
        exit();
    }

    // 2. ADIM: Bilgiler doğru mu?
    if ($email == "b241210019@sakarya.edu.tr" && $password == "b241210019") {
        $_SESSION['user'] = "b241210019"; 
        header("Location: hosgeldiniz.php");
        exit();
    } else {
        // Hatalıysa geri gönder
        header("Location: login.php?hata=hatali");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>