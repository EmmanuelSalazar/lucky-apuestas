<?php 
  use MercadoPago\Client\Preference\PreferenceClient;
  use MercadoPago\MercadoPagoConfig;
  require 'src/php/db/db.php';
  require 'vendor/autoload.php';
          MercadoPagoConfig::setAccessToken('APP_USR-4802796775134966-080222-9bd4eeed9462ce19a02cd1ac945af6fe-1926604740');
          $client = new PreferenceClient();
          $ticketId = "SELECT * FROM ticket WHERE userEmail='$_GET[emailDir]' AND numLotery='$_GET[numDir]'";
          $ticketId = mysqli_query($mysqli, $ticketId);
          $ticketId = mysqli_fetch_array($ticketId);
          $tickedId = $ticketId['ID'];
          $backUrls = [
            "success" => "http://localhost/luckyApuestas/lucky-apuestas/recibo.php?pay=1&ticketID=".$tickedId."",
            "failure" => "http://localhost/luckyApuestas/lucky-apuestas/recibo.php?pay=0&ticketID=".$tickedId."", 
            "pending" => "http://localhost/luckyApuestas/lucky-apuestas/recibo.php?pay=2&ticketID=".$tickedId.""
          ];
          $preference = $client->create([
              "items" => [
                [
                  "id" => "DEP-0001",
                  "title" => "Número: ".$_GET['numDir']." Loteria: ".$_GET['lotteryDir']."",
                  "quantity" => 1,
                  "unit_price" => 1000
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