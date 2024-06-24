
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let nome = document.getElementById('nome').value

    document.getElementById('mensagem').innerText
        = 'Olá ' + nome + ', este é meu site'
})