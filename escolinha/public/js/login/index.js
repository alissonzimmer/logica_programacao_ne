document.getElementById("form").addEventListener("submit", function(e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    fetch("../../src/login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            username,
            password
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Erro ao enviar os dados");
        }
        return response.json(); // Processa a resposta como JSON
    })
    .then(data => {
        // Sucesso: o que fazer após a resposta do servidor
        console.log(data);
        alert("Login realizado com sucesso!"); // Ou redirecionar para outra página
    })
    .catch(error => {
        console.error("Erro:", error);
        alert("Erro no login. Tente novamente.");
    });
});