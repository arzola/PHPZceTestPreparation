<?php

//WSDL http://www.webservicex.net/globalweather.asmx?WSDL
//Respeusta comun XML con DTD

$client = new SoapClient("http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL",array('trace' => TRUE));

var_dump($client->__getFunctions());
var_dump($client->__getTypes());

$response = $client->GetCityForecastByZIP(array('GetCityForecastByZIP'=>'01060'));

var_dump($response->GetCityWeatherByZIPResult);