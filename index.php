<?php
require_once 'vendor/autoload.php';
use Chandachewe\Whatsapp\Messages\TextMessage;

 
$templateMessage = new TextMessage("v19.0", "103211462576623", "260769891754", "EAALG7oWrKU4BO37Sbq125BME9EZA6sp6LgblGaKjCjaQF8yQM2QZCFZAJL6CJ0lsfj16Gqm02Fyafo8uZChV5iT1rcAOvpNdRgOnm8PJ7GWEyVZCQolkc4UP0AZBgWbxN6vzO2E2F6FrEfpdERt8yT94pFd1qJowLvg4tixNiSoQXnZCTj9XIwidO6ZCnMCewwe1IPk7rbcmUE7ZBKdbTRH4S");

 
$response = $templateMessage->text('hello_world');

echo $response;



