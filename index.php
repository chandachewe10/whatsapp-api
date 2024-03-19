<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\ButtonMessage;


$buttonMessage = new ButtonMessage(
    'v19.0',
    '103211462576623',
    '260769891754',
    'EAALG7oWrKU4BO5ofhqZACnNzMdsSyhvSWmVZA6mY1M7FlZAzso7egSlA1eEobdSHKVq1SaYY1fcH7cWvRkO7eawnGI9p2Dei1VLZCnQag4S4ZCwBO92hxSuECOzFE5tNrncHsEXppY1PkDaQjj7H6igdgRFcehSAo2upQlfoYlPSundltPu5Y2HYk5xDKTCWfrRgNfZBhlle0SfvM7Tt0ZD'
);

$response = $buttonMessage->button(
    'List of Cities',
    'Please select the city where you are coming from',
    'optional footer',
    [
        'buttons' => [
            [
                'type' => 'reply',
                'reply' => [
                    'id' => 'unique-postback-id',
                    'title' => 'Mtn'
                ]
            ],
           
        ]
    ],
    'video',
    'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4'

);

echo $response;
