<?php

/* 
 *Produccion
 *  $COMMERCE_CONFIG = array(
 	"APIKEY" => "739CA89F-BD76-4036-8FC0-3ACL39CBC4A5", // Registre aquí su apiKey
 	"SECRETKEY" => "f3359bce741f77462bd10001445e2f8e1ff8cf2a", // Registre aquí su secretKey
 	"APIURL" => "https://www.flow.cl/api", // Producción EndPoint o Sandbox EndPoint
 	"BASEURL" => "http://localhost/lanzamientobet4home.cl/" //Registre aquí la URL base en su página donde instalará el cliente
 );
 */

 $COMMERCE_CONFIG = array(
 	"APIKEY" => "67E8CFF3-9C15-4A74-B2F1-4062LA6B4FAE", // Registre aquí su apiKey
 	"SECRETKEY" => "1e5d4cab419eecc1a2a303f686489b50ee802f55", // Registre aquí su secretKey
 	"APIURL" => "https://sandbox.flow.cl/api", // Producción EndPoint o Sandbox EndPoint
 	"BASEURL" => "http://localhost/lanzamientobet4home.cl/" //Registre aquí la URL base en su página donde instalará el cliente
 );
 
 class Config {
 	
	static function get($name) {
		global $COMMERCE_CONFIG;
		if(!isset($COMMERCE_CONFIG[$name])) {
			throw new Exception("The configuration element thas not exist", 1);
		}
		return $COMMERCE_CONFIG[$name];
	}
 }

