$(document).ready(function() {

    $("#lottery-form").submit(function(event) {
        event.preventDefault();
        var formData = new FormData();
        var date = $('#date');
            formData.append('date', date);
        var  lottery = $('.selected').attr('value');
            formData.append('lottery', lottery);
        var numLottery = $("#number");
            formData.append('numLottery', numLottery);
        var userEmail = $('#userEmail');
            formData.append('userEmail', userEmail);

        $.ajax({
            type: "POST",
            url: 'src/php/API/bill.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                var respuesta = JSON.parse(data);

                switch (respuesta.request) {
                    case 1:
                        window.location.href = 'bill.php?billDir'+userEmail+'';

                }

            }
        })
    


    });
});