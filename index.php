<?php
require_once 'vendor/autoload.php';
use Chandachewe\Whatsapp\Messages\TemplateMessage;

 // Prepare    
$templateMessage = new TemplateMessage("v19.0", "", "260769891754", "");

 // Act
$response = $templateMessage->template('hello_world','en_US');

echo $response;
// Assert


