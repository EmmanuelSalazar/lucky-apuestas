document.addEventListener('DOMContentLoaded', function() {
    const lotteries = document.querySelectorAll('.lottery');
    let selectedLottery = '';

    lotteries.forEach(lottery => {
        lottery.addEventListener('click', function() {
            lotteries.forEach(l => l.classList.remove('selected'));
            this.classList.add('selected');
            selectedLottery = this.getAttribute('data-lottery');
        });
    });

    document.getElementById('generate-number').addEventListener('click', function() {
        const randomNumber = Math.floor(Math.random() * 10000).toString().padStart(4, '0');
        document.getElementById('random-number').value = randomNumber;
    });

    document.getElementById('lottery-form').addEventListener('submit', function(e) {
        if (!selectedLottery) {
            alert('Por favor, selecciona una lotería.');
            e.preventDefault(); // Prevent form submission
        }
    });
});