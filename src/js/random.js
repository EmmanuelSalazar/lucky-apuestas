document.getElementById('genNum').addEventListener('click', function() {
    const number = Math.floor(1000 + Math.random() * 9000);
    $('#numLottery').attr('value', number);
});