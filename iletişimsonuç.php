<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:slnt@-4&family=Roboto:wght@300&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXqP6hMVIv/lBuvqO6P3y" crossorigin="anonymous">
</head>
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
                <li><a href="takimimiz.html">MİRAZSIMIZ</a></li>
                <li><a href="ilgialanlarım.html">İLGİ ALANLARIM</a></li>
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
                    if(isset($_POST['isimSoyisim'])) {
                        echo "<p><strong>İsim Soyisim:</strong> " . $_POST['isimSoyisim'] . "</p>";
                    } else {
                        echo "<p><strong>İsim Soyisim:</strong> Bilgi bulunamadı.</p>";
                    }

                    if(isset($_POST['email'])) {
                        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
                    } else {
                        echo "<p><strong>Email:</strong> Bilgi bulunamadı.</p>";
                    }

                    if(isset($_POST['mesaj'])) {
                        echo "<p><strong>Mesaj:</strong> " . $_POST['mesaj'] . "</p>";
                    } else {
                        echo "<p><strong>Mesaj:</strong> Bilgi bulunamadı.</p>";
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>
