<?php
// Eğer form gönderildiyse ve pokemon_name parametresi varsa
if (isset($_GET['pokemon_name'])) {
    // Kullanıcının girdiği Pokémon adını al
    $pokemonName = $_GET['pokemon_name'];
    
    // PokeAPI'ye istek yap
    $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$pokemonName}");
    
    // JSON verisini diziye dönüştür
    $pokemonData = json_decode($response, true);
    
    // Eğer Pokémon bilgisi varsa, ekrana yazdır
    if ($pokemonData) {
        echo "<h2>{$pokemonData['name']}</h2>";
        echo "<img src='{$pokemonData['sprites']['front_default']}' alt='{$pokemonData['name']}'>";
        echo "<p>Tip: {$pokemonData['types'][0]['type']['name']}</p>";
        echo "<p>Ağırlık: {$pokemonData['weight']}</p>";
        echo "<p>Boy: {$pokemonData['height']}</p>";
    } else {
        echo "<p>Pokémon bulunamadı.</p>";
    }
}
?>
