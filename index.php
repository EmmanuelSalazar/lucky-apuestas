<?php require 'src/php/API/mercadoPay.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'src/estructura/head.php'; ?>
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/lottery.css">
    <link rel="stylesheet" href="src/css/carrusel.css">
</head>
<body>
    <header>
        <?php include 'src/estructura/menu.php'; ?>
    </header>
    <main>
        <div class="row">
            <div class="col">
                <div class="box row">
                    <div class="col">
                        <form id="lottery-form" enctype="multipart/form-data">
                        <div class="contTable">
                            <div class="col">
                                <img src="src/public/svg/1number_1_3080.svg" alt="" class="iconSVG"> 
                            </div>
                            <div class="col">
                                    <div class="col">
                                    <h3>Selecciona la fecha del Juego:</h3>
                                        <label for="date"></label>
                                        <input type="date" id="date" name="date" min="2024-07-27" required>
                                    </div>                                 
                            </div>
                        </div>
                        <hr>
                        <div class="contTable">
                            <div class="col">
                                <img src="src/public/svg/2number_2_3830.svg" alt="" class="iconSVG">
                            </div>
                            <div class="col">
                                <h3>Selecciona la lotería de la suerte:</h3>
                                <div class="lotteries">
                                    <div class="lottery" data-lottery="Bogota">
                                        <img src="src/public/IMG/bogota.png" alt="Bogota Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Bogota" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Valle">
                                        <img src="src/public/IMG/valle.jpg" alt="Valle Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Valle" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Meta">
                                        <img src="src/public/IMG/meta loteria.png" alt="Meta Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Meta" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Boyaca">
                                        <img src="src/public/IMG/boyaca.jpg" alt="Boyaca Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Boyaca" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Cundimarca">
                                        <img src="src/public/IMG/cundinamarca.jpg" alt="Cundimarca Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Cundimarca" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="PICK 4">
                                        <img src="src/public/IMG/pick 4.png" alt="PICK 4 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="PICK 4" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="PICK 3">
                                        <img src="src/public/IMG/pick 3.png" alt="PICK 3 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="PICK 3" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="PICK 2">
                                        <img src="src/public/IMG/pcik 2.png" alt="PICK 2 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="PICK 2" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Medellin">
                                        <img src="src/public/IMG/Medellin.1.jpg" alt="Medellin.1.jpg"class="lottery-logo">
                                        <input type="text"  class="lottery-name" value="Medellin" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Caribeña noche">
                                        <img src="src/public/IMG/aribeña noche.jpg" alt="Caribeña noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Caribeña noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Caribeña dia">
                                        <img src="src/public/IMG/caribeña dia.jpg" alt="Caribeña dia Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Caribeña dia" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Cafeterito">
                                        <img src="src/public/IMG/cafeterito.jpg" alt="Cafeterito Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Cafeterito" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Chontico noche">
                                        <img src="src/public/IMG/chontico noche.jpg" alt="Chontico noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Chontico noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Paisa 1">
                                        <img src="src/public/IMG/PAISITA 1.jpg" alt="Paisa 1 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Paisa 1" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="EL SAMAN">
                                        <img src="src/public/IMG/saman.png" alt="EL SAMAN Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="EL SAMAN" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Paisa noche">
                                        <img src="src/public/IMG/PAISITA 1.jpg" alt="Paisa noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Paisa noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Tolima">
                                        <img src="src/public/IMG/tolima.png" alt="Tolima Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Tolima" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Hula">
                                        <img src="src/public/IMG/huila.jpg" alt="Hula Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Hula" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Manizales">
                                        <img src="src/public/IMG/manizales. loteria.png" alt="Manizales Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Manizales" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Quindío">
                                        <img src="src/public/IMG/quindio.jpg" alt="Quindío Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Quindío" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Santander">
                                        <img src="src/public/IMG/santander.jpg" alt="Santander Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Santander" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Risaralda">
                                        <img src="src/public/IMG/RISARALDA.png" alt="Risaralda Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Risaralda" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Cauca">
                                        <img src="src/public/IMG/cauca.png" alt="Cauca Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Cauca" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Antioqueñita 1">
                                        <img src="src/public/IMG/ANTIOQUEÑITA 1..png" alt="Antioqueñita 1 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Antioqueñita 1" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="pijao de oro">
                                        <img src="src/public/IMG/pijao.png" alt="pijao de oro Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="pijao de oro" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="culona día">
                                        <img src="src/public/IMG/CULONA.png" alt="culona día Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="culona día" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="dorado día">
                                        <img src="src/public/IMG/DORADO DIA.jpg" alt="dorado día Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="dorado día" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="dorado noche">
                                        <img src="src/public/IMG/DORADO NOCHE.jpg" alt="dorado noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="dorado noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Antioqueñita 2">
                                        <img src="src/public/IMG/antioqueñita 2.png" alt="Antioqueñita 2 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Antioqueñita 2" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="contTable">
                            <div class="col">
                                <img src="src/public/svg/3number_3_3078.svg" alt="" class="iconSVG">
                            </div>
                            <div class="col">
                                <h3>Generar tu número de la suerte</h3>
                                <p>Haz clic en el botón para obtener un número para jugar</p>
                                <button class="btn" id="genNum">Obtener número</button>
                                <div id="result">
                                    <input type="text" name="numLottery" id="numLottery" disabled>
                                </div>
                                <div class="aviso">
                                    <strong>CON ESTE NÚMERO PODRÍAS GANAR HASTA $2.000.000</strong>  
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="contTable">
                            <div class="col">
                                <img src="src/public/svg/4number_4_3076.svg" alt="" class="iconSVG">
                            </div>
                            <div class="col">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" id="userEmail" name="email" required>
                                <input type="submit" class="btn" value="Hacer compra">      
                            </div>
                    </form>  
                    </div>
                </div>
                </div>  
            </div>
            <div class="col">
            <div class="banner">
                <img src="src/public/IMG/banner1.png" alt="Banner de la Página">
            </div>

            </div>
    </main>
    <footer>
       <?php include 'src/estructura/footer.php' ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="src/js/country.js"></script>
    <script src="src/js/index.js"></script>
    <script src="src/js/random.js"></script>
    <script src="src/js/lottery.js"></script>
    <script src="src/js/carrusel.js"></script>
    <script src="src/js/controller/bill.js"></script>
</body>
</html>