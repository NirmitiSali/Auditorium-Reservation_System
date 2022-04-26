window.addEventListener('load', () => {
    const hemail = sessionStorage.getItem('email');
    document.getElementById('hemail').innerHTML = hemail;
})

