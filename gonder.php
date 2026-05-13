<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Alındı | Tuna Karadeniz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <?php include 'navbar.php'; ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white p-4 text-center">
                        <h2 class="mb-0">Mesajınız Başarıyla İletildi!</h2>
                        <p class="mb-0 small">Formdan gönderilen veriler aşağıda özetlenmiştir.</p>
                    </div>
                    <div class="card-body p-4">
                        
                        <?php
                        // Form verilerini POST yöntemiyle yakalıyoruz
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $ad = $_POST['ad'] ?? 'Belirtilmedi';
                            $email = $_POST['email'] ?? 'Belirtilmedi';
                            $tel = $_POST['tel'] ?? 'Belirtilmedi';
                            $bolum = $_POST['bolum'] ?? 'Belirtilmedi';
                            $sehir = $_POST['sehir'] ?? 'Seçilmedi';
                            $cinsiyet = $_POST['cinsiyet'] ?? 'Belirtilmedi';
                            $konu = $_POST['konu'] ?? 'Konu Yok';
                            $mesaj = $_POST['mesaj'] ?? 'Mesaj Yok';

                            // Verileri ekrana basıyoruz
                            echo "<div class='table-responsive'>";
                            echo "<table class='table table-striped table-bordered'>";
                            echo "<tr><th>Ad Soyad:</th><td>$ad</td></tr>";
                            echo "<tr><th>E-posta:</th><td>$email</td></tr>";
                            echo "<tr><th>Telefon:</th><td>$tel</td></tr>";
                            echo "<tr><th>Bölüm:</th><td>$bolum</td></tr>";
                            echo "<tr><th>Şehir:</th><td>$sehir</td></tr>";
                            echo "<tr><th>Cinsiyet:</th><td>$cinsiyet</td></tr>";
                            echo "<tr><th>Konu:</th><td>$konu</td></tr>";
                            echo "<tr><th>Mesaj:</th><td>$mesaj</td></tr>";
                            echo "</table>";
                            echo "</div>";
                        } else {
                            // Eğer bu sayfaya form doldurmadan girilirse hata versin
                            echo "<div class='alert alert-danger'>Hata: Bu sayfaya doğrudan erişemezsiniz!</div>";
                        }
                        ?>

                        <div class="text-center mt-4">
                            <a href="index.php" class="btn btn-primary px-5 fw-bold">Anasayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto fixed-bottom">
        <p class="mb-0">&copy; 2026 Tuna Karadeniz - Tüm Hakları Saklıdır.</p>
    </footer>

</body>
</html>