<?php

$api_key = getenv('API_KEY') ? getenv('API_KEY') : '';
$path = "https://api.telegram.org/bot$api_key";

$message = getenv('MESSAGE') ? getenv('MESSAGE') : 'Hello';

$update = json_decode(file_get_contents("php://input"), TRUE);

if ( isset($update["message"]) ) {
    file_get_contents($path . "/sendMessage?chat_id={$update['message']['chat']['id']}&text=$message");
}

?>
