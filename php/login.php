<?php
// Hata raporlamasını etkinleştir
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Tanımlanan domain
$allowed_domain = "sakarya.edu.tr";

// POST isteği yapıldıysa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre alınır
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Eğer kullanıcı adı sadece @sakarya.edu.tr uzantısına sahipse
    if (strpos($username, "@".$allowed_domain) !== false) {
        // Öğrenci numarası alınır (domain kısmı hariç)
        $studentId = strtok($username, "@");
        
        // Şifre kontrol edilir
        if ($password === $studentId) {
            // Giriş başarılıysa hoşgeldiniz mesajını göster
            echo "<script>alert('Hoşgeldiniz $studentId!');</script>";
        } else {
            // Giriş başarısızsa hata mesajı göster
            echo "<script>alert('Kullanıcı adı veya şifre yanlış.');</script>";
        }
    } else {
        // Geçersiz e-posta adresi girişi durumunda hata mesajı göster
        echo "<script>alert('Lütfen geçerli bir Sakarya Üniversitesi öğrenci e-posta adresi girin.');</script>";
    }

    // 3 saniye sonra giriş sayfasına geri yönlendir
    echo "<script>setTimeout(function(){window.location.href = '../giriş.html';}, 3000);</script>";
    exit();
}

// Giriş sayfasına yönlendir
header("Location: ../giriş.html");
exit();
?>
