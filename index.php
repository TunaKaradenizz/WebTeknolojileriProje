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
</head>
<body>

    <?php include 'navbar.php'; ?>

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
        <h2 class="text-center mb-4">Medya ve İletişim</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden bg-light border">
                    <iframe src="" title="Tanıtım Videosu" allowfullscreen></iframe>
                    </div>
                <p class="text-muted mt-2 small text-center">Medya Videosunu buraya ekleueceğim.</p>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="fw-bold">Bağlantılarım</h5>
                        <p>Projelerimi takip etmek veya bana ulaşmak için aşağıdaki linkleri kullanabilirsiniz.</p>
                        <div class="d-grid gap-2">
                            <a href="https://github.com/TunaKaradenizz" class="btn btn-dark" target="_blank">GitHub Profilim</a>
                            <a href="mailto:tunakrdnz06@gmail.com" class="btn btn-primary">E-posta Gönder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>