<?php
$notificationClass = '';
$notification = '';

// Lógica para ligar e desligar tela
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'desligar') {
            $htaccess_content = <<<HTACCESS
<Files "index.php">
    Order allow,deny
    Deny from all
</Files>
<Files "home.php">
    Order allow,deny
    Deny from all
</Files>
<Files "rastreamento.php">
    Order allow,deny
    Deny from all
</Files>
<Files "checkout.php">
    Order allow,deny
    Deny from all
</Files>
HTACCESS;
            file_put_contents('.htaccess', $htaccess_content);
            $notificationClass = 'offline';
            $notification = 'Tela Offline para Clientes';
        } elseif ($_POST['action'] == 'ligar') {
            file_put_contents('.htaccess', '');
            $notificationClass = 'online';
            $notification = 'Tela Online para Clientes';
        }

        // Retorna apenas a mensagem de status
        echo $notification;
        exit;
    }
}
?>
