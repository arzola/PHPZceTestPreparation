<?php

//WSDL http://www.webservicex.net/globalweather.asmx?WSDL
//Respeusta comun XML con DTD

$client = new SoapClient("http://www.webservicex.net/globalweather.asmx?WSDL",array('trace' => TRUE));

var_dump($client->__getFunctions());
var_dump($client->__getTypes());

$response = $client->GetCitiesByCountry(array('CountryName'=>'Mexico'));

var_dump($response->GetCitiesByCountryResult);