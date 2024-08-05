
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let f = document.getElementById('f').value

    fetch('exemplo.php?f=' + f).then(function(resposta) {
        return resposta.text();
    }).then(function(texto) {
        document.getElementById('mensagem').innerText = texto
    })
})