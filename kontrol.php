<?php
session_start(); // 1. Bileklik kutusunu açtık

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ödev kuralı: Mail b241210019@sakarya.edu.tr, Şifre b241210019 ise
    // (Buradaki numarayı kendi numaranla güncelle)
    if ($email == "b241210019@sakarya.edu.tr" && $password == "b241210019") {
        
        $_SESSION['user'] = "b241210019"; // 2. BİLEKLİĞİ TAKTIK!
        
        // 3. Şart olan "Hoş Geldiniz" sayfasına gönderiyoruz
        header("Location: hosgeldiniz.php");
        exit();
    } else {
        // Hatalıysa login.php'ye hata mesajıyla geri gönder
        header("Location: login.php?hata=hatali");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>