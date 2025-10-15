<?php
//IP e porta di accesso
$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'IP sconosciuto';
$porta = isset($_SERVER['REMOTE_PORT']) ? $_SERVER['REMOTE_PORT'] : 'Porta sconosciuta';

//Data e ora correnti
$dataOra = date('Y-m-d H:i:s');

//Info log
$log = "Accesso il $dataOra da IP: $ip, Porta: $porta\n";

//Gestione file
$handler = fopen('data/file.txt', 'a');
fwrite($handler, $log);
fclose($handler);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Register</title>
</head>
<body>
    <h1>Log Register</h1>
    <p>Ricarica la pagina per salvare le informazioni sul log nel file.</p>
</body>
</html>
