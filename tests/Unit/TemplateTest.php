<?php
require_once './vendor/autoload.php';
use Chandachewe\Whatsapp\Messages\TemplateMessage;
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
it('asserts Template Messaging is working Fine', function () {
 // Prepare    
$templateMessage = new TemplateMessage("v19", "103211462576623", "260769891754", "EAALG7oWrKU4BOZCXMJqbSgW2Pe9AFnOXleIVTrhjFGWVAlLo43ShC5yhd6BoLH8TcSEZCTQvMmLn4ouz4Knjwf1kwByfUmichwE9X3ZAXaI7QZCdLNCeFtXQALZBjakORNiJtYBSzeiYet3LxNhNgc6Blmd182JmQsQTMULmZAIZBfZAIhQCqCIJbhqjou5nx9EQ8zDt2Iw5MXLVIwusI8gZD");

 // Act
$response = $templateMessage->template('hellow_world');

// Assert
expect($response)->not->toContain('error');



});