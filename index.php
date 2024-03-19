<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\ListMessage;


$listMessage = new ListMessage(
'v19.0',
'103211462576623',
'260769891754',
'EAALG7oWrKU4BO5ofhqZACnNzMdsSyhvSWmVZA6mY1M7FlZAzso7egSlA1eEobdSHKVq1SaYY1fcH7cWvRkO7eawnGI9p2Dei1VLZCnQag4S4ZCwBO92hxSuECOzFE5tNrncHsEXppY1PkDaQjj7H6igdgRFcehSAo2upQlfoYlPSundltPu5Y2HYk5xDKTCWfrRgNfZBhlle0SfvM7Tt0ZD');

$response = $listMessage->list(   
    'List Message',
    'You have to check out this amazing messaging service https://www.whatsapp.com/',
    'powered by abc',
    [
        'button' => 'Provinces',
        'sections' => [
            [
                'title' => 'Select Province',
                'rows' => [
                    [
                        'id' => '100993900202',
                        'title' => 'Lusaka',
                        'description' => 'Lusaka Province'
                    ]
                ]
            ]
        ]
                    ],
                 'text',
                 ''   

   
);

echo $response;
