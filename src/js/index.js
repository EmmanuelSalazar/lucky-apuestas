$(document).ready(function() { 
    const fechaActual = new Date();
    const mes = fechaActual.getMonth();
    const año = fechaActual.getFullYear();
    const fechaFormateada = `${mes + 1}/${año}`;
    $('#checkboxLabel1').append(fechaFormateada);
    /* $('input').on("click", function(){
        var inputRadio = parseInt($('input:checked').val(), 10);           
            switch (inputRadio) {
                case 1: 
                        $('#checkboxLabel1').css('background', '#388C1A');
                        console.log(inputRadio);
                    break;
                case 2:
                        $('#checkboxLabel2').css('background', '#388C1A');
                        console.log(inputRadio);
                    break;
                case 3:
                        $('#checkboxLabel3').css('background', '#388C1A');
                        console.log(inputRadio);
                    break; 
                case 4:
                        $('#checkboxLabel4').css('background', '#388C1A');
                        console.log(inputRadio);
                    break;   

                default:
                    break;
            }   
        }
    ) */


})
