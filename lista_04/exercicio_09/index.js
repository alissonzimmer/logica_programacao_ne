
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let ano = document.getElementById('ano').value

    fetch('exemplo.php?ano=' + ano).then(function(resposta) {
        return resposta.text();
    }).then(function(texto) {
        document.getElementById('mensagem').innerText = texto
    })
})