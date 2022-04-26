
function handleSubmit(){
    const email = document.getElementById('email').value;

    sessionStorage.setItem("email",email);
    return;
}
