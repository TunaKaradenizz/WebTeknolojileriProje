<?php
session_start();
session_destroy(); // Oturumu tamamen sonlandırdık
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Çıkış Yapılıyor</title>
</head>
<body>
    <script>
        // Kullanıcıya mesajı gösteriyoruz
        alert("Başarıyla çıkış yapıldı. Anasayfaya yönlendiriliyorsunuz...");
        
        // Kullanıcı 'Tamam' butonuna bastığı an yönlendirme yapılır
        window.location.href = "index.php";
    </script>
</body>
</html>