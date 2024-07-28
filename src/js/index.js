$(document).ready(function() { 
    const fechaActual = new Date();
    const mes = fechaActual.getMonth();
    const año = fechaActual.getFullYear();
    const fechaFormateada = `${mes + 1}/${año}`;
    $('#checkboxLabel1').append(fechaFormateada);
})
