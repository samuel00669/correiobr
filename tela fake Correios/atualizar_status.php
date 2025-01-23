<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "rastreamento";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Definir o tempo máximo de inatividade (5 minutos = 300 segundos)
$timeout = 300;
$current_time = time();

// Atualizar o status de online para offline se estiver inativo
$sql = "UPDATE user_tracking
        SET is_online = 0
        WHERE UNIX_TIMESTAMP(last_activity) < ($current_time - $timeout)";

if ($conn->query($sql) === TRUE) {
    echo "Status atualizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
