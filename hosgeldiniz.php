<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz | Tuna Karadeniz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100 text-center">
    <div class="container">
        <div class="card shadow p-5 border-0">
            <?php 
                $ogrenciNo = isset($_GET['no']) ? htmlspecialchars($_GET['no']) : "Öğrenci";
                echo "<h1 class='display-4 fw-bold text-success'>Hoşgeldiniz " . $ogrenciNo . "</h1>"; 
            ?>
            <p class="lead text-muted mt-3">Başarıyla giriş yaptınız.</p>
            <div class="mt-4">
                <a href="index.html" class="btn btn-outline-primary px-4">Ana Sayfaya Dön</a>
            </div>
        </div>
    </div>
</body>
</html>