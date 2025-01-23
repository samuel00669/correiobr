<?php
$servername = "localhost";
$username = "root"; // Altere conforme suas configurações
$password = ""; // Altere conforme suas configurações
$dbname = "rastreamento";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tempo limite para considerar um cliente como offline (5 minutos)
$timeout = 5 * 60;

$sql = "SELECT ip_address, location, cpf, TIMESTAMPDIFF(SECOND, last_activity, NOW()) AS time_since_last_activity
        FROM user_tracking";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>
    <h1>Status da Página</h1>

    <h2>Informações dos Usuários</h2>
    <table border="1">
        <tr>
            <th>IP</th>
            <th>Localização</th>
            <th>CPF</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $status = $row['time_since_last_activity'] < $timeout ? 'Online' : 'Offline';
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['ip_address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['location']) . "</td>";
                echo "<td>" . htmlspecialchars($row['cpf']) . "</td>";
                echo "<td>" . $status . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum dado disponível</td></tr>";
        }
        ?>
    </table>

    <?php
    $conn->close();
    ?>
</body>
</html>
