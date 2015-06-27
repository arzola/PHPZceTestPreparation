<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function servicio_web($callback){
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
    if($decoded){
        $callback($decoded);
    }
}
servicio_web(function ($loquesea){
    var_dump($loquesea->items[0]->snippet->title);
    //$loquesea;
});