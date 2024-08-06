<?php 
  use MercadoPago\Client\Preference\PreferenceClient;
  use MercadoPago\MercadoPagoConfig;
  require 'src/php/db/db.php';
  require 'vendor/autoload.php';
          MercadoPagoConfig::setAccessToken('APP_USR-7883038378946096-073013-e455d88284c62d65207e3a392c20f177-1749491277');
          $client = new PreferenceClient();
          $ticketId = "SELECT * FROM ticket WHERE userEmail='$_GET[emailDir]' AND numLotery='$_GET[numDir]'";
          $ticketId = mysqli_query($mysqli, $ticketId);
          $ticketId = mysqli_fetch_array($ticketId);
          $tickedId = $ticketId['ID'];
          $backUrls = [
            "success" => "https://compra-seguro.store/recibo.php?pay=1&ticketID=".$tickedId."",
            "failure" => "https://compra-seguro.store/recibo.php?pay=3&ticketID=".$tickedId."", 
            "pending" => "https://compra-seguro.store/recibo.php?pay=2&ticketID=".$tickedId.""
          ];
          $preference = $client->create([
              "items" => [
                [
                  "id" => "DEP-0001",
                  "title" => "Número: ".$_GET['numDir']." Loteria: ".$_GET['lotteryDir']."",
                  "quantity" => 1,
                  "unit_price" => 5000
                ],
              ],
              
              "statement_descriptor" => "Lucky Apuestas",
              "external_reference" => "CDP001",
              "notification_url" => "https://compra-seguro.store/src/php/webhooks/mercadoPay.php",
              "back_urls" => $backUrls,
              "auto_return" => "approved",
              "payment_methods" => [
                "installments" => 1
              ]
            ]);          
?>