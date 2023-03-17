const expirationDate = document.getElementById('transfer-date');
expirationDate.addEventListener('input', (event) => {
    const input = event.target;
    const inputLength = input.value.length;
    if (inputLength === 2 || inputLength === 5) {
        input.value += '/';
    }
});
