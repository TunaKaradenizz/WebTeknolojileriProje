<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında | Tuna Karadeniz</title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
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

    <main class="container mt-5">
    <section id="hakkinda" class="mb-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="fotoğraflar/ProfilFotoğrafım.jpeg" class="img-fluid rounded-circle border border-5 border-primary" alt="Tuna Karadeniz">
            </div>
            <div class="col-md-8">
                <h1 class="fw-bold">Merhaba, Ben Tuna Karadeniz</h1>
                <p class="lead">Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisiyim. Web teknolojileri ve yazılım geliştirme üzerine kendimi geliştiriyorum.</p>
            </div>
        </div>
    </section>

    <section id="hobiler" class="mb-5">
        <h2 class="text-center mb-4">Hobilerim ve İlgi Alanlarım</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tenis</h5>
                        <p class="card-text">Düzenli olarak tenis oynayarak aktif kalmaya çalışıyorum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Koşu & Spor</h5>
                        <p class="card-text">Koşu yapmak ve ip atlamak günlük rutinimin bir parçası.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">SEIS Kulübü</h5>
                        <p class="card-text">SEIS (Sakarya Engineering and Innovation Society) bünyesinde projeler geliştiriyorum ve etkinlikler düzenliyorum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Rekabetçi Oyunlar</h5>
                        <p class="card-text">Rainbow Six Siege ve Steam PUBG tarzı oyunların turnuvalarını ve e-spor dünyasını takip ediyorum ve oyunlarıda oynuyorum.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mt-4">
                <div class="card h-100 shadow-sm border-dark">
                    <div class="card-body">
                        <h5 class="card-title">Yazılım ve Projeler</h5>
                        <p class="card-text">Web teknolojileri, modern yazılım standartları ve PHP mimarisi üzerine projeler geliştirerek teknik becerilerimi artırıyorum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="iletisim" class="mb-5">
        <h2 class="text-center mb-4 text-primary fw-bold">Medya ve İletişim</h2>
        <div class="row g-4">
            <div class="col-lg-8">
                <h5 class="fw-bold mb-3">Hobi ve İlgi Alanlarımdan Kareler</h5>
                <div class="row g-2"> <div class="col-md-4">
                        <img src="fotoğraflar/Tenis.jpeg" class="hobi-img img-fluid shadow-sm" alt="Tenis">
                    </div>
                    <div class="col-md-4">
                        <img src="fotoğraflar/yazılım.png" class="hobi-img img-fluid shadow-sm" alt="Yazılım">
                    </div>
                    <div class="col-md-4">
                        <img src="fotoğraflar/SEIS_IT.jpeg" class="hobi-img img-fluid shadow-sm" alt="SEIS Kulübü">
                    </div>
                </div>
                <p class="text-muted mt-2 small">Hobilerim ve teknik ilgi alanlarımdan bazı kesitler.</p>
            </div>

            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="fw-bold border-bottom pb-2 mb-3">Bağlantılarım</h5>
                        <p class="small text-muted mb-4">Projelerimi takip etmek veya bana ulaşmak için aşağıdaki linkleri kullanabilirsiniz.</p>
                        <div class="d-grid gap-2">
                            <a href="https://github.com/TunaKaradenizz" class="btn btn-dark fw-bold py-2" target="_blank">GitHub Profilim</a>
                            <a href="mailto:tunakrdnz06@gmail.com" class="btn btn-primary fw-bold py-2">E-posta Gönder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>