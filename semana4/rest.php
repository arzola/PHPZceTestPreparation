<?php

//Api keys
//Ejemplo youtube: AIzaSyC54e9wTQtr2EDGs37VLGYh6NDxKowfmsw
//respuesta comun JSON

$service_url = 'https://www.googleapis.com/youtube/v3/videos?id=1rmYfo84hyg&key=AIzaSyC54e9wTQtr2EDGs37VLGYh6NDxKowfmsw%20%20%20%20%20&part=snippet,contentDetails,statistics,status';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('Ocurrio un error: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
echo 'Respuesta ok!';
foreach($decoded->items as $k => $r){
    echo '<pre>';
    print_r($r->snippet);
    echo '</pre>';
}
