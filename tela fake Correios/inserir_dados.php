<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root"; // Altere para seu usuário do MySQL
$password = ""; // Altere para sua senha do MySQL
$dbname = "rastreamento";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recuperar dados do formulário
$cpf = $_POST['cpf'];
$ip_address = $_SERVER['REMOTE_ADDR'];
$location = 'Localização padrão'; // Ajuste conforme necessário

// Verificar se o CPF já existe
$sql = "SELECT * FROM user_tracking WHERE cpf = '$cpf'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Atualizar registro existente
    $sql = "UPDATE user_tracking 
            SET ip_address = '$ip_address', location = '$location', 
                is_online = 1, last_activity = CURRENT_TIMESTAMP 
            WHERE cpf = '$cpf'";
} else {
    // Inserir novo registro
    $sql = "INSERT INTO user_tracking (ip_address, location, cpf, is_online, last_activity) 
            VALUES ('$ip_address', '$location', '$cpf', 1, CURRENT_TIMESTAMP)";
}

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>
