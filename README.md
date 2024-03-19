<h1 align="center">WhatsApp Business API</h1>

<p align="center">
This package shows you how to make WhatsApp Business API requests from your PHP Project. 
</p>



## Requirements

- PHP >= 8.1

## Installation

Install this package using `composer require`:

```bash
composer require chandachewe/whatsapp 
```


## Usage 

### Template Message
You need to create a template message from the whatsapp business API [Developer Portal](https://developers.facebook.com/)

```php
require 'vendor/autoload.php';  
use Chandachewe\Whatsapp\Messages\TemplateMessage;

$templateMessage = new TemplateMessage(
'v19.0',
'BUSINESS PHONE NUMBER ID',
'RECIPIENT PHONE NUMBER',
'TOKEN'
);

$response = $templateMessage->template(   
    'template_name',
    'language_code (optional)'
   
);

echo $response;

```
> Your version should be rounded to one decimal place e.g v19.0 and not v19
> The language code is optional here. If empty it will take the default as en_US


### Send a Text Message 
You can only send a template type message as your first message to a user. If you want to send a text message the user must first send a message to you or reply to any of the message you sent.

```php
<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\TextMessage;


$textMessage = new TextMessage(
'v19.0',
'BUSINESS PHONE NUMBER ID',
'RECIPIENT PHONE NUMBER',
'TOKEN'
);

$response = $textMessage->text(   
    'You have to check out this amazing messaging service https://www.whatsapp.com/'
   
);

echo $response;
```


### Send a List Message 
Messages including a menu of up to 10 options. This type of message offers a simpler and more consistent way for users to make a selection when interacting with a business.

```php
<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\ListMessage;


$listMessage = new ListMessage(
'v19.0',
'BUSINESS PHONE NUMBER ID',
'RECIPIENT PHONE NUMBER',
'TOKEN'
);

$response = $listMessage->list(   
    'Header',
    'Body Message',
    'Footer (Optional)',
    [
        'button' => 'title on drop down button',
        'sections' => [
            [
                'title' => 'first row title',
                'rows' => [
                    [
                        'id' => '100993900202',
                        'title' => 'Your heading',
                        'description' => 'Your decsription'
                    ]
                ],
               
                // You can add another title and row here 
                 ...
                
            ]
        ]
                    ]
                 
  
);

echo $response;

```



### Send a Button option Message 
These are Messages including up to 3 options —each option is a button. This type of message offers a quicker way for users to make a selection from a menu when interacting with a business.

```php
<?php
require_once 'vendor/autoload.php';

use Chandachewe\Whatsapp\Messages\ButtonMessage;


$buttonMessage = new ButtonMessage(
'v19.0',
'BUSINESS PHONE NUMBER ID',
'RECIPIENT PHONE NUMBER',
'TOKEN'
);

$response = $buttonMessage->button(
    'Header',
    'Body Message',
    'Footer (Optional)',
    [
        'buttons' => [
            [
                'type' => 'reply',
                'reply' => [
                    'id' => 'unique-postback-id',
                    'title' => 'your button title'
                ]
            ],
           
            // You can add another type and reply here 
                 ...
        ]
    ],
    'text',
    ''

);

echo $response;


```







