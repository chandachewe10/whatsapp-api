<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\LocationMessage;


$templateMessage = new LocationMessage( 'v19.0',
'103211462576623',
'260769891754',
'EAALG7oWrKU4BO8sT6zUXLt3tYI3GKvqBjpX2hQDCVQCBk4ZBiTc8KJT7LKVdYYPZBLFkyuhD6fWkHw8uYEHtfyuAYxjudXbCQoYKeIJVdF0n5d3qarQ2M9Qa8vqZAVkX2erFI4JrErmYIGXZBQarO1H6LWvLnTG4uBFPVqaJ1bdg9bZAR2W0UhG2CGYoJ6ZAIhMSUkkTNZBcPaOBZA2VbSMZD');

$response = $templateMessage->location(   
    '-28.28882772',
    '35.2883883',
    'Lusaka',
    'Northmead',    
    'Please select the city where you are coming from on the map','',
    [
    'name' => 'send_location'
    ]   
);

echo $response;
