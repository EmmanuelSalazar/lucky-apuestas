<?php require 'src/php/API/mercadoPay.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'src/estructura/head.php'; ?>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>
    <header>
        <?php require 'src/estructura/menu.php'; ?>
    </header>
    <main>
        <div class="col">
            <div class="box">
                <h2>Continuar con el proceso de compra</h2>
                <hr>
                <div class="row">
                <div class="col">
                   <img src="src/public/svg/1number_1_3080.svg" alt="" class="iconSVG">
                   <hr>
                   <img src="src/public/svg/2number_2_3830.svg" alt="" class="iconSVG">
                   <hr>
                   <img src="src/public/svg/3number_3_3078.svg" alt="" class="iconSVG">
                   <hr>
                   <img src="src/public/svg/4number_4_3076.svg" alt="" class="iconSVG">
                </div>
                <div class="col">
                    <p>Fecha de juego: <strong><?php echo $_GET['dateDir'] ?></strong></p>
                    <hr>
                    <p>Loteria seleccionada: <strong><?php echo $_GET['lotteryDir'] ?></strong></p>
                    <hr>
                    <p>Número de la suerte: <strong><?php echo $_GET['numDir'] ?></strong></p>
                    <hr>
                    <p>Email de contacto: <strong><?php echo $_GET['emailDir'] ?></strong></p>
                </div>
                <div class="row">
                <h5>Pagar</h5>
                <div id="wallet_container"></div>
                </div>
                </div>
                
            </div>
        </div>
    </main>
    <script src="src/js/controller/bill.js"></script>
    <script>
      const mp = new MercadoPago('TEST-81fd65a5-0dc0-484f-a09e-23238b683404', {
        locale: 'es-CO'
      });

      mp.bricks().create("wallet", "wallet_container", {
        initialization: {
            preferenceId: "<?php echo $preference->id; ?>",
        },
      });
  </script>
</body>
</html>