$(document).ready(function() { 
    const fechaActual = new Date();
    const mes = fechaActual.getMonth();
    const año = fechaActual.getFullYear();
    const fechaFormateada = `${mes + 1}/${año}`;
    $('#checkboxLabel1').append(fechaFormateada);
})
<script>
        function selectItem(element) {
            // Deselecciona todos los elementos
            var items = document.querySelectorAll('.lottery-item');
            items.forEach(function(item) {
                item.classList.remove('selected');
            });

            // Selecciona el elemento clicado
            element.classList.add('selected');<script>
            function selectItem(element) {
                // Deselecciona todos los elementos
                var items = document.querySelectorAll('.lottery-item');
                items.forEach(function(item) {
                    item.classList.remove('selected');
                });
    
                // Selecciona el elemento clicado
                element.classList.add('selected');
            }
        </script>
    </body>
    </html>
        }
    </script>
</body>
</html>
