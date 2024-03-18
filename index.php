<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\ButtonMessage;

$templateMessage = new ButtonMessage( 'v19.0',
'103211462576623',
'260769891754',
'EAALG7oWrKU4BO8sT6zUXLt3tYI3GKvqBjpX2hQDCVQCBk4ZBiTc8KJT7LKVdYYPZBLFkyuhD6fWkHw8uYEHtfyuAYxjudXbCQoYKeIJVdF0n5d3qarQ2M9Qa8vqZAVkX2erFI4JrErmYIGXZBQarO1H6LWvLnTG4uBFPVqaJ1bdg9bZAR2W0UhG2CGYoJ6ZAIhMSUkkTNZBcPaOBZA2VbSMZD');

$response = $templateMessage->button(   
    'List of Cities',
    'Please select the city where you are coming from','',
    [
        'buttons' => [
            [
                'type' => 'reply',
                'reply' => [
                    'id' => 'unique-postback-id',
                    'title' => 'Mtn'
                ]
            ],
            [
                'type' => 'reply',
                'reply' => [
                    'id' => 'unique-postback2-id',
                    'title' => 'Airtel'
                ]
            ],
            [
                'type' => 'reply',
                'reply' => [
                    'id' => 'unique-postback3-id',
                    'title' => 'Zamtel'
                ]
            ]
        ]
    ]
    
);

echo $response;
