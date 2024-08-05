
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let raio = document.getElementById('raio').value

    fetch('exemplo.php?raio=' + raio).then(function(resposta) {
        return resposta.text();
    }).then(function(texto) {
        document.getElementById('mensagem').innerText = texto
    })
})