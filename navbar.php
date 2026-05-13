<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Tuna Karadeniz</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
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