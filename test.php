<?php

require_once("utente.php");
require_once("pianeta.php");

$utente = new Utente("TeamBallo", "107280272");

$content = file_get_contents("php://input");
$update = json_decode($content, true);

$utente->getUtente();

/*function sendMessage($response) {
    global $chatId;
    $parameters = array('chat_id' => $chatId, "text" => $response);
    $parameters["method"] = "sendMessage";
    echo json_encode($parameters);
}

header("Content-Type: application/json");
$response = '';

if(strpos($text, "/start") === 0)
{
    $response = 'Malvenuto in Zonia, una brutta copia di OGame creata da @TeamBallo! Usa /registrami per registrarti! (BETA)';
    sendMessage($response);
}

else if(strpos($text, "/registrami") === 0)
{
    $response = $utente->creaUtente();
    sendMessage($response);
}

else if(strpos($text, "/status") === 0)
{
    $response = "Utente ".$utente->nome_utente." Livello ".$utente->livello;
    sendMessage($response);
}
$pianeta = new Pianeta("107280272", "Betelgeuse");
echo $pianeta->creaPianeta();
echo $pianeta->creaPianeta();
echo $pianeta->creaPianeta();
echo $utente->incrementaXP(10);*/

echo "Utente ".$utente->getNome_utente()." Livello ".$utente->getLivello();



?>