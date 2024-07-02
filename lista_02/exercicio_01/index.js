
const formulario = document.getElementById('formulario')

formulario.addEventListener('submit', function(evento) {
    evento.preventDefault();

    const nome = document.getElementById('nome').value
    const email = document.getElementById('email').value

    console.log({
        "nome": nome,
        "email": email
    })
})