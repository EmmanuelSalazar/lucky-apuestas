<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'src/estructura/head.php'; ?>
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
                        <hr>
                        <div class="contTable">
                            <div class="col">
                                <img src="src/public/svg/1number_1_3080.svg" alt="" class="iconSVG"> 
                            </div>
                            <div class="col">
                                    <form id="lottery-form">
                                    <div class="col">
                                    <h3>Selecciona la fecha del Juego:</h3>
                                        <label for="date"></label>
                                        <input type="date" id="date" name="date" min="2024-07-27" required>
                                    </div>
                                </form>                                
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
                                    <div class="lottery" data-lottery="Medellin">
                                        <img src="medellin-logo.png" alt="Medellin Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Medellin" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Bogota">
                                        <img src="bogota-logo.png" alt="Bogota Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Bogota" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Valle">
                                        <img src="valle-logo.png" alt="Valle Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Valle" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Meta">
                                        <img src="meta-logo.png" alt="Meta Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Meta" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Boyaca">
                                        <img src="boyaca-logo.png" alt="Boyaca Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Boyaca" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Cundimarca">
                                        <img src="cundimarca-logo.png" alt="Cundimarca Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Cundimarca" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="PICK 4">
                                        <img src="pick4-logo.png" alt="PICK 4 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="PICK 4" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="PICK 3">
                                        <img src="pick3-logo.png" alt="PICK 3 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="PICK 3" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="PICK 2">
                                        <img src="pick2-logo.png" alt="PICK 2 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="PICK 2" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Caribeña noche">
                                        <img src="caribena-noche-logo.png" alt="Caribeña noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Caribeña noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Caribeña dia">
                                        <img src="caribena-dia-logo.png" alt="Caribeña dia Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Caribeña dia" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Cafeterito">
                                        <img src="cafeterito-logo.png" alt="Cafeterito Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Cafeterito" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Chontico noche">
                                        <img src="chontico-noche-logo.png" alt="Chontico noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Chontico noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Paisa 1">
                                        <img src="paisa1-logo.png" alt="Paisa 1 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Paisa 1" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Paisita 2">
                                        <img src="paisita2-logo.png" alt="Paisita 2 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Paisita 2" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Paisa noche">
                                        <img src="paisa-noche-logo.png" alt="Paisa noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Paisa noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Tolima">
                                        <img src="tolima-logo.png" alt="Tolima Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Tolima" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Hula">
                                        <img src="hula-logo.png" alt="Hula Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Hula" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Manizales">
                                        <img src="manizales-logo.png" alt="Manizales Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Manizales" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Quindío">
                                        <img src="quindio-logo.png" alt="Quindío Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Quindío" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Santander">
                                        <img src="santander-logo.png" alt="Santander Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Santander" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Risaralda">
                                        <img src="risaralda-logo.png" alt="Risaralda Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Risaralda" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Cauca">
                                        <img src="cauca-logo.png" alt="Cauca Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Cauca" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Antioqueñita 1">
                                        <img src="antioquenita1-logo.png" alt="Antioqueñita 1 Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="Antioqueñita 1" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="pijao de oro">
                                        <img src="pijao-oro-logo.png" alt="pijao de oro Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="pijao de oro" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="culona día">
                                        <img src="culona-dia-logo.png" alt="culona día Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="culona día" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="dorado día">
                                        <img src="dorado-dia-logo.png" alt="dorado día Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="dorado día" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="dorado noche">
                                        <img src="dorado-noche-logo.png" alt="dorado noche Logo" class="lottery-logo">
                                        <input type="text" class="lottery-name" value="dorado noche" readonly>
                                    </div>
                                    <div class="lottery" data-lottery="Antioqueñita 2">
                                        <img src="antioquenita2-logo.png" alt="Antioqueñita 2 Logo" class="lottery-logo">
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
                                    <p id="number">- - - -</p>
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
                                <input type="email" id="email" name="email" required>
                                <button class="btn">Realizar compra</button>
                            </div>
                        </div>
                </div>
            </div>
            </div>
            <!-- <div class="col">
                <div class="box">
                    asdfasdsa
                </div>
            </div> -->
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
</body>
</html>