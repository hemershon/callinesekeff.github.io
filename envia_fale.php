<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "faleconosco@callinesekeff.com.br";

$to = "estrategia@callinesekeff.com.br";

$subject = "Verificando o correio do PHP";

$message = "O correio do PHP funciona bem";

$headers = "De:". $from;

mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>