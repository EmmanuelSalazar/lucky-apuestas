$(document).ready(function() {
    $("#lottery-form").submit(function(event) {
       event.preventDefault();
        var formData = new FormData();
        var date = $('input[type="date"]').val();
            formData.append('date', date);
            console.log(date);
        var  lottery = $('.selected').children('input[type="text"]').val();
        console.log(lottery);
            formData.append('lottery', lottery);
        var numLottery = $('#result').children('input[type="text"]').val();
            formData.append('numLottery', numLottery);
        console.log(numLottery);
        var userEmail = $('.col').children('input[type="email"]').val();
        console.log(userEmail);
            formData.append('userEmail', userEmail);

            $.ajax({
                type: "POST",
                url: 'src/php/API/bill.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    var respuesta = JSON.parse(data);
                    switch (respuesta.request) {
                        case 1:
                            window.location.href = 'recibo.php?emailDir='+userEmail+'&numDir='+numLottery+'&lotteryDir='+lottery+'&dateDir='+date+'';
                        break;
                        case 0: 
                            console.log("Ha ocurrido un error:"+respuesta.error);
                            break;
                        default: 
                            console.log('Ha ocurrido un error');
                        break;
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error en la petición: " + status + " - " + error);
                }
            });
    


    });
});