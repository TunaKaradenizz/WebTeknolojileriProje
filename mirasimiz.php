<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirasımız | Konuralp Antik Kenti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Tuna Karadeniz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menüyü aç">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                        <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link active" href="mirasimiz.php">Mirasımız</a></li>
                        <li class="nav-item"><a class="nav-link" href="ilgi_alanlarim.php">İlgi Alanlarım</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                        <li class="nav-item d-flex align-items-center ms-lg-3">
                            <?php if (isset($_SESSION['user'])): ?>
                                <span class="navbar-text text-white fw-bold me-3">
                                    Hoş geldin, <?php echo $_SESSION['user']; ?>
                                </span>
                                <a class="btn btn-outline-danger btn-sm fw-bold" href="logout.php" style="border-radius: 20px;">Çıkış Yap</a>
                            <?php else: ?>
                                <a class="btn btn-success fw-bold px-4 text-white" href="login.php" style="border-radius: 20px;">Giriş Yap</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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

                <section id="konuralp-detay" class="mt-5 mb-5 p-4 bg-light rounded shadow-sm">
                    <h3 class="fw-bold mb-4 border-bottom pb-2 text-primary">Konuralp Antik Kenti Genel Bilgiler</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="h6 fw-bold">🏛️ Önemli Yapılar</h4>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent border-0 ps-0">• 10.000 Kişilik Antik Tiyatro</li>
                                <li class="list-group-item bg-transparent border-0 ps-0">• Roma Köprüsü</li>
                                <li class="list-group-item bg-transparent border-0 ps-0">• Atlı Kapı ve Surlar</li>
                                <li class="list-group-item bg-transparent border-0 ps-0">• Su Kemerleri (Kemerkasım)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 fw-bold">🕒 Tarihsel Bilgi</h4>
                            <p class="small text-muted">
                                Bölge tarih boyunca **Bitinya**, **Roma**, **Bizans** ve son olarak **Osmanlı** hakimiyetinde kalmıştır. İsmini, Osman Gazi'nin silah arkadaşı olan **Konur Alp** Bey'den almıştır.
                            </p>
                            <div class="alert alert-info py-2 small">
                                <i class="bi bi-info-circle me-2"></i>Bugün Prusias ad Hypium Antik Kenti, Batı Karadeniz'in "Efes'i" olarak adlandırılmaktadır.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2026 Tuna Karadeniz | Kültürel Miras Projesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>