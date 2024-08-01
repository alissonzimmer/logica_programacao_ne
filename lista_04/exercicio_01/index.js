
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let a = document.getElementById('a').value
    let b = document.getElementById('b').value

    fetch('exemplo.php?a=' + a + '&b=' + b).then(function(resposta) {
        return resposta.text();
    }).then(function(texto) {
        document.getElementById('mensagem').innerText = texto
    })
})