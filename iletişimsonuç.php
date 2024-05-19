<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:slnt@-4&family=Roboto:wght@300&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXqP6hMVIv/lBuvqO6P3y" crossorigin="anonymous">
</head>
<style>
body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

a {
    text-decoration: none;
    color: inherit;
}

/* Navbar stili */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #002a43;
    color: white;
}

.navbar .logo a {
    font-size: 24px;
    font-weight: bold;
    color: white;
}

.navbar .nav_links {
    display: flex;
    list-style: none;
}

.navbar .nav_links li {
    margin: 0 15px;
}

.navbar .nav_links a {
    font-size: 16px;
    color: white;
    transition: color 0.3s;
}

.navbar .nav_links a:hover {
    color: #1e90ff;
}

#menu_bar {
    display: none;
}

/* İletişim Sonucu sayfası stili */
#iletisimSonuc {
    padding: 50px 0;
}

.container_iletisimSonuc {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 20px 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.baslik_iletisimSonuc {
    text-align: center;
    font-size: 32px;
    margin-bottom: 20px;
}

.bilgi p {
    font-size: 18px;
    margin: 10px 0;
}

.bilgi p strong {
    font-weight: bold;
}

/* Responsive tasarım */
@media (max-width: 768px) {
    .navbar .nav_links {
        display: none;
    }

    #menu_bar {
        display: block;
    }

    .container_iletisimSonuc {
        padding: 15px 20px;
    }

    .baslik_iletisimSonuc {
        font-size: 28px;
    }

    .bilgi p {
        font-size: 16px;
    }
}
</style>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h2><a href="#">Baran Yeşilyurt</a></h2>
            </div>
            <div id="menu_bar">
                <i class="fas fa-bars" id="menu_icon"></i>
            </div>
            <ul class="nav_links">
                <li><a href="html.html">HAKKINDA</a></li>
                <li><a href="OzgecmisCV.html">ÖZGEÇMİŞ</a></li>
                <li><a href="şehrim.html">ŞEHRİM</a></li>
                <li><a href="takimimiz.html">TAKIMIMIZ</a></li>
                <li><a href="ilgialanlarım.php">İLGİ ALANLARIM</a></li>
                <li><a href="iletişim.html">İLETİŞİM</a></li>
                <li><a href="giriş.html">LOG IN</a></li>
            </ul>
        </nav>
    </header>
    <section id="iletisimSonuc">
        <div class="container_iletisimSonuc">
            <h1 class="baslik_iletisimSonuc">İletişim Sonucu</h1>
            <div class="bilgi">
                <p>Gönderdiğiniz bilgiler başarıyla alındı. Teşekkür ederim!</p>
                <?php
                    if (isset($_POST['isimSoyisim'])) {
                        echo "<p><strong>İsim Soyisim:</strong> " . htmlspecialchars($_POST['isimSoyisim']) . "</p>";
                    } else {
                        echo "<p><strong>İsim Soyisim:</strong> Bilgi bulunamadı.</p>";
                    }

                    if (isset($_POST['email'])) {
                        echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
                    } else {
                        echo "<p><strong>Email:</strong> Bilgi bulunamadı.</p>";
                    }

                    if (isset($_POST['mesaj'])) {
                        echo "<p><strong>Mesaj:</strong> " . htmlspecialchars($_POST['mesaj']) . "</p>";
                    } else {
                        echo "<p><strong>Mesaj:</strong> Bilgi bulunamadı.</p>";
                    }

                
                ?>
            </div>
        </div>
    </section>
</body>
</html>
