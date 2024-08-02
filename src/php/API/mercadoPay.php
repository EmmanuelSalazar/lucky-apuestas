<?php 
  use MercadoPago\Client\Preference\PreferenceClient;
  use MercadoPago\MercadoPagoConfig;
  require 'vendor/autoload.php';
  
  
          MercadoPagoConfig::setAccessToken('APP_USR-1842608737330865-033116-8f57e1ea515ebc0285382fe00fbfc45b-1749491277');
          $client = new PreferenceClient();
          $preference = $client->create([
              "items" => [
                [
                  "id" => "DEP-0001",
                  "title" => "Ticket",
                  "quantity" => 1,
                  "unit_price" => 1000
                ],
              ],
              
              "statement_descriptor" => "Lucky Apuestas",
              "external_reference" => "CDP001",
              "notification_url" => "https://luckyapuestas.lovestoblog.com/src/php/webhooks/mercadoPay.php"
            ]);
          $preference->back_urls = array(
              "success" => "http://localhost/recibo.php?pay=1",
              "failure" => "http://localhost/recibo.php?pay=0", 
              "pending" => "http://localhost/recibo.php?pay=2"
          );
?>