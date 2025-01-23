<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o novo valor do formulário
    $new_value = $_POST['new_value'];

    // Especifica o caminho do arquivo key.txt
    $file_path = 'key.txt';

    // Tenta abrir o arquivo para escrita
    if (file_put_contents($file_path, $new_value) !== false) {
        echo "CHAVE PIX ATUALIZADA!";
    } else {
        echo "ERRO AO ATUALIZAR CHAVE PIX CONTATE O ADM.";
    }
} else {
    echo "INVALID.";
}
?>
