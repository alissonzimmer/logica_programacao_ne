<?php

include_once 'db.php'; // Arquivo que contém a conexão com o banco de dados

class Usuario {

    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function login($username, $password) {
        // Consulta para verificar se o usuário existe e a senha está correta
        $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";
        $stm = $this->conn->prepare($sql);
        $stm->bind_param('s', $username);
        $stm->execute();
        $result = $stm->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verifica se a senha fornecida corresponde à senha armazenada
            if (password_verify($password, $user['password'])) {
                // Caso o login seja bem-sucedido, retornamos o ID do usuário
                return ['status' => 'ok', 'msg' => 'Login bem-sucedido', 'user_id' => $user['id']];
            } else {
                // Senha incorreta
                return ['status' => 'error', 'msg' => 'Senha incorreta'];
            }
        } else {
            // Usuário não encontrado
            return ['status' => 'error', 'msg' => 'Usuário não encontrado'];
        }
    }
}

// Apenas aceita requisições POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'msg' => 'Método inválido']);
    return;
}

// Captura os dados enviados pelo corpo da requisição
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['username']) || !isset($data['password'])) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'msg' => 'Dados incompletos']);
    return;
}

$username = $data['username'];
$password = $data['password'];

// Instancia o objeto da classe Usuario
$usuario = new Usuario($conn);

// Realiza a validação do login
$response = $usuario->login($username, $password);

// Retorna o resultado da autenticação
header('Content-Type: application/json');
if ($response['status'] === 'ok') {
    // Inicia a sessão se o login for bem-sucedido
    session_start();
    $_SESSION['user_id'] = $response['user_id'];
    echo json_encode($response);
} else {
    // Retorna erro em caso de falha no login
    http_response_code(401);
    echo json_encode($response);
}
