document.getElementById('generate-btn').addEventListener('click', function() {
    const number = Math.floor(1000 + Math.random() * 9000);
    document.getElementById('number').textContent = number;
});