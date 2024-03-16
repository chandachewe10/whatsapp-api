<?php
namespace Chandachewe\Whatsapp\Messages;

require '.../../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
use GuzzleHttp\Client;

class TemplateMessage
{
    private $version;
    private $businessPhoneNumberId;
    private $recipientNumber;
    private $token;

    public function __construct(int $version, float $businessPhoneNumberId, float $recipientNumber, string $token)
    {
        $this->version = $version;
        $this->businessPhoneNumberId = $businessPhoneNumberId;
        $this->recipientNumber = $recipientNumber;
        $this->token = $token;
    }

    public function template(string $templateName, string $languageCode = null)
    {
        try {
            $client = new Client([
                'base_uri' => $_ENV['BASE_URI'],
                'timeout' => 120.0,
            ]);

            $data = [
                'messaging_product' => 'whatsapp',
                'to' => $this->recipientNumber,
                'type' => 'template',
                'template' => [
                    'name' => $templateName,
                    'language' => [
                        'code' => $languageCode ?? 'en_US'
                    ]
                ]
            ];


            $jsonData = json_encode($data);
            $response = $client->post($_ENV['BASE_URI'], [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type' => 'application/json',

                ],
                'body' => $jsonData
            ]);


            $responseBody = $response->getBody()->getContents();
            return $responseBody;

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
