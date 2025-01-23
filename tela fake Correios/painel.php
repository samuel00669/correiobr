

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Valor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f0f0;
        }
        .form-container {
            width: 100%;
            max-width: 500px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        .form-container input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .notification {
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 500px;
            opacity: 0;
            transition: opacity 0.5s;
        }
        .notification.show {
            opacity: 1;
        }
        .notification.offline {
            background-color: #ffc107;
            color: #856404;
        }
        .notification.online {
            background-color: #d4edda;
            color: #155724;
        }
        .control-buttons {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 500px;
        }
        .control-buttons button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .control-buttons .desligar {
            background-color: #dc3545;
            color: white;
        }
        .control-buttons .desligar:hover {
            background-color: #c82333;
        }
        .control-buttons .ligar {
            background-color: #28a745;
            color: white;
        }
        .control-buttons .ligar:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="updateKeyForm">
            <label for="new_value">CADASTRAR CHAVE PIX(TODOS OS BANCOS SAO ACEITOS):</label>
            <input type="text" id="new_value" name="new_value" required>
            <input type="submit" value="Atualizar">
        </form>
    </div>

    <div id="notification" class="notification"></div>

    <div class="control-buttons">
        <button onclick="sendAction('desligar')" class="desligar">Desligar Tela</button>
        <button onclick="sendAction('ligar')" class="ligar">Ligar Tela</button>
    </div>

    <script>
        function showNotification(message, type) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type} show`;
            setTimeout(() => {
                notification.classList.remove('show');
            }, 4000);
        }
        function showNotification(message, type) {
    const notification = document.getElementById('notification');
    notification.textContent = message;
    notification.className = `notification ${type} show`;
    setTimeout(() => {
        notification.classList.remove('show');
    }, 4000);
}

function sendAction(action) {
    fetch('interruptor.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: action
        })
    })
    .then(response => response.text())
    .then(responseText => {
        // Exibe a notificação com base na resposta
        showNotification(responseText, action === 'desligar' ? 'offline' : 'online');
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Erro ao processar a requisição', 'offline');
    });
}


        document.getElementById('updateKeyForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const newValue = document.getElementById('new_value').value;
            fetch('update_key.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    new_value: newValue
                })
            })
            .then(response => response.text())
            .then(responseText => {
                showNotification(responseText, 'online');
                document.getElementById('new_value').value = ''; // Clear the input
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Erro ao atualizar chave PIX', 'offline');
            });
        });
    </script>
</body>
</html>
