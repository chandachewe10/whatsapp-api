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


> Your version should be rounded to one decimal place e.g v19.0 and not v19
> The language code is optional here. If empty it will take the default as en_US
