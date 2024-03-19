<?php

namespace Chandachewe\Whatsapp\Messages;

require '.../../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
use GuzzleHttp\Client;

class ButtonMessage
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

    public function button(string $header = null, string $body, string $footer = null, $sections, string $type, string $link = null)
    {
        try {
            if (strtolower($type === 'image')) {
                $data = [
                    'messaging_product' => 'whatsapp',
                    'recipient_type'    => 'individual',
                    'to'                => $this->recipientNumber,
                    'type'              => 'interactive',
                    'interactive'       => [
                        'type'   => 'button',
                        'header' => [
                            'type'  => 'image',
                            'image' => [
                                'link' => $link,
                            ],
                        ],
                        'body' => [
                            'text' => $body,
                        ],
                        'footer' => [
                            'text' => $footer,
                        ],
                        'action' => $sections,
                    ],
                ];
            } elseif (strtolower($type === 'document')) {
                $data = [
                    'messaging_product' => 'whatsapp',
                    'recipient_type'    => 'individual',
                    'to'                => $this->recipientNumber,
                    'type'              => 'interactive',
                    'interactive'       => [
                        'type'   => 'button',
                        'header' => [
                            'type'     => 'document',
                            'document' => [
                                'link' => $link,
                            ],
                        ],
                        'body' => [
                            'text' => $body,
                        ],
                        'footer' => [
                            'text' => $footer,
                        ],
                        'action' => $sections,
                    ],
                ];
            } elseif (strtolower($type === 'video')) {
                $data = [
                    'messaging_product' => 'whatsapp',
                    'recipient_type'    => 'individual',
                    'to'                => $this->recipientNumber,
                    'type'              => 'interactive',
                    'interactive'       => [
                        'type'   => 'button',
                        'header' => [
                            'type'  => 'video',
                            'video' => [
                                'link' => $link,
                            ],
                        ],
                        'body' => [
                            'text' => $body,
                        ],
                        'footer' => [
                            'text' => $footer,
                        ],
                        'action' => $sections,
                    ],
                ];
            } else {
                $data = [
                    'messaging_product' => 'whatsapp',
                    'recipient_type'    => 'individual',
                    'to'                => $this->recipientNumber,
                    'type'              => 'interactive',
                    'interactive'       => [
                        'type'   => 'button',
                        'header' => [
                            'type' => 'text',
                            'text' => $header,
                        ],
                        'body' => [
                            'text' => $body,
                        ],
                        'footer' => [
                            'text' => $footer,
                        ],
                        'action' => $sections,
                    ],
                ];
            }

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
