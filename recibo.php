<?php require 'src/php/API/mercadoPay.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
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
                <?php switch ($pay) {
                    case NULL: ?>
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
                            <div class="col">
                            <div id="wallet_container"></div>
                            </div>
                            </div>
                      <?php  break;
                      case "": ?>
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
                     <?php  break;
                     case 1: ?>
                            <div class="col">
                            <h2>El pago se ha realizado con exito</h2>
                            <p>¡Que la <strong>fortuna</strong> te acompañe!</p>
                            <div class="btn"><a href="index.php">Volver al inicio</a></div>
                            </div>
                       <?php break;
                        case 0: ?>
                            <div class="col">
                            <h2>Ha ocurrido un error al realizar el pago :(</h2>
                            <p>¡Que la <strong>fortuna</strong> te acompañe!</p>
                            <div class="btn"><a href="index.php">Volver a intentar</a></div>
                            </div>
                    <?php default:
                        # code...
                        break;
                } ?>
            </div>
        </div>
    </main>
    <script>
      const mp = new MercadoPago('TEST-81fd65a5-0dc0-484f-a09e-23238b683404', {
        locale: 'es-CO'
      });

      mp.bricks().create("wallet", "wallet_container", {
        initialization: {
            preferenceId: "<?php echo $preference->id; ?>",
            redirectMode: "modal"
        },
      });
  </script>
</body>
</html>