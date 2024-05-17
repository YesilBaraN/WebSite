<?php
// Hata raporlamasını etkinleştir
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Başlangıçta hata mesajı boş olsun
$error_message = "";

// POST isteği yapıldıysa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre alınır
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Doğrulama
    if (empty($username) || empty($password)) {
        $error_message = "Kullanıcı adı ve şifre alanları boş bırakılamaz.";
    } else {
        // Kullanıcı adının e-posta formatında olması ve domain kontrolü yapılır
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Lütfen geçerli bir e-posta adresi girin.";
        } else {
            // Eğer kullanıcı adı bir e-posta adresiyse, Sakarya Üniversitesi'ne ait olup olmadığını kontrol et
            $email_parts = explode('@', $username);
            if ($email_parts[1] !== 'sakarya.edu.tr') {
                $error_message = "Lütfen Sakarya Üniversitesi'ne ait bir e-posta adresi girin.";
            } else {
                // Öğrenci numarası ve şifre kontrolü
                $studentId = explode('@', $username)[0]; // Kullanıcı adından öğrenci numarasını ayırır
                $expectedPassword = $studentId; // Şifrenin öğrenci numarası olması gerektiği varsayılır

                if ($password === $expectedPassword) {
                    // Giriş başarılıysa hoşgeldiniz mesajını göster
                    echo "<script>alert('Hoşgeldiniz $studentId!');</script>";
                } else {
                    // Giriş başarısızsa hata mesajını göster
                    $error_message = "Kullanıcı adı veya şifre yanlış.";
                }
            }
        }
    }

    // Başarısız giriş durumunda alert ile hata mesajını göster
    if (!empty($error_message)) {
        echo "<script>alert('$error_message');</script>";
    }

    // 3 saniye sonra giriş sayfasına geri yönlendir
    echo "<script>setTimeout(function(){window.location.href = '../giriş.html';}, 3000);</script>";
    exit();
}

// Giriş sayfasına yönlendir
header("Location: ../giriş.html");
exit();
?>
