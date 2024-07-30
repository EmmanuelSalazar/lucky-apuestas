<?php 
  use MercadoPago\Client\Preference\PreferenceClient;
  use MercadoPago\MercadoPagoConfig;
  require 'vendor/autoload.php';
  
  
          MercadoPagoConfig::setAccessToken('TEST-1842608737330865-033116-eb08df07ba5de636a918bdb3b65f7c02-1749491277');
          $client = new PreferenceClient();
          $preference = $client->create([
              "items" => [
                [
                  "id" => "DEP-0001",
                  "title" => "Ticket",
                  "quantity" => 1,
                  "unit_price" => 500
                ],
              ],
              
              "statement_descriptor" => "Lucky Apuestas",
              "external_reference" => "CDP001"
            ]);
?>