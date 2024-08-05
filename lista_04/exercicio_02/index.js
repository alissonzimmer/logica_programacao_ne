
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let a = document.getElementById('a').value
    let b = document.getElementById('b').value

    fetch('exemplo.php?a=' + a + '&b=' + b).then(function(resposta) {
        return resposta.json();
    }).then(function(json) {
        document.getElementById('mensagem_antes').innerText = json['antes']
        document.getElementById('mensagem_apos').innerText = json['apos']
    })
})