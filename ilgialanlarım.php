<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pokémon ve Ülke Bilgileri</title>
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:slnt@-4&family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXqP6hMVIv/lBuvqO6P3y" crossorigin="anonymous">
  <title>İlgi Alanlarım</title>
</head>
<header class="navbar_header">
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
<style>
    /* Başlık stilleri */
.baslik_pokemon, .baslik_ulke {
  color: #333;
  margin-top: 40px;
  margin-bottom: 20px;
}

/* Form stilleri */
form {
  margin-bottom: 20px;
}

form label {
  display: block;
  margin-bottom: 10px;
}

.pokemon_input, .country_input {
  padding: 10px;
  width: 100%;
  margin-bottom: 10px;
  box-sizing: border-box;
}

.pokemon_button, .country_button {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}

.pokemon_button:hover, .country_button:hover {
  background-color: #555;
}

/* Bilgi kutusu stilleri */
.pokemon_info, .country_info {
  border: 1px solid #ccc;
  padding: 20px;
  margin-bottom: 20px;
}

.pokemon_info img {
  max-width: 100%;
  margin-bottom: 10px;
}

.country_info img {
  max-width: 100px;
  margin-bottom: 10px;
}
</style>
<body>

<<h1 class="baslik_pokemon">Pokémon Arama</h1>
<form id="pokemon_form">
  <label for="pokemon_name">Pokémon Adı:</label>
  <input type="text" id="pokemon_name" name="pokemon_name" class="pokemon_input">
  <button type="submit" class="pokemon_button">Ara</button>
</form>

<div id="pokemon_info" class="pokemon_info"></div>

<h1 class="baslik_ulke">Ülke Bilgileri</h1>
<form id="country_form">
  <label for="country_name">Ülke İsmi:</label>
  <input type="text" id="country_name" name="country_name" class="country_input">
  <button type="submit" class="country_button">Bilgileri Getir</button>
</form>

<div id="country_info" class="country_info"></div>

<script>
document.getElementById("pokemon_form").addEventListener("submit", function(event) {
    event.preventDefault(); // Sayfanın yeniden yüklenmesini engellemek için form submit olayını durdur

    var pokemonName = document.getElementById("pokemon_name").value;

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "pokemon.php?pokemon_name=" + pokemonName, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("pokemon_info").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});

document.getElementById("country_form").addEventListener("submit", function(event) {
    event.preventDefault(); // Sayfanın yeniden yüklenmesini engellemek için form submit olayını durdur

    var countryName = document.getElementById("country_name").value;

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_country_info.php?country_name=" + countryName, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("country_info").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});
document.addEventListener('DOMContentLoaded', function() {
  var menuIcon = document.getElementById('menu_icon');
  var navLinks = document.querySelector('.nav_links');

  menuIcon.addEventListener('click', function() {
      // Alt menüyü seç
      var subMenu = document.querySelector('.nav_links');

      // Alt menü görünüyorsa gizle, görünmüyorsa göster
      if (subMenu.style.display === 'none') {
          subMenu.style.display = 'block';
      } else {
          subMenu.style.display = 'none';
      }
  });
});
</script>

</body>

</html>
