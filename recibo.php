<?php require 'src/php/API/mercadoPay.php';
      require 'src/php/function/mercadoBill.php';

    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Recibo || Lucky Apuestas</title>
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
                <?php switch ($_GET['pay']) {
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
                            </div>
                            <div class="row">
                                <div class="col">
                                <div id="wallet_container"></div>
                                <div class="row paymentMethods" id="paymentMethods">
                                    <img src="src/public/IMG/pse_logo.png" alt="">
                                    <img src="src/public/IMG/efecty_logo.png" alt="">
                                </div>
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
                               <div id="wallet_container"></div>
                           </div>
                           </div>
                     <?php  break;
                     case 1: 
                        saveBill();
                     ?>
                            <div class="col">
                            <h2>El pago se ha realizado con exito</h2>
                            <p>¡Que la <strong>fortuna</strong> te acompañe!</p>
                            <div class="btn"><a href="index.php">Volver al inicio</a></div>
                            </div>
                       <?php break;
                        case 0: 
                        deleteBill();
                        ?>
                            <div class="col">
                            <h2>Ha ocurrido un error al realizar el pago :(</h2>
                            <p>¡Que la <strong>fortuna</strong> te acompañe!</p>
                            <div class="btn"><a href="index.php">Volver a intentar</a></div>
                            </div>
                    <?php    
                    case 2: 
                        saveBill();
                     ?>
                            <div class="col">
                            <h2>Pago Pendiente</h2>
                            <p>Cuando tu pago sea aprovado, activaremos tu ticket ;)</p>
                            <div class="btn"><a href="index.php">Volver al inicio</a></div>
                            </div>
                       <?php break;
                         default:
                            echo '<h2>Ha ocurrido un</h2>';
                        break;
                } ?>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="src/js/bill.js"></script>

    <script>
      const mp = new MercadoPago('APP_USR-adbf1054-cdc4-4130-b682-f33c4e2b2443', {
        locale: 'es-CO'
      });

      mp.bricks().create("wallet", "wallet_container", {
        initialization: {
            preferenceId: "<?php echo $preference->id; ?>",
            redirectMode: "self"
        }
      });
  </script>
</body>
</html>