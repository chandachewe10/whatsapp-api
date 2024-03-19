<?php

require_once './vendor/autoload.php';
use Chandachewe\Whatsapp\Messages\TemplateMessage;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
it('asserts Template Messaging is working Fine', function () {
    // Prepare
    $templateMessage = new TemplateMessage('v19.0', '103211462576623', '260769891754', '');

    // Act
    $response = $templateMessage->template('hello_world');

    // Assert
    expect($response)->not->toContain('error');
});
