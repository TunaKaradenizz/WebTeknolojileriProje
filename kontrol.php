<?php
// kontrol.php dosyası

$dogru_no = "b241210019"; 
$dogru_email = $dogru_no . "@sakarya.edu.tr"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelen_email = $_POST['email'];
    $gelen_sifre = $_POST['password'];

    if (empty($gelen_email) || empty($gelen_sifre)) {
        // Hata durumunda login.php'ye (formun yeni adı) geri gönderir
        header("Location: login.php?hata=empty");
        exit();
    } elseif ($gelen_email == $dogru_email && $gelen_sifre == $dogru_no) {
        // Başarılı girişte Hoşgeldiniz mesajı gösteren sayfaya yönlendirir
        header("Location: hosgeldiniz.php?no=" . $dogru_no);
        exit();
    } else {
        // Hatalı girişte login.php'ye geri gönderir 
        header("Location: login.php?hata=hatali");
        exit();
    }
}
?>