
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let num = document.getElementById('num').value

    fetch('exemplo.php?num=' + num).then(function(resposta) {
        return resposta.text();
    }).then(function(texto) {
        document.getElementById('mensagem').innerText = texto
    })
})