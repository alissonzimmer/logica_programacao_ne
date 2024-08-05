
let botao = document.getElementById('botao')

botao.addEventListener('click', function() {
    let num1 = document.getElementById('num1').value
    let num2 = document.getElementById('num2').value
    let num3 = document.getElementById('num3').value

    fetch('exemplo.php?num1=' + num1 + '&num2=' + num2 + '&num3=' + num3).then(function(resposta) {
        return resposta.text();
    }).then(function(texto) {
        document.getElementById('mensagem').innerText = texto
    })
})