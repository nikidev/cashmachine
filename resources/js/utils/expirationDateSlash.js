const expirationDate = document.getElementById('expiration-date');
expirationDate.addEventListener('input', (event) => {
    const input = event.target;
    const inputLength = input.value.length;
    if (inputLength === 2) {
        input.value += '/';
    }
});
