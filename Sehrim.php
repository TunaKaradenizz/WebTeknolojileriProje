<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim | Düzce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Tuna Karadeniz</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                        <li class="nav-item"><a class="nav-link active" href="sehrim.php">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
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

   <main class="container mt-5 pb-5">
        <section id="sehir-tanitim" class="mb-5">
            <h1 class="display-4 fw-bold text-primary">Yaşadığım Şehir: Düzce</h1>
            <p class="lead mt-3">
                Zonguldak'ta doğup İzmir'de büyümeye başlasam da, ilkokul yıllarımdan beri hayatımın büyük bir kısmını Düzce'de geçirdim. 
                Batı Karadeniz'in bu huzurlu şehri, benim için sadece bir ikametgah değil, tüm çocukluk ve gençlik anılarımın ev sahibi.
            </p>
        </section>

        <section id="sehir-kunye" class="mb-5">
            <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="mb-0 fw-bold"><i class="bi bi-info-circle-fill me-2"></i> Şehir Portresi: 81. İl Düzce</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-4 text-center">
                        <div class="col-6 col-md-3">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <i class="bi bi-people text-primary fs-3"></i>
                                <div class="text-muted small mt-2">Nüfus</div>
                                <div class="fw-bold">~405.142</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <i class="bi bi-calendar-check text-success fs-3"></i>
                                <div class="text-muted small mt-2">İl Oluşu</div>
                                <div class="fw-bold">9 Aralık 1999</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <i class="bi bi-map text-warning fs-3"></i>
                                <div class="text-muted small mt-2">Komşular</div>
                                <div class="fw-bold small">Sakarya, Bolu, Zonguldak</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <i class="bi bi-basket2 text-danger fs-3"></i>
                                <div class="text-muted small mt-2">Geçim Kaynağı</div>
                                <div class="fw-bold">Fındık ve Sanayi</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center">
                                <i class="bi bi-geo-alt-fill text-info fs-3 me-3"></i>
                                <div class="text-start">
                                    <div class="text-muted small">Lojistik Konum</div>
                                    <div class="fw-bold">İstanbul ve Ankara'nın tam ortasında, ulaşımın kalbi.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center">
                                <i class="bi bi-cloud-sun text-secondary fs-3 me-3"></i>
                                <div class="text-start">
                                    <div class="text-muted small">İklim Yapısı</div>
                                    <div class="fw-bold">Batı Karadeniz'in bol yağışlı ve yemyeşil bitki örtüsü.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="duzceCarousel" class="carousel slide mb-5 shadow rounded overflow-hidden" data-bs-ride="carousel">
            <div class="carousel-inner"> 
                <div class="carousel-item active">
                    <img src="fotoğraflar/düzce_1.webp" class="d-block w-100" alt="Efteni Gölü">
                </div>
                <div class="carousel-item">
                    <img src="fotoğraflar/düzce_2.webp" class="d-block w-100" alt="Akçakoca Limanı">
                </div>
                <div class="carousel-item">
                    <img src="fotoğraflar/düzce_3.webp" class="d-block w-100" alt="Güzeldere Şelalesi">
                </div>
                <div class="carousel-item">
                    <img src="fotoğraflar/düzce_4.jpg" class="d-block w-100" alt="Kardüz Yaylası">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#duzceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#duzceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <section id="gezilecek-yerler" class="mt-5 mb-5">
            <div class="d-flex align-items-center mb-4">
                <h2 class="fw-bold mb-0 text-primary">🏞️ Düzce'nin İncileri</h2>
                <div class="flex-grow-1 ms-3 border-bottom border-primary border-2 opacity-25"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm destination-card">
                        <img src="fotoğraflar/düzce_3.webp" class="card-img-top sehir-mini-img" alt="Güzeldere">
                        <div class="card-body">
                            <h6 class="fw-bold text-primary mb-1">Güzeldere Şelalesi</h6>
                            <p class="card-text small text-muted">Türkiye'nin en yüksekten dökülen şelalelerinden biri. Doğa yürüyüşü ve kamp için ideal.</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <span class="badge bg-info-subtle text-info px-2 py-1">Doğa Harikası</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm destination-card">
                        <img src="fotoğraflar/düzce_2.webp" class="card-img-top sehir-mini-img" alt="Akçakoca">
                        <div class="card-body">
                            <h6 class="fw-bold text-primary mb-1">Akçakoca</h6>
                            <p class="card-text small text-muted">Batı Karadeniz'in "mavi bayraklı" sahillerine sahip, hem tarih hem deniz kokan tek ilçesi.</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <span class="badge bg-primary-subtle text-primary px-2 py-1">Deniz Turizmi</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm destination-card">
                        <img src="fotoğraflar/düzce_1.webp" class="card-img-top sehir-mini-img" alt="Aydınpınar">
                        <div class="card-body">
                            <h6 class="fw-bold text-primary mb-1">Aydınpınar Şelaleleri</h6>
                            <p class="card-text small text-muted">Şehir merkezine çok yakın, arka arkaya sıralanan şelaleler ve meşhur alabalık tesisleri.</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <span class="badge bg-success-subtle text-success px-2 py-1">Mesire Alanı</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm destination-card">
                        <img src="fotoğraflar/düzce_4.jpg" class="card-img-top sehir-mini-img" alt="Konuralp">
                        <div class="card-body">
                            <h6 class="fw-bold text-primary mb-1">Prusias ad Hypium</h6>
                            <p class="card-text small text-muted">Konuralp Antik Kenti. Batı Karadeniz'in Efes'i olarak bilinen devasa antik tiyatro.</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <span class="badge bg-warning-subtle text-warning px-2 py-1">Antik Tarih</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2026 Tuna Karadeniz | Şehrim Sayfası</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>