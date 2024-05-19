<?php
if (isset($_GET['country_name'])) {
    $country_name = $_GET['country_name'];
    
    function get_country_info($country_name) {
        $url = "https://restcountries.com/v3.1/name/$country_name";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        
        // API'den gelen verileri işle
        $country_info = array(
            "name" => $data[0]["name"]["common"],
            "capital" => $data[0]["capital"][0],
            "flag" => $data[0]["flags"]["png"],
            "population" => $data[0]["population"]
        );
        
        return $country_info;
    }
    
    $country_info = get_country_info($country_name);
?>

<h1><?php echo $country_info["name"]; ?></h1>
<img src="<?php echo $country_info["flag"]; ?>" alt="<?php echo $country_info["name"]; ?> Bayrağı">
<p><strong>Başkent:</strong> <?php echo $country_info["capital"]; ?></p>
<p><strong>Nüfus:</strong> <?php echo number_format($country_info["population"]); ?></p>

<?php
} else {
    echo "Ülke ismi belirtilmedi.";
}
?>
