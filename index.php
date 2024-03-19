<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\TextMessage;


$textMessage = new TextMessage(
'v19.0',
'103211462576623',
'260769891754',
'EAALG7oWrKU4BO5ofhqZACnNzMdsSyhvSWmVZA6mY1M7FlZAzso7egSlA1eEobdSHKVq1SaYY1fcH7cWvRkO7eawnGI9p2Dei1VLZCnQag4S4ZCwBO92hxSuECOzFE5tNrncHsEXppY1PkDaQjj7H6igdgRFcehSAo2upQlfoYlPSundltPu5Y2HYk5xDKTCWfrRgNfZBhlle0SfvM7Tt0ZD');

$response = $textMessage->text(   
    'Good morning'
   
);

echo $response;
