<?php
namespace Chandachewe\Whatsapp\Messages;

require '.../../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
use GuzzleHttp\Client;

class TextMessage
{
    private $version;
    private $businessPhoneNumberId;
    private $recipientNumber;
    private $token;

    public function __construct(string $version, $businessPhoneNumberId, $recipientNumber, string $token)
{
    $this->version = $version;
    $this->businessPhoneNumberId = sprintf("%.0f", $businessPhoneNumberId);
    $this->recipientNumber = sprintf("%.0f", $recipientNumber); 
    $this->token = $token;
}


    public function text(string $message)
    {
        try {
          

            $data = [
                'messaging_product' => 'whatsapp',
                'recipient_type' => 'individual',
                'to' => $this->recipientNumber,
                'type' => 'text',
                'text' => [
                    'preview_url' => 'true',
                    'body' => $message
                ]
            ];

            $client = new Client();
            $jsonData = json_encode($data);
            $response = $client->post($_ENV['BASE_URI'].'/'.$this->version.'/'.$this->businessPhoneNumberId.'/messages', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type' => 'application/json',

                ],
                'body' => $jsonData
            ]);


            $responseBody = $response->getBody();
            return $responseBody;

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
