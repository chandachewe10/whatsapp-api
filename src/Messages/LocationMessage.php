<?php

namespace Chandachewe\Whatsapp\Messages;

// Autoloader is handled by Composer when used as a package
// For standalone usage, ensure vendor/autoload.php is loaded before using this class
use GuzzleHttp\Client;

class LocationMessage
{
    private $version;
    private $businessPhoneNumberId;
    private $recipientNumber;
    private $token;

    public function __construct(string $version, $businessPhoneNumberId, $recipientNumber, string $token)
    {
        $this->version = $version;
        $this->businessPhoneNumberId = sprintf('%.0f', $businessPhoneNumberId);
        $this->recipientNumber = sprintf('%.0f', $recipientNumber);
        $this->token = $token;
    }

    public function location(string $longitude, string $latitude, string $nameOfLocation, string $address, string $body, string $footer = null, $sections)
    {
        try {
            $data = [
                'messaging_product' => 'whatsapp',
                'recipient_type'    => 'individual',
                'to'                => $this->recipientNumber,
                'type'              => 'LOCATION',
                'location'          => [
                    'longitude' => $longitude,
                    'latitude'  => $latitude,
                    'name'      => $nameOfLocation,
                    'address'   => $address,
                ],
                'body' => [
                    'type' => 'text',
                    'text' => $body,
                ],
                'footer' => [
                    'text' => $footer,
                ],
                'action' => $sections,
            ];

            $client = new Client();
            $jsonData = json_encode($data);
            $response = $client->post($_ENV['BASE_URI'].'/'.$this->version.'/'.$this->businessPhoneNumberId.'/messages', [
                'headers' => [
                    'Authorization' => 'Bearer '.$this->token,
                    'Content-Type'  => 'application/json',

                ],
                'body' => $jsonData,
            ]);

            $responseBody = $response->getBody();

            return $responseBody;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
