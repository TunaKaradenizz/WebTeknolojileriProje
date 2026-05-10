<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Tuna Karadeniz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light d-flex align-items-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <h3 class="text-center fw-bold mb-4">Giriş Yap</h3>
                        
                        <div id="error-message" class="alert alert-danger small py-2 text-center <?php echo isset($_GET['hata']) ? '' : 'd-none'; ?>">
                            <?php 
                                if(isset($_GET['hata'])) {
                                    if($_GET['hata'] == 'hatali') echo "Hatalı mail veya şifre!"; 
                                    else if($_GET['hata'] == 'empty') echo "Lütfen tüm alanları doldurun!"; 
                                }
                            ?>
                        </div>

                        <form action="kontrol.php" method="POST" onsubmit="return validateLogin()">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">E-posta Adresi</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="b241210019@sakarya.edu.tr">
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password" >
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Giriş Yap</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateLogin() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var errorBox = document.getElementById("error-message");

            // Önce kutuyu temizle ve gizle
            errorBox.classList.add("d-none");
            errorBox.innerHTML = "";

            // 1. Boş mu kontrolü [cite: 16, 24]
            if (email.trim() === "" || password.trim() === "") {
                errorBox.innerHTML = "E-posta ve şifre alanları boş bırakılamaz!";
                errorBox.classList.remove("d-none"); // Kutuyu göster
                return false; // Formu gönderme
            }

            // 2. Mail formatı kontrolü [cite: 16, 24]
            var emailPattern = /^[a-zA-Z0-9._-]+@sakarya\.edu\.tr$/;
            if (!emailPattern.test(email)) {
                errorBox.innerHTML = "Lütfen geçerli bir Sakarya Üniversitesi mail adresi giriniz!";
                errorBox.classList.remove("d-none"); // Kutuyu göster
                return false; // Formu gönderme
            }

            return true; // Her şey tamamsa kontrol.php'ye gider [cite: 19]
        }
    </script>
</body>
</html>