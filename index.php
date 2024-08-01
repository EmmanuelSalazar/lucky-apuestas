<!DOCTYPE html>
<heade>
 <?php require 'src/estructura/head.php';?>
    <style>
        .logo-text {
            display: flex;
            align-items: center;
        }
        .logo-text img {
            width: 100px; /* Ajusta el tamaño del logo según lo necesites */
            height: auto; /* Mantiene la proporción original */
            margin-right: -29px; /* Espacio entre el logo y el texto */
        }
    </style>
</body>
</html>
</head>
<body>
   
</head>
<body>
    <div class="logo-text">
        <img src="src/public/IMG/logo 4.jpg" alt="Logo de Lucky Apuestas">
</header>
<body>
    <header>
        <?php include 'src/estructura/menu.php'; ?>
       </div>
    </header><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página con Banner</title>
    <style>
        /* Estilos para el banner */
        .banner {
            width: 100%; /* Ancho completo de la ventana */
            text-align: center; /* Centra el contenido del banner */
            margin-bottom: -2px; /* Espacio debajo del banner */
        }
        .banner img {
            max-width: 200%; /* Ajusta el ancho de la imagen al ancho del contenedor */
            height: auto; /* Mantiene la proporción original de la imagen */
        }
    </style>
</head>
<body>
    <!-- Banner en el inicio de la página -->
    <div class="banner">
        <img src="src/public/IMG/CUANTO CUESTA HACER REALIDAD TUS SUEÑOS (1).png" alt="Banner de la Página">
    </div>
</body>
</html>
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
                            <p1>apuestas 1</p1>
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
                                        <input type="text" class="lottery-name" value="Huila" readonly>
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
                                    <script>
        function selectItem(element) {
            // Deselecciona todos los elementos
            var items = document.querySelectorAll('lottery-logo');
            items.forEach(function(item) {
                item.classList.remove('selected');
            });

            // Selecciona el elemento clicado
            element.classList.add('selected');
        }
    </script>
</body>
</html>
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
                                
                         </style>
                         </head>
<body>
    <div class="container">
        <button onclick="generateNumber()">Generar Número</button>
        <div id="result"></div>
    </div>

    <script>
        function generateNumber() {
            // Genera un número aleatorio entre 1 y 9999
            const number = Math.floor(Math.random() * 9999) + 1;
            // Muestra el número en el elemento con id="result"
            document.getElementById('result').textContent = number;
        }
    </script>
</body>
</html>

                            </div>
                        </div>
                        <hr>
                        <div class="contTable">
                            <div class="col">
                                <img src="src/public/svg/4number_4_3076.svg" alt="" class="iconSVG">
                            </div>
                            <div class="col">
                                <label for="email">Correo Electrónico para enviar resultados:</label>
                                <input type="email" id="email" name="email" required>
                                <button class="btn">Realizar compra</button>
                                <head>
                                <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso Color Oro</title>
    <style>
        .aviso {
            background-color: #FFD700; /* Color dorado */
            color: #000; /* Texto en negro para buen contraste */
            border: 2px solid #DAA520; /* Borde en un tono más oscuro de dorado */
            border-radius: 5px; /* Bordes redondeados */
            padding: 15px;
            font-size: 18px;
            text-align: center;
            width: 80%; /* Ajusta el ancho según tu necesidad */
            margin: 20px auto; /* Centra el aviso horizontalmente */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para un efecto de profundidad */
        }
    </style>
</head>
<body>
    <div class="aviso">
        <strong>PREMIO A GANAR: $2.000.000</strong> 
    </div>
</body>
</html>
</body>
</html>
            
          
                        
   

    </main>
    <footer>
       <?php include 'src/estructura/footer.php' ?>
    
    </footer>
   
</body>
</html>