<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorebat API Example</title>
</head>
<body>
    <h1>Scorebat API Example</h1>

    <?php
    // cURL kullanarak Scorebat API isteği yapma
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://www.scorebat.com/video-api/v1/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // Yanıtı JSON olarak çözümle ve ekrana yazdır
        $data = json_decode($response, true);
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    ?>
</body>
</html>
