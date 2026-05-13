<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirasımız | Konuralp Antik Kenti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="p-5 mb-4 bg-light rounded-3 border-start border-primary border-5 shadow-sm">
                    <div class="container-fluid py-2">
                        <h1 class="display-5 fw-bold text-dark">Kültürel Mirasımız: Konuralp</h1>
                        <p class="col-md-12 fs-5 text-muted">Düzce'nin tarihi kalbi, Roma döneminin görkemli izlerini taşıyan Prusias ad Hypium Antik Kenti'ni keşfedin.</p>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <div class="col-md-8">
                        <img src="fotoğraflar\konuralp_antik_kenti.png" class="img-fluid rounded shadow-sm" alt="Konuralp Antik Kenti">
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm bg-primary text-white p-3">
                            <h4 class="fw-bold">Antik Tiyatro</h4>
                            <p>M.S. 2. yüzyılda inşa edilen, 10.000 kişi kapasiteli bu muazzam yapı, Batı Karadeniz'in günümüze ulaşan en sağlam antik tiyatrosudur. Bugün hala kazı çalışmaları ve restorasyonlar devam etmektedir.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 p-4 border rounded shadow-sm bg-white">
                    <h3 class="fw-bold mb-4">Neden Burası Önemli?</h3>
                    <p>Konuralp, sadece Düzce'nin değil, tüm bölgenin tarihsel hafızasıdır. Roma döneminde bir eyalet merkezi olan bu kent, tiyatrosu, su kemerleri, surları ve müzesinde sergilenen paha biçilemez Tyche heykeli ile Türkiye'nin en değerli arkeolojik noktalarından biridir.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Tuna Karadeniz | Kültürel Miras Projesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>