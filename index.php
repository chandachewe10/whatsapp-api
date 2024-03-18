<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\TemplateMessage;


$templateMessage = new TemplateMessage( 'v19.0',
'103211462576623',
'260769891754',
'EAALG7oWrKU4BO65N3tTgzFoGxgMUY3O0whurJgIrH60ohm4zKsMkgeg7cgPR1HjQeXMkDOWUfInnG6inQcnE3AwAXzdkYrqs6RR76lsVv6T7XF7Vuqm2SuOm3fRDg9SUrFgBfxs2OTaSy22P87ZCwpjy0L1tg2BbbFYZAxijpsX8ZBob0R1lUrIwYzfyQUlyVCnmkQ90iO8DpWTuxIZD');

$response = $templateMessage->template(   
    'hello_world'
   
);

echo $response;
