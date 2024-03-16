<?php
require_once 'vendor/autoload.php';
use Chandachewe\Whatsapp\Messages\TemplateMessage;

 // Prepare    
$templateMessage = new TemplateMessage("v19.0", "103211462576623", "260769891754", "EAALG7oWrKU4BOZCXMJqbSgW2Pe9AFnOXleIVTrhjFGWVAlLo43ShC5yhd6BoLH8TcSEZCTQvMmLn4ouz4Knjwf1kwByfUmichwE9X3ZAXaI7QZCdLNCeFtXQALZBjakORNiJtYBSzeiYet3LxNhNgc6Blmd182JmQsQTMULmZAIZBfZAIhQCqCIJbhqjou5nx9EQ8zDt2Iw5MXLVIwusI8gZD");

 // Act
$response = $templateMessage->template('hello_world','en_US');

echo $response;
// Assert


